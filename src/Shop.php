<?php

namespace Dada;

use Dada\Base;

class Shop
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    /**
     * 获取城市信息列表
     */
    public function getCityList()
    {
        return $this->base->makeRequest('/api/cityCode/list', []);
    }

    /**
     * 添加商户
     */
    public function addMerchant(array $options)
    {
        return $this->base->makeRequest('/merchantApi/merchant/add', $options);
    }

    /**
     * 添加门店
     */
    public function addShop(array $options)
    {
        return $this->base->makeRequest('/api/shop/add', [$options]);
    }

    /**
     * 更新门店
     */
    public function updateShop(array $options)
    {
        return $this->base->makeRequest('/api/shop/update', $options);
    }

    /**
     * 获取门店详情
     */
    public function getShop(array $options)
    {
        return $this->base->makeRequest('/api/shop/detail', $options);
    }
}