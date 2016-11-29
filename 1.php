<?php
var_dump(strtotime(date('Y-m-d H:i:s',strtotime(date('Y',time()).'-'.date('m',time()).'-25'))));die;
echo  date('ymdhis');die;
echo date('Y-m-d H:i:s', mktime(10,00,00,date('m'),date('d',strtotime('+1 day')),date('Y')));die;
$j = '{
    "result": "success",
    "code": 0,
    "info": {
        "order": {
            "order_id": 801191,
            "price_infos": [
                {
                    "title": "订单总额",
                    "type": "total",
                    "price": "5.00",
                    "position": 0
                },
                {
                    "title": "店铺总额",
                    "type": "shop_total",
                    "price": "4.00",
                    "position": 100
                },
                {
                    "title": "商品总额",
                    "type": "sub_total",
                    "price": "3.00",
                    "position": 105
                },
                {
                    "title": "打赏费",
                    "type": "tips",
                    "price": "0.00",
                    "position": 50
                },
                {
                    "title": "运费",
                    "type": "shipping_fee",
                    "price": "2.00",
                    "position": 120
                },
                {
                    "title": "配送费",
                    "type": "deliver_fee",
                    "price": "12.00",
                    "position": 150
                }
            ],
            "store": {
                "name": "无敌小龙虾测试单",
                "address": "怒江北路598",
                "telephone": "021-60171728"
            },
            "display_id": "815512189325775388",
            "exman_id": 2004,
            "partner_order_no": "43435612",
            "order_total": "5000.00",
            "collection": "5000.00",
            "tips": "0.00",
            "network_name": "莘庄网点",
            "shipping_fee": "2.00",
            "comment": "评论",
            "txn_id": "",
            "pickup_distance": 1,
            "delivery_distance": 5.2,
            "order_source": "平台接口",
            "order_status_id": 4,
            "order_status_label": "已接单",
            "order_payment": {
                "payment_method": "POS支付(商)",
                "payment_id": "posb"
            },
            "shipping_address": {
                "name": "张三",
                "province": "上海",
                "city": "上海市",
                "district": "徐汇区",
                "address": "华山路18号2楼101室",
                "telephone": "13564182894"
            },
            "pickup_address": {
                "name": "接口测试单别接单",
                "province": "上海",
                "city": "上海",
                "district": "普陀区",
                "address": "怒江北路",
                "telephone": "15821595634"
            },
            "placed_date": "2016-10-14 12:01:30",
            "order_products": [
                {
                    "order_product_id": 1205,
                    "product_id": 0,
                    "en_name": "",
                    "name": "外卖",
                    "model": "",
                    "price": "0.00",
                    "total": "20.00",
                    "quantity": 1,
                    "image": "http://10.0.0.66/image/:1474251641/no_image.jpg"
                }
            ],
            "is_reservation": 0,
            "date_reservation": "",
            "allow_report_exception": false,
            "allow_report_exception_new": 2,
            "network_scope_id": 102,
            "network_scope_name": "长乐",
            "order_history": [
                {
                    "order_status_id": 4,
                    "display_text": "已接单",
                    "comments": "",
                    "date_added": "2016-10-20 11:23:10"
                },
                {
                    "order_status_id": 1,
                    "display_text": "待接单",
                    "comments": "",
                    "date_added": "2016-10-14 12:01:30"
                }
            ],
            "settle_amount": 0,
            "telephone": "13564182894",
            "need_buy": "需要买货",
            "fetch_code": "",
            "order_exception_report": null,
            "url": "http://10.0.0.44:81/api/order/exception-report?date=2016-10-25+11%3A01%3A05&exman_id=2004&order_id=801191&sign=a5df777827e78c21dc0088dc12524efa"
        }
    }
}';
$ja = json_decode($j,true);
echo '<pre>';
var_dump($ja['info']['order']['price_infos'][0]);die;
define('PARTNER_NO', '24011800026');
define('APP_KEY', 'EMYMPVCP');
define('APP_SECRET', 'CLjsE7QRvIbrg8iPOKqhllZxQU0rK71N');

$params = [];
$params['app_key'] = APP_KEY;
$params['partner_no'] = PARTNER_NO;
$params['sign_method'] = 'md5';
$params['method'] = 'gklife.order.add';
$params['time'] = time(); // 当前时间戳

$params['order_no'] = '150720111111936001';


ksort($params);

$paramsStr = implode('&', $params) . APP_SECRET;

$sign = strtoupper(md5($paramsStr));

var_dump($sign);die;

var_dump(strtoupper(md5("EMYMPVCPCLjsE7QRvIbrg8iPOKqhllZxQU0rK71Ngklife.order.add24011800026md51477041636928吹个球吹个大气球……10888888888888aaaaaaaaaaaaaa线上已支付'飞机','火车','火箭','迫击炮','螺丝刀'张黄河福园二路骏星工业园A-1-1深圳宝安区广东13825253691谢广文福园二路骏星工业园A-1-1深圳宝安区广东13825253691600200608000")));die;
$arr = array(
	'name' => 1,
	'age' => array('sex' => 'man','aa' => 'bb'),
	'ages' => array('sex' => 'man','aa' => 'bbb'),
);

foreach ($arr as $k =>$v){
	if($k == 'age'){
		if($v['aa'] == 'bb'){
			$a = '你好';
		}		
	}
	
}
$arr['name'] = $arr['name'].$a;	
var_dump($arr);
die;


function http_post_json($url, $jsonStr)
{
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStr);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json; charset=utf-8',
      'Content-Length: ' . strlen($jsonStr)
    )
  );
  $response = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  
  return array($httpCode, $response);
}

$url = 'http://apiv3.test.com/bluemoon/add/';
$jsonStr = '
{
    "merchantid": "1107020",
    "sign": "640983B426BD5EEA5B2B8D7658567FA8",
    "timestamp": "2016-08-31 11:35:56",
    "data": {
        "delivercode": "000111222333",
        "formcode": "1112223334444",
        "sendname": "tiger",
        "frommobile": "",
        "fromphone": "18519128280",
        "fromprovince": "北京",
        "fromcity": "北京",
        "fromarea": "大兴区",
        "fromaddress": "金星路24号",
        "addressee": "Dream",
        "receivetel": "15015015150",
        "mobilephone": "15015015150",
        "province": "江苏",
        "city": "昆山",
        "area": "三厢",
        "address": "三",
        "stationid": "1123",
        "companyname": "昆山站",
        "remark": "123",
        "ordersource": "京东",
        "goodlist": [
            {
                "goodinfo": "我是备用",
                "goodname": "iPad",
                "goodno": "12345",
                "goodnum": "2",
                "goodprice": "1111"
            }
        ]
    }
}
';
/*
$t1 = microtime(true);
for($i = 1; $i <= 10; $i ++){
	http_post_json($url, $jsonStr);
}
$t2 = microtime(true);
echo '平均用时耗时'.round(($t2-$t1)/10,3).'秒';
*/

http://openapi.gklife.com.cn/bluemoon/add