<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Swap;
use App\Http\Controllers\Controller;

require_once __DIR__ . "/qiwiWallet/qiwi.php";

class YandexController extends Controller
{
public function index(Request $data)
{


$datacomm = explode("_", $data['label']);

if(count($datacomm) == 4 && $datacomm[0] == 'swap'){




$curr2 = $datacomm[1]; // id Финальной валюты
$curr2detail = $datacomm[2]; // Адрес счета пользователя
$userid = $datacomm[3] - 785; // id пользователя



// middleware место 
//1) проверить, не исчерпан ли лимит обменов
//2) проверить, нет ли мультиаккаунтства

$NOTIFY_PWD ='sJIx9ZWtUV3iaBmlHR0TzHTC';


$hash1 = $data['notification_type'].'&'.$data['operation_id'].'&'.$data['amount'].'&'.$data['currency'].'&'.$data['datetime'].'&'.$data['sender'].'&'.$data['codepro'].'&'.$NOTIFY_PWD.'&'.$data['label'];

$req = sha1($hash1);
 


if (hash_equals($req, $data['sha1_hash'])) {

$txnId = $data['operation_id'];
$sum = $data['amount'];
$account = $data['sender'];
$status = "В процессе";



$checkOperation = Swap::where('uniqid', $txnId)
               ->where('user_id', $userid)
               ->first();
            if($checkOperation == null){
        
      switch ($curr2) {
    case "1":
        $curr2 = 'Qiwi (RUB)';
        
        $ids = time().'000';
        $qiwi =  new \QW\QiwiClass();
        $qiwi->setUp();
        $qiwi->sendMoney(array(
            'id' => $ids, // ID платежа,должен быть уникальным
            'sum' => ['amount' => $sum,'currency' => '643'], // код валюты (643 - RUB)
            'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
            'comment' => 'Swapzero.net | Yandex -> QIWI', // комментарий к платежу
            'fields' => ['account' => '+'.$curr2detail] // куда отправлять деньги
        ));
        $status = "Успешно";
        break;
    case "2":
        $curr2 = 'Webmoney (WMR)';
        break;
    case "3":
        $curr2 = 'Яндекс Деньги';
  
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

    $subject = "Обмен: Яндекс Деньги -> {$curr2}";
    define('SUBJECT',$subject);
      Mail::send('emails.newswap', array(
  'user' => $userid,
  'curr1' => 'Яндекс Деньги',
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
        'currency1' => 'Яндекс Деньги',
        'currency2' => $curr2,
        'sum' => $sum,
        'status' => $status,
        'curr1details' => $account ,
        'curr2details' => $curr2detail,
        'uniqid' => $txnId,
        
    ]);
    
 
return response('OK', 200);
}

}

}
return response('OK', 200);
}
}


/*
 $content = '';
$content .= $curr2.' ';
$content .= $curr2detail.' ';
$content .= $userid.' ';
$content .= $data['sha1_hash'];
*/
//$content .= $hash1.' ';
//$content .= $req.' ';
