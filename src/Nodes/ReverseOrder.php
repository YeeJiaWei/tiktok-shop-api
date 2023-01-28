<?php


namespace Yeejiawei\TiktokShopApi\Nodes;


class ReverseOrder extends \Yeejiawei\TiktokShopApi\Node
{

    public function getNodeEndpoint(): string
    {
        return 'reverse';
    }

    public function confirmReverse(array $params = [])
    {
        return $this->post('/reverse_request/confirm', $params);
    }

    public function rejectReverse(array $params = [])
    {
        return $this->post('/reverse_request/reject', $params);
    }

    public function getReverseList(array $params = [])
    {
        return $this->post('/reverse_order/list', $params);
    }

    public function getReverseReason(array $params = [])
    {
        return $this->post('/reverse_reason/list', $params);
    }
}
