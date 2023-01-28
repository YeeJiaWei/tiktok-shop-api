<?php


namespace Yeejiawei\TiktokShopApi\Nodes;


class Finance extends \Yeejiawei\TiktokShopApi\Node
{

    public function getNodeEndpoint(): string
    {
        return 'finance';
    }

    public function searchSettlements(array $params = [])
    {
        return $this->post('/settlements/search', $params);
    }

    public function getOrderSettlements(array $params = [])
    {
        return $this->post('/order/settlements', $params);
    }

    public function searchTransactions(array $params = [])
    {
        return $this->post('/transactions/search', $params);
    }
}
