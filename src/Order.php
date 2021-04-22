<?php

namespace Dada;

class Order
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    /**
     * 增加订单
     */
    public function addOrder(array $options)
    {
        return $this->base->makeRequest('/api/order/addOrder', $options);
    }

    /**
     * 订单重发
     */
    public function reAddOrder(array $options)
    {
        return $this->base->makeRequest('/api/order/reAddOrder', $options);
    }

    /**
     * 查询订单运费
     */
    public function queryDeliverFee(array $options)
    {
        return $this->base->makeRequest('/api/order/queryDeliverFee', $options);
    }

    /**
     * 查询运费后发单
     */
    public function addAfterQuery(array $options)
    {
        return $this->base->makeRequest('/api/order/addAfterQuery', $options);
    }

    /**
     * 添加小费
     */
    public function addTip(array $options)
    {
        return $this->base->makeRequest('/api/order/addTip', $options);
    }

    /**
     * 查询订单详情
     */
    public function queryStatus(array $options)
    {
        return $this->base->makeRequest('/api/order/status/query', $options);
    }

    /**
     * 查询订单详情
     */
    public function queryTrack(array $options)
    {
        return $this->base->makeRequest('/api/order/transporter/track', $options);
    }
    /**
     * 订单取消
     */
    public function cancel(array $options)
    {
        return $this->base->makeRequest('/api/order/formalCancel', $options);
    }

    /**
     * 订单取消原因
     */
    public function getCancelReason(array $options)
    {
        return $this->base->makeRequest('/api/order/cancel/reasons', $options);
    }

    /**
     * 追加订单
     */
    public function appointExist(array $options)
    {
        return $this->base->makeRequest('/api/order/appoint/exist', $options);
    }

    /**
     * 取消追加订单
     */
    public function appointCancel(array $options)
    {
        return $this->base->makeRequest('/api/order/appoint/cancel', $options);
    }

    /**
     * 查询追加配送员
     */
    public function appointListTransporter(array $options)
    {
        return $this->base->makeRequest('/api/order/appoint/list/transporter', $options);
    }

    /**
     * 测试环境模拟接受订单
     */
    public function orderAccept(array $options)
    {
        return $this->base->makeRequest('/api/order/accept', $options);
    }

    /**
     * 测试环境模拟完成取货
     */
    public function orderFetch(array $options)
    {
        return $this->base->makeRequest('/api/order/fetch', $options);
    }

    /**
     * 测试环境模拟完成订单
     */
    public function orderfinish(array $options)
    {
        return $this->base->makeRequest('/api/order/finish', $options);
    }

    /**
     * 测试环境模拟取消订单
     */
    public function orderCancel(array $options)
    {
        return $this->base->makeRequest('/api/order/cancel', $options);
    }

    /**
     * 测试环境模拟订单过期
     */
    public function orderExpire(array $options)
    {
        return $this->base->makeRequest('/api/order/expire', $options);
    }
}