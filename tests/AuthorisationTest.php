<?php


use PHPUnit\Framework\TestCase;
use Yeejiawei\TiktokShopApi\Client;

class AuthorisationTest extends TestCase
{
    public function test_can_generate_authorization_url()
    {
        $client = new Client(['app_key' => 'testKey', 'app_secret' => 'testSecret']);

        $this->assertStringStartsWith('https://auth.tiktok-shops.com/oauth/authorize?app_key=testKey&state=', $client->getAuthorizationUrl());
    }
}
