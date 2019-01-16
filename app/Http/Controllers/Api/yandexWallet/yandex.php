<?php
namespace YM;

require_once __DIR__ . "/constants.php";
require_once __DIR__ . "/lib/api.php";

class YandexClass {

   public $api;

        
    function setUp() {
        $this->api = new \YandexMoney\API(YANDEX_TOKEN);
    }


  function sendRequest($options) {
        $response = $this->api->requestPayment($options);
        if($response->status == "success") {
            return $response;
        }
        else {
            //$this->assertEquals($response->error, "not_enough_funds");
            return NULL;
        }
    }
    
    

    
           function sendMoney($options) {
        $requestResult = $this->sendRequest($options);
        if($requestResult === NULL) { // no money in wallet
            return;
        }
        else {
            $processResult = $this->api->processPayment(array(
                "request_id" => $requestResult->request_id,

            ));
            return $processResult;
            //$this->assertEquals($processResult->status, "success");
        }
    }
 
}

?>