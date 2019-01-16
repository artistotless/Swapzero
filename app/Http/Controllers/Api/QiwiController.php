<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Swap;
use Illuminate\Support\Facades\Mail;
require_once __DIR__ . "/yandexWallet/yandex.php";
use App\Http\Controllers\Controller;
class QiwiController extends Controller
{
public function index(Request $data)
{

         /*     TEST  
     $yandex =  new \YM\YandexClass();
        $yandex->setUp();
        $yandex->sendMoney(array(
            "pattern_id" => "p2p",
            "to" => '410018470485289', // кошелек получателя
            "amount" => "1", // сумма
            "comment" => "Swapzero.net | QIWI -> Yandex", //Комментарий к переводу, отображается в истории отправителя.
            "message" => "Swapzero.net | QIWI -> Yandex", // Комментарий к переводу, отображается получателю.
            "label" => "swapzero", //Метка платежа
        ));
        */


$datacomm = explode("_", $data['payment']['comment']);

if(count($datacomm) == 4 && $datacomm[0] == 'swap'){




$curr2 = $datacomm[1]; // id Финальной валюты
$curr2detail = $datacomm[2]; // Адрес счета пользователя
$userid = $datacomm[3] - 785; // id пользователя

// middleware место 

//1) проверить, не исчерпан ли лимит обменов
//2) проверить, нет ли мультиаккаунтства


$NOTIFY_PWD ='CHgVjWOyg/lX5uATykRqM0quswLXv1y4vxUplfce3ZU=';

$hash1 = $data['payment']['sum']['currency'] .'|'. $data['payment']['sum']['amount'] . '|'. $data['payment']['type'] . '|' . $data['payment']['account'] . '|' . $data['payment']['txnId'];
  
$req = hash_hmac("sha256", $hash1, base64_decode($NOTIFY_PWD));
 
 
if (hash_equals($req, $data['hash'])) {

$txnId = $data['payment']['txnId'];
$sum = $data['payment']['sum']['amount'];
$status = 'В процессе';
$account = $data['payment']['account'];
       
$checkOperation = Swap::where('uniqid', $txnId)
               ->where('user_id', $userid)
               ->first();
            if($checkOperation == null){
        
      switch ($curr2) {
    case "1":
        $curr2 = 'Qiwi (RUB)';
        break;
    case "2":
        $curr2 = 'Webmoney (WMR)';
        break;
    case "3":
        $curr2 = 'Яндекс Деньги';            
        $yandex =  new \YM\YandexClass();
        $yandex->setUp();
        $yandex->sendMoney(array(
            "pattern_id" => "p2p",
            "to" => $curr2detail, // кошелек получателя
            "amount" => $sum, // сумма
            "comment" => "Swapzero.net | QIWI -> Yandex", //Комментарий к переводу, отображается в истории отправителя.
            "message" => "Swapzero.net | QIWI -> Yandex", // Комментарий к переводу, отображается получателю.
            "label" => "swapzero", //Метка платежа
        ));
        $status = 'Успешно';
        break;
           case "4":
        $curr2 = 'Rapida Online';
        break;
           case "5":
        $curr2 = 'Сбербанк Online';
        break;
           case "6":
        $curr2 = 'PayPal (RUB)';
        break;
           case "7":
        $curr2 = 'Visa/MasterCard';
        break;
}


    $subject = "Обмен: QIWI -> {$curr2}";
    define('SUBJECT',$subject);
      Mail::send('emails.newswap', array(
  'user' => $userid,
  'curr1' => 'Qiwi (RUB)',
  'curr2' => $curr2,
  'sum' => $sum,
   'curr1detail' => $account,
  'curr2detail' => $curr2detail
  ), function($message) 
    {       
    $message->to('neuralink7232050@gmail.com')->subject(SUBJECT);   
    });
    
Swap::updateOrCreate(
['uniqid' => $txnId ],
[
        'user_id' => $userid,
        'currency1' => 'Qiwi (RUB)',
        'currency2' => $curr2,
        'sum' => $sum,
        'status' => $status,
        'curr1details' => $account ,
        'curr2details' => $curr2detail,
        'uniqid' => $txnId,
        
    ]);
    
 

}

}

}
return response('OK', 200);
}
}

/*
data: {
  messageId:"7814c49d-2d29-4b14-b2dc-36b377c76156",
  hookId:"5e2027d1-f5f3-4ad1-b409-058b8b8a8c22",
  
  payment:{
  txnId:"13353941550",
  date:"2018-06-27T13:39:00+03:00",
  type:"IN",
  status:"SUCCESS",
  errorCode:"0",
  personId:78000008000,
  account:"+79165238345",
  comment:"swap_3_222_786",
  provider:7,
  
  sum:{
  amount:1,currency:643},
  
  commission:{
  amount:0,
  currency:643},
  
  total:{
  amount:1,
  currency:643},
  
  signFields:"sum.currency,sum.amount,type,account,txnId"},
  
  hash:"76687ffe5c516c793faa46fafba0994e7ca7a6d735966e0e0c0b65eaa43bdca0",
  version:"1.0.0",
  test:false,
   
                },
*/
