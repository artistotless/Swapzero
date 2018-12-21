<?php
include ($_SERVER['DOCUMENT_ROOT']."/settings/config.php");

?>

<body class="fixed-nav sticky-footer" id="page-top" style="">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
  	  <!-- HEAD BLOCK-->
    <?php include($site_url.'blocks/head.php'); ?>
    
      <!-- MENU BLOCK-->
    <?php include($site_url.'blocks/menu.php'); ?>
    
    
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
    
        <!-- PITCH BLOCK-->
      <?php include($site_url.'blocks/pitch.php'); ?>
    
    <!-- CONTENT BLOCK-->
      <?php echo'
<div class="row" style="background: white;">
      	<div class="plansplit col-xl-4 col-sm-6 plansplit">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="icon-heart icons" title="BTC" style="
    color: #f95d80;
"></i><h4>Free</h4></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Обмены</span>
                            
                          </li>
                    	<li>
                            <span>Комиссия</span>
                            <span>0%</span>
                          </li>
                       
                      <li>
                        <span>Qiwi</span>
                        <span><i class="icon-check " title="BTC" style="
"></i></span>
                      </li>   
                    <li>
                        <span>Яндекс Деньги</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Webmoney</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Rapida Online</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Visa/MC</span>
                        <span><i class="icon-close icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>PayPal</span>
                        <span><i class="icon-close errsmall icons" title="BTC" style=""></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Дополнительно</span>
                            
                          </li>
                    	
                       
                         
                    <li>
                        <span>SwapPay</span>
                        <span><i class="icon-close icons" title="BTC" style=""></i></span>
                      </li><li>
                        <span>Telegram Bot</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
                    	<li style="
    background: none;
    padding: 0;
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Лимиты</span>
                            
                          </li><li>
                            <span>В сутки</span>
                            <span>200 RUB</span>
                          </li>
                       
                      <li>
                        <span>В месяц</span>
                        <span>3.000 RUB</span>
                      </li>   
                    </ul>	
                    <span class="btn btn-primary" style="
    background: none;
    cursor: default;
    color: #b3b3b3;
    width: 100%;
">Текущий тариф</span>
                    
                </div>
            </div>
      	</div>
        
        
        
        
        
      <div class="plansplit col-xl-4 col-sm-6 ">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="icon-diamond icons" title="BTC" style="
    color: #8185f5;
"></i><h4>Premium</h4></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Обмены</span>
                            
                          </li>
                    	<li>
                            <span>Комиссия</span>
                            <span>0%</span>
                          </li>
                       
                      <li>
                        <span>Qiwi</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li>   
                    <li>
                        <span>Яндекс Деньги</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Webmoney</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Rapida Online</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Visa/MC</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>PayPal</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Дополнительно</span>
                            
                          </li>
                    	
                       
                         
                    <li>
                        <span>SwapPay</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Telegram Bot</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
                    	<li style="
    background: none;
    padding: 0;
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Лимиты</span>
                            
                          </li><li>
                            <span>В сутки</span>
                            <span>2000 RUB</span>
                          </li>
                       
                      <li>
                        <span>В месяц</span>
                        <span>25.000 RUB</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary" style="
    width: 100%;
">Перейти за 399 RUB/год</a>
                    
                </div>
            </div>
      	</div><div class="plansplit col-xl-4 col-sm-6 plansplit">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="icon-briefcase icons" title="BTC" style="
    color: #de5dd9;
"></i><h4>Business</h4></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Обмены</span>
                            
                          </li>
                    	<li>
                            <span>Комиссия</span>
                            <span>0%</span>
                          </li>
                       
                      <li>
                        <span>Qiwi</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li>   
                    <li>
                        <span>Яндекс Деньги</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Webmoney</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Rapida Online</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Visa/MC</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>PayPal</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
    <li style="
    background: none;
    /* padding: 0; */
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Дополнительно</span>
                            
                          </li>
                    	
                       
                         
                    <li>
                        <span>SwapPay</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li><li>
                        <span>Telegram Bot</span>
                        <span><i class="icon-check icons" title="BTC" style="
"></i></span>
                      </li></ul><ul class="list_none p-0 wallet_info">
                    	<li style="
    background: none;
    padding: 0;
    margin: 0;
    padding: 5px;
">
                            <span style="
    text-align: left;
    font-size: 12px;
">Лимиты</span>
                            
                          </li><li>
                            <span>В сутки</span>
                            <span>Неограниченно</span>
                          </li>
                       
                      <li>
                        <span>В месяц</span>
                        <span>Неограниченно</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary" style="
    width: 100%;
">Подключить</a>
                    
                </div>
            </div>
      	</div></div>';
      	?>

  <!-- LOGIN BLOCK-->
<?php include($site_url.'pages/login.php');?> 


    
    
    <!-- FOOTER BLOCK-->
    <?php include($site_url.'blocks/footer.php');?> </div>

  
    <!-- SCRIPTS BLOCK-->
   <?php include($site_url.'blocks/scripts.php'); ?>
  </div>

    <script>  
    
$("#sumstart" ).change(function () {

var sum = $( "#sumstart" ).val();

$("#sumfull" ).val(sum);


  })
</script>

</body></html>