<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response ;
use App\Http\Requests;
use App\Swap;
use App\Http\Controllers\Controller;

class YandexController extends Controller
{
public function index(Request $data)
{
$datacomm = explode("_", $data['payment']['comment']);
$bitch = 0;
if(count($datacomm) == 4 && $datacomm[0] == 'swap'){
$bitch = 10;
}
//File::put('path/to/file');

$curr2 = $datacomm[1]; // id ‘инальной валюты
$curr2detail = $datacomm[2]; // јдрес счета пользовател€
$userid = $datacomm[3] - 785; // id пользовател€
      switch ($curr2) {
    case "1":
        $curr2 = 'Qiwi (RUB)';
        break;
    case "2":
        $curr2 = 'Webmoney (WMR)';
        break;
    case "3":
        $curr2 = 'яндекс ƒеньги';
        break;
           case "4":
        $curr2 = 'Rapida Online';
        break;
           case "5":
        $curr2 = '—бербанк Online';
        break;
           case "6":
        $curr2 = 'PayPal (RUB)';
        break;
           case "7":
        $curr2 = 'Visa/MasterCard';
        break;
}
// middleware место 
/*
1) проверить, не исчерпан ли лимит обменов
2) проверить, нет ли мультиаккаунтства
*/

$NOTIFY_PWD ='CHgVjWOyg/lX5uATykRqM0quswLXv1y4vxUplfce3ZU=';

$hash1 = $data['payment']['sum']['currency'] .'|'. $data['payment']['sum']['amount'] . '|'. $data['payment']['type'] . '|' . $data['payment']['account'] . '|' . $data['payment']['txnId'];
  
$req = hash_hmac("sha256", $hash1, base64_decode($NOTIFY_PWD));
 
if (hash_equals($req, $data['hash'])) {


$txnId = $data['payment']['txnId'];
$sum = $data['payment']['sum']['amount'];
$status = $data['payment']['status'];
$account = $data['payment']['account'];
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
return response('OK', 200);
}
else {
return $req; //response('error', 422);
};



}
}
