<?php

require "vendor/autoload.php";

use Dadax\Base;

$dada = new Base('dada731986294545472fed98', '226c4be7003a1342599a9d784e1');
$dada->setSourceId('73753');

// 注册商户
// $data['mobile'] = '18995543120';
// $data['city_name'] = '武汉';
// $data['enterprise_name'] = '武汉楚鹿科技有限公司';
// $data['enterprise_address'] = '亚贸广场';
// $data['contact_name'] = '艾翔飞';
// $data['contact_phone'] = '18995543120';
// $data['email'] = '2792938834@qq.com';
// $result = $shop->addMerchant($data)->getResult();
// var_dump($result);
// exit;

// $data["station_name"] = "楚鹿";
// $data["business"] = 1;
// $data["city_name"] = "武汉";
// $data["area_name"] = "洪山区";
// $data["station_address"] = "武商亚贸广场2003";
// $data["lng"] = "114.344124";
// $data["lat"] = "30.528305";
// $data["contact_name"] = "艾翔飞";
// $data["phone"] = "18995543120";
// $data["origin_shop_id"] = "chudeer";

// 添加门店
// $data['station_name'] = '武汉楚鹿测试'.time();
// $data['business'] = 1;
// $data['city_name'] = '武汉';
// $data['area_name'] = '洪山区';
// $data['station_address'] = '武汉市武昌区亚贸广场B座2304';
// $data['lng'] = '114.34261';
// $data['lat'] = '30.52921';
// $data['contact_name'] = '艾xxx';
// $data['phone'] = '18995543333';
// $data['origin_shop_id'] = 'test_'.time();
// $result = $dada->shop->addShop($data)->getResult();

// var_dump($result);
// exit;

// $result = $dada->shop->getCityList()->getResult();
// var_dump($result);

// 查询余额
// $options['category_id'] = 3;
// $result = $dada->balance->query($options)->getResult();
// var_dump($result);
// exit;

// 充值
// $options['amount'] = 5;
// $options['category'] = 'PC';
// $result = $dada->balance->recharge($options)->getResult();
// var_dump($result);
// exit;

// $order = $dada->order;

// $order_id = time();
// echo "创建订单号：".$order_id."\n";
// $data = array(
//     'shop_no'=> '11047059',
//     'origin_id'=> $order_id,
//     'city_code'=> '021',
//     'info'=> '测试订单',
//     'cargo_price'=> 10,
//     'receiver_name'=> '测试',
//     'receiver_address'=> '上海市崇明岛',
//     'receiver_phone'=> '18588888888',
//     'receiver_tel'=> '18599999999',
//     'receiver_lat'=> 31.63,
//     'receiver_lng'=> 121.41,
//     'callback'=>'http://dianfan-test.chudeer.com/api/test'
// );

// echo "下单\n";
// $result = $order->addOrder($data)->getResult();
// var_dump($result);

// echo "开始预下单\n";
// $result = $order->queryDeliverFee($data)->getResult();
// var_dump($result);
// exit;

// echo "开始下单\n";
// $options['deliveryNo'] = $result['deliveryNo'];
// $order->addAfterQuery($options)->getResult();

// echo "等待10秒钟，查询订单详情\n";
// sleep(10);
// $result = $order->queryStatus(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，接单\n";
// sleep(5);
// $result = $dada->order->orderAccept(['order_id' => $order_id])->getResult();
// var_dump($result);
// exit;

// echo "等待5秒钟，查询订单详情\n";
// sleep(5);
// $result = $order->queryStatus(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，完成取货\n";
// sleep(5);
// $result = $dada->order->orderFetch(['order_id' => $order_id])->getResult();
// var_dump($result);
//exit;

// echo "等待5秒钟，查询订单详情\n";
// sleep(5);
// $result = $order->queryStatus(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，取消订单\n";
// sleep(5);
// $result = $order->orderCancel(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，查询订单详情\n";
// sleep(5);
// $result = $order->queryStatus(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，订单过期\n";
// sleep(5);
// $result = $order->orderExpire(['order_id' => $order_id])->getResult();
// var_dump($result);

// echo "等待5秒钟，查询订单详情\n";
// sleep(5);
// $result = $order->queryStatus(['order_id' => $order_id])->getResult();
// var_dump($result);