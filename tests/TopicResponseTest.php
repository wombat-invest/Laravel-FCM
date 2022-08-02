<?php

namespace WombatInvest\LaravelFCM\Tests;

use GuzzleHttp\Psr7\Response;
use WombatInvest\LaravelFCM\Message\Topics;
use WombatInvest\LaravelFCM\Response\TopicResponse;

class TopicsResponseTest extends FCMTestCase
{
    public function testTopicResponseSuccess()
    {
        $topic = new Topics();
        $topic->topic('topicName');

        $response = new Response(200, [], '{ "message_id": "1234" }');
        $topicResponse = new TopicResponse($response, $topic);

        $this->assertTrue($topicResponse->isSuccess());
        $this->assertFalse($topicResponse->shouldRetry());
        $this->assertNull($topicResponse->error());
    }

    public function testTopicResponseError()
    {
        $topic = new Topics();
        $topic->topic('topicName');

        $response = new Response(200, [], '{ "error": "MessageTooBig" }');
        $topicResponse = new TopicResponse($response, $topic);

        $this->assertFalse($topicResponse->isSuccess());
        $this->assertFalse($topicResponse->shouldRetry());
        $this->assertEquals('MessageTooBig', $topicResponse->error());
    }

    public function testTopicResponseErrorWithRetry()
    {
        $topic = new Topics();
        $topic->topic('topicName');

        $response = new Response(200, [], '{ "error": "TopicsMessageRateExceeded" }');
        $topicResponse = new TopicResponse($response, $topic);

        $this->assertFalse($topicResponse->isSuccess());
        $this->assertTrue($topicResponse->shouldRetry());
        $this->assertEquals('TopicsMessageRateExceeded', $topicResponse->error());
    }
}
