<?php
namespace QW;

	require_once __DIR__ . "/lib/api.php";
	require_once __DIR__ . "/constants.php";
	
	class QiwiClass {
	
	   public $api;

        
    function setUp() {
        $this->api = new \QiwiLib\Qiwi(PHONE_NUMBER, ACCESS_TOKEN);
    }

	  function getBalance() {
	///// баланс
	$getBalance = $this->api->getBalance();
	return $getBalance['accounts']['0']['balance']['amount'];
	}
	

	
	function sendMoney($options) {
	///// отправка денег на счёт
		$sendMoney = $this->api->sendMoneyToQiwi($options);
			/* Формат массива
  [
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => '+7'.$number]
	]
	
	*/
	
		return $sendMoney;
	}
	
}
/////


	
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
?>

		


	
