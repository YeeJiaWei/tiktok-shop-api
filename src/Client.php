<?php


namespace Yeejiawei\TiktokShopApi;


/**
 * Class Client
 * @package Yeejiawei\TiktokShopApi
 */
class Client
{
    use HasAuthorization;

    public string $apiHost = "https://open-api.tiktokglobalshop.com";

    public string $appKey;

    public string $appSecret;

    public string $shopId;

    public string $accessToken;

    public function __construct(array $config)
    {
        $this->appKey = $config['app_key'] ?? '';
        $this->appSecret = $config['app_secret'] ?? '';
        $this->shopId = $config['shop_id'] ?? '';
        $this->accessToken = $config['access_token'] ?? '';
    }

}
