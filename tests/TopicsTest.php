<?php

namespace WombatInvest\LaravelFCM\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use Mockery\MockInterface;
use WombatInvest\LaravelFCM\Message\Topics;
use WombatInvest\LaravelFCM\Sender\FCMSender;
use WombatInvest\LaravelFCM\Message\Exceptions\NoTopicProvidedException;

class TopicsTest extends FCMTestCase
{
    public function testThrowsExceptionIfNoTopicProvided()
    {
        $this->expectException(NoTopicProvidedException::class);

        $topics = new Topics();
        $topics->build();
    }

    public function testOneTopic()
    {
        $target = '/topics/myTopic';

        $topics = new Topics();
        $topics->topic('myTopic');

        $this->assertEquals($target, $topics->build());
    }

    public function testAndCondition()
    {
        $target = ['condition' => "'firstTopic' in topics && 'secondTopic' in topics"];

        $topics = new Topics();
        $topics->topic('firstTopic')->andTopic('secondTopic');

        $this->assertEquals($target, $topics->build());
    }

    public function testOrCondition()
    {
        $target = ['condition' => "'firstTopic' in topics || 'secondTopic' in topics"];

        $topics = new Topics();
        $topics->topic('firstTopic')->orTopic('secondTopic');

        $this->assertEquals($target, $topics->build());
    }

    public function testOrWithAndCondition()
    {
        $target = ['condition' => "'firstTopic' in topics || 'secondTopic' in topics && 'thirdTopic' in topics"];

        $topics = new Topics();
        $topics->topic('firstTopic')->orTopic('secondTopic')->andTopic('thirdTopic');

        $this->assertEquals($target, $topics->build());
    }

    public function testComplexCondition()
    {
        $target = [
            'condition' => "'TopicA' in topics && " .
                "('TopicB' in topics || 'TopicC' in topics) || " .
                "('TopicD' in topics && 'TopicE' in topics)"
            ,
        ];

        $topics = new Topics();
        $topics->topic('TopicA')
            ->andTopic(function ($condition) {
                $condition->topic('TopicB')->orTopic('TopicC');
            })
            ->orTopic(function ($condition) {
                $condition->topic('TopicD')->andTopic('TopicE');
            });

        $this->assertEquals($target, $topics->build());
    }

    public function testSendNotification()
    {
        $response = new Response(200, [], '{"message_id":6177433633397011933}');

        /** @var MockInterface|ClientInterface $client */
        $client = $this->mock(Client::class);
        $client->shouldReceive('request')->once()->andReturn($response);

        $fcm = new FCMSender($client, 'http://test.test');

        $topics = new Topics();
        $topics->topic('test');

        $response = $fcm->sendToTopic($topics);

        $this->assertTrue($response->isSuccess());
        $this->assertFalse($response->shouldRetry());
        $this->assertNull($response->error());
    }

    public function testSendNotificationWithError()
    {
        $response = new Response(200, [], '{"error":"TopicsMessageRateExceeded"}');

        /** @var MockInterface|ClientInterface $client */
        $client = $this->mock(Client::class);
        $client->shouldReceive('request')->once()->andReturn($response);

        $fcm = new FCMSender($client, 'http://test.test');

        $topics = new Topics();
        $topics->topic('test');

        $response = $fcm->sendToTopic($topics);

        $this->assertFalse($response->isSuccess());
        $this->assertTrue($response->shouldRetry());
        $this->assertEquals('TopicsMessageRateExceeded', $response->error());
    }
}
