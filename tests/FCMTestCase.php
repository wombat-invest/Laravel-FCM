<?php

namespace WombatInvest\LaravelFCM\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;
use WombatInvest\LaravelFCM\FCMServiceProvider;

abstract class FCMTestCase extends TestCase
{
    public function createApplication()
    {
        $app = require __DIR__ . '/../vendor/laravel/laravel/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();
        $app->register(FCMServiceProvider::class);

        $app['config']['fcm.driver'] = 'http';
        $app['config']['fcm.http.timeout'] = 20;
        $app['config']['fcm.http.server_send_url'] = 'http://test.test';
        $app['config']['fcm.http.server_key'] = 'key=myKey';
        $app['config']['fcm.http.sender_id'] = 'SENDER_ID';

        return $app;
    }
}
