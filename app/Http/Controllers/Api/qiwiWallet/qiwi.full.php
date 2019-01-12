<?php 

namespace QWW;
/*
	define( "_CONTENT_CHARSET", "utf-8" );
	mb_internal_encoding( _CONTENT_CHARSET );
	require_once __DIR__ . "/lib/api.php";
	require_once __DIR__ . "/constants.php";
	
	*/
	
	
	class QiwiClassW {
	/*
	   public $api;

        
    function setUp() {
        $this->api = new Qiwi(PHONE_NUMBER, ACCESS_TOKEN);
    }

	  function getBalance() {
	///// баланс
	$getBalance = $api->getBalance();
	//echo "Баланс: ". $getBalance['accounts']['0']['balance']['amount']." р.<br>";
	return $getBalance['accounts']['0']['balance']['amount'];
	}
	
 function getPhoneToId($nmb) {
	///// определение id мобильного оператора
	$getPhoneToId = $api->getPhoneToId(['0' => "phone=7".$nmb]);
	//echo "ID моб. оператора (".$nmb."): " .$getPhoneToId["message"]."<br>";
return $getPhoneToId["message"];
	}
	
	function sendMoney($options) {
		$sendMoney = $api->sendMoneyToQiwi($options);
	}
	
	 function getTxnStatus($txn) {
	///// статус выплаты
	$getTxn = $api->getTxn($txn);
	if($getTxn[status]=='SUCCESS'){$getTxn[status]='Выполнен';}
	if($getTxn[status]=='WAITING'){$getTxn[status]='Обработка';}
	if($getTxn[status]=='ERROR'){$getTxn[status]='Ошибка (код ошибки '.$getTxn[errorCode].')';}
	//echo "Статус транзакции: ".$getTxn[txnId] . " = " .$getTxn['status']. "<br>";
return $getTxn['status'];
	}
		 function getHistory() {
	///// история транзакций
	$getHistory = $api->getPaymentsHistory([
		//'startDate' => '2018-03-01T00:00:00+03:00',
		//'endDate' => '2018-10-01T00:00:00+03:00',
		'rows' => '10'
	]);
	//if($getHistory){arrayHistory( $getHistory[data] );}
	return $getHistory[data];
		}
		
	function arrayHistory( array $array ) {
		echo '<br><br>История транзакций<br><table width=100%>';
		echo '<tr><td>ID</td><td>Время</td><td>Статус</td><td>Тип</td><td>Сумма</td></tr>';
		foreach( $array as $key => $val ) {
			if($val[status]=='SUCCESS'){$val[status]='Выполнен';}
			if($val[status]=='WAITING'){$val[status]='Обработка';}
			if($val[status]=='ERROR'){$val[status]='Ошибка (код ошибки '.$val[errorCode].')';}
			
			if($val[type]=='OUT'){$val[type]='Оплата '.$val[account];}
			if($val[type]=='IN'){$val[type]='Пополнение '. $val[personId];}
			if($val[type]=='QIWI_CARD'){$val[type]='Пополнение '. $val[personId];}
			
			echo '<tr><td>'.$val[txnId] .'</td>';
			echo '<td>'.strtotime($val[date]) .'</td>';
			echo '<td>'.$val[status] .'</td>';
			echo '<td>'.$val[type] .'</td>';
			echo '<td>'.$val[sum][amount] .' +  '. $val[commission][amount] .'(комиссия) = '. $val[total][amount] .'</td></tr>';
		}
		echo '</table>';
	}
*/
	/////

	/*
[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => '+7'.$number]
	]
	
	*/
	
		///// оплата /////
	/*$ids = time() . '000';
	$number = '9532871881';
	$summ = 1;
	$txt = 'Тестовый платеж';
	*/

	/// оплата на qiwi

	///

	
/*
	/// оплата мобильного
	$sendMoney = $api->sendMoneyToProvider($getPhoneToId["message"],[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => $number]
	]);
	///
*/	

/*
	/// оплата webmoney
	$number = '319520673640';
	$sendMoney = $api->sendMoneyToProvider('31271',[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => 'R'.$number]
	]);
	///
*/	
	/*
	if($sendMoney){
		if($sendMoney['transaction']['id']=='' and $sendMoney['transaction']['state']['code']==''){
			echo "Ошибка: ". $sendMoney['message']. "(код ". $sendMoney['code']. ")<br>";
		}else{
			echo "ID: ". $sendMoney['transaction']['id']. "<br>";
			echo "Статус: ". $sendMoney['transaction']['state']['code'];
		}
	}
	*/
	/////  /////

/*
	/// разбор массива ответа
	arrayCopy( $sendMoney );
	function arrayCopy( array $array ) {
		echo '<ul>';
		foreach( $array as $key => $val ) {
			echo '<li>'.$key .' = '. $val .'</li>';
			if(is_array($val)) {echo arrayCopy($val);} elseif (is_object($val)) {echo clone $val;}
		}
		echo '</ul>';
	}
	echo "<br>";
	///*/
}
?>