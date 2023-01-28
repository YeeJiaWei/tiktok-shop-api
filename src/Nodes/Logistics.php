<?php


namespace Yeejiawei\TiktokShopApi\Nodes;


use Yeejiawei\TiktokShopApi\Node;

class Logistics extends Node
{
    public function getNodeEndpoint(): string
    {
        return 'logistics';
    }

    public function getShippingInfo(array $params = [])
    {
        return $this->post('/ship/get', $params);
    }

    public function updateShippingInfo(array $params = [])
    {
        return $this->post('/tracking', $params);
    }

    public function getShippingDocument(array $params = [])
    {
        return $this->post('/shipping_document', $params);
    }

    public function getWarehouseList(array $params = [])
    {
        return $this->post('/get_warehouse_list', $params);
    }

    public function getShippingProvider(array $params = [])
    {
        return $this->post('/shipping_providers', $params);
    }
}
