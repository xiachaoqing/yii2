<?php

namespace common\strategy;


abstract class Strategy
{
    /**
     * 请求参数信息
     * @var array
     */
    public $arrRequest = [];

    // 获取请求参数
    abstract function getRequest();

    // 返回数据
    abstract function handleResponse($array, $intTotal, $params = null);
}