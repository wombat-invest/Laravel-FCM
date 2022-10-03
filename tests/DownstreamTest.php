<?php

namespace WombatInvest\LaravelFCM\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use Mockery\MockInterface;
use WombatInvest\LaravelFCM\Response\Exceptions\InvalidRequestException;
use WombatInvest\LaravelFCM\Sender\FCMSender;

class DownstreamTest extends FCMTestCase
{
    public function testSendNotificationToDevice()
    {
        $response = new Response(200, [], '{ 
            "multicast_id": 216,
            "success": 3,
            "failure": 3,
            "canonical_ids": 1,
            "results": [
                { "message_id": "1:0408" }
            ]
        }');

        /** @var MockInterface|ClientInterface $client */
        $client = $this->mock(Client::class);
        $client->shouldReceive('request')->once()->andReturn($response);

        $tokens = 'uniqueToken';

        $fcm = new FCMSender($client, 'http://test.test');
        $fcm->sendTo($tokens);
    }

    /**
     * @test
     */
    public function testSendNotificationToManyDevices()
    {
        $response = new Response(200, [], '{ 
            "multicast_id": 216,
            "success": 3,
            "failure": 3,
            "canonical_ids": 1,
            "results": [
                { "message_id": "1:0408" },
                { "error": "Unavailable" },
                { "error": "InvalidRegistration" },
                { "message_id": "1:1516" },
                { "message_id": "1:2342", "registration_id": "32" },
                { "error": "NotRegistered"}
            ]
        }');

        /** @var MockInterface|ClientInterface $client */
        $client = $this->mock(Client::class);
        $client->shouldReceive('request')->times(10)->andReturn($response);

        $tokens = [];
        for ($i = 0; $i < 10000; ++$i) {
            $tokens[$i] = 'token_' . $i;
        }

        $fcm = new FCMSender($client, 'http://test.test');
        $fcm->sendTo($tokens);
    }

    public function testEmptyTokens()
    {
        $response = new Response(400, [], '{ 
            "multicast_id": 216,
            "success": 3,
            "failure": 3,
            "canonical_ids": 1,
            "results": [
                { "message_id": "1:0408" },
                { "error": "Unavailable" },
                { "error": "InvalidRegistration" },
                { "message_id": "1:1516" },
                { "message_id": "1:2342", "registration_id": "32" },
                { "error": "NotRegistered"}
            ]
        }');

        /** @var MockInterface|ClientInterface $client */
        $client = $this->mock(Client::class);
        $client->shouldReceive('request')->once()->andReturn($response);

        $this->expectException(InvalidRequestException::class);

        $fcm = new FCMSender($client, 'http://test.test');
        $fcm->sendTo([]);
    }
}
