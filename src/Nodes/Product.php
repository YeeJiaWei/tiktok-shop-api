<?php


namespace Yeejiawei\TiktokShopApi\Nodes;


use Yeejiawei\TiktokShopApi\Node;

class Product extends Node
{
    public function getNodeEndpoint(): string
    {
        return '/products';
    }

    public function getProductList(array $params = [])
    {
        return $this->post('/search', $params);
    }

    public function getProductDetail(string $productId, array $params = [])
    {
        return $this->get('/details', array_merge($params, [
            'product_id' => $productId,
        ]));
    }

    /**
     * @param string $productId
     * @param array{id: string, original_price: string> $skus
     *
     * @return mixed|\Yeejiawei\TiktokShopApi\Response
     */
    public function updatePrice(string $productId, array $skus = [])
    {
        return $this->put('/prices', [
            'product_id' => $productId,
            'skus' => $skus,
        ]);
    }

    /**
     * @param array $params
     * @param array{id: string, stock_infos: array{available_stock: int}> $skus
     *
     * @return mixed|\Yeejiawei\TiktokShopApi\Response
     */
    public function updateStock(string $productId, array $skus = [])
    {
        return $this->put('/stocks', [
            'product_id' => $productId,
            'skus' => $skus,
        ]);
    }

    public function activateProducts(array $productIds = [])
    {
        return $this->post('/activate', ['product_ids' => $productIds]);
    }

    public function deactivateProducts(array $productIds = [])
    {
        return $this->post('/inactivated_products', ['product_ids' => $productIds]);
    }
}
