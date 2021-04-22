<?php

namespace Dada;

use GuzzleHttp\Client;

class Base
{
    private $app_key = 'dadaf3f03dc32b07ed0';

    private $app_secret = '7e4e615af165fe63cbf40e52abbc79e8';

    private $v = "1.0";

    private $format = "json";

    private $source_id = '73753';

    private $code;

    private $result;

    public function __construct($app_key, $app_secret) 
    {
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
    }

    private function getBaseUrl()
    {
        if ($this->source_id == '73753') {
            return 'http://newopen.qa.imdada.cn';
        }
        return 'http://newopen.imdada.cn';
    }

    public function setSourceId($source_id)
    {
        $this->source_id = $source_id;

        return $this;
    }

    public function makeRequest($path, $data) 
    {
        $body = empty($data) ? '' : json_encode($data, JSON_UNESCAPED_UNICODE);
        $reqParams = $this->bulidRequestParams($body);
        $resp = json_decode((new Client)->post($this->getBaseUrl().$path, ['json' => $reqParams])->getBody(), true);
        $this->parseResponseData($resp);

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function __get($string)
    {
        $class_name = __NAMESPACE__ . '\\'.ucfirst($string);
        return new $class_name($this);
    }

    /**
     * 构建请求参数
     */
    private function bulidRequestParams($body) 
    {
        $requestParams['app_key'] = $this->app_key;
        $requestParams['body'] = $body;
        $requestParams['format'] = 'json';
        $requestParams['v'] = $this->v;
        $requestParams['source_id'] = $this->source_id;
        $requestParams['timestamp'] = time();
        $requestParams['signature'] = $this->sign($requestParams);

        return $requestParams;
    }

    /**
     * 解析响应数据
     */
    private function parseResponseData($data) 
    {
        if (!empty($data['code'])) {
            throw new \Exception($data['msg'], $data['code']);
        }

        $this->code = $data['code'];
        $this->result = $data['result'] ?? [];
    }

    /**
     * 签名
     */
    private function sign($data) 
    {
        // 1.升序排序
        ksort($data);

        // 2.字符串拼接
        $args = "";
        foreach ($data as $key => $value) {
            $args .= $key . $value;
        }
        $args = $this->app_secret . $args . $this->app_secret;

        // 3.MD5签名,转为大写
        $sign = strtoupper(md5($args));

        return $sign;
    }
}