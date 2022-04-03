<?php


namespace Yeejiawei\TiktokShopApi;


/**
 * Class Client
 * @package Yeejiawei\TiktokShopApi
 *
 * @method \Yeejiawei\TiktokShopApi\Nodes\Shop shop()
 * @method \Yeejiawei\TiktokShopApi\Nodes\Product product()
 * @method \Yeejiawei\TiktokShopApi\Nodes\Order order()
 * @method \Yeejiawei\TiktokShopApi\Nodes\Logistics logistics()
 * @method \Yeejiawei\TiktokShopApi\Nodes\Finance finance()
 * @method \Yeejiawei\TiktokShopApi\Nodes\ReverseOrder reverseOrder()
 * @method \Yeejiawei\TiktokShopApi\Nodes\Fulfillment fulfillment()
 */
class Client
{
    use HasAuthorization;

    public string $apiHost = "https://open-api.tiktokglobalshop.com";

    public string $appKey;

    public string $appSecret;

    public string $shopId;

    public string $accessToken;

    public function __construct(array $config = [])
    {
        $this->appKey = $config['app_key'] ?? '';
        $this->appSecret = $config['app_secret'] ?? '';
        $this->shopId = $config['shop_id'] ?? '';
        $this->accessToken = $config['access_token'] ?? '';
    }

    public function __call($name, $arguments)
    {
        $className = 'Yeejiawei\\TiktokShopApi\\Nodes\\' . ucfirst($name);
        if (!class_exists($className)) {
            throw new \Exception("Class {$className} not found");
        }
        return new $className($this);
    }

}
