<?php

namespace Dada;

class Balance
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    /**
     * 充值
     */
    public function recharge(array $options)
    {
        return $this->base->makeRequest('/api/recharge', $options);
    }

    /**
     * 查询余额
     */
    public function query(array $options)
    {
        return $this->base->makeRequest('/api/balance/query', $options);
    }
}