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
      <div class="row">
      	<div class="col-md-12">
        	<div class="card mb-3">
        <div class="card-header">Песледние заявки</div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"></div><div class="row"><div class="col-sm-12"><table class="table table-hover mb-0 table_s1 dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 40px;"><i class="fa fa-user icons"></i></th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Currency: activate to sort column ascending" style="width: 124px;">Валюта</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 95px;">Статус</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 111px;">Кол-во</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 196px;">Дата</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 75px;">Тип</th></tr>
              </thead>
              
              <tbody>
   
                
              <tr role="row" class="even">
                  <td class="sorting_1">neuralink7232050</td>
                  <td><i class="cc ETH-alt" title="ETH"></i>ETH</td>
                  <td style="
    background: #ddffe7;
    color: #51c774;
"><span class="bg-sell badge-pill">Открытый</span></td>
                  <td>0.31552</td>
                  <td>2018-02-05 05:45:15</td>
                  <td class="text-danger">Продажа</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">husanBitch</td>
                  <td><i class="cc ETH-alt" title="ETH"></i>ETH</td>
                  <td style="
    background: #ddffe7;
    color: #51c774;
"><span class="badge-alert badge-pill">Открытый</span></td>
                  <td>0.25421</td>
                  <td>2018-10-08 02:30:26</td>
                  <td class="text-success">Покупка</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">babyboom23</td>
                  <td><i class="cc NEO" title="NEO"></i>NEO</td>
                  <td style="
    background: #ffdddd;
    color: #c75151;
"><span class=" badge-pill" style="
">Закрытый</span></td>
                  <td>0.87261</td>
                  <td>2018-05-15 06:12:14</td>
                  <td class="text-success">Покупка</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">btccombiner98</td>
                  <td><i class="cc LTC-alt" title="LTC"></i>LTC</td>
                  <td style="
    background: #ddffe7;
    color: #51c774;
"><span class="badge-pill">Открытый</span></td>
                  <td>0.15612</td>
                  <td>2018-04-24 07:10:31</td>
                  <td class="text-danger">Продажа</td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Загрузить ещё</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
      	</div>
      </div>
      
      
      
      
      
      
      
  <div class="row" style="
    margin-bottom: 15px;
">

        <div class="col-xl-3 col-md-4 col-sm-6 mb-4" style="
    flex: 0 0 50%;
    max-width: 50%;
    padding-right: 5px;
">
        	<a href="#" data-target="#add-wallet" data-toggle="modal" class="new-wallet">
              <div class="buycrypt box bg-white">
                <div class="text-center">
                    <span class="wallet_icon" style="
    background: #39d868;
    color: white;
    border-color: white;
">
                    	<i class="cc BTC text_white"></i>
                    </span>
                    <span class="wallet_text">
                        <i class="fa fa-plus"></i>Купить криптовалюту</span>
                </div>
              </div>
          </a>
        </div>
      <div class="col-xl-3 col-md-4 col-sm-6 mb-4" style="
    flex: 0 0 50%;
    max-width: 50%;
    padding-left: 5px;
">
        	<a href="#" data-target="#add-wallet" data-toggle="modal" class="new-wallet">
              <div class="sellcrypt box bg-white">
                <div class="text-center">
                    <span class="wallet_icon" style="
    background: #f95d80;
    color: white;
    border-color: white;
">
                    	<i class="cc BTC text_white"></i>
                    </span>
                    <span class="wallet_text">
                        <i class="fa fa-minus"></i>Продать криптовалюту</span>
                </div>
              </div>
          </a>
        </div></div>
         <!-- <div class="row" style="
">
      	<div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc BTC text_primary" title="BTC"></i><h3>Bitcoin</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div>
        <div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc BCH text_primary" title="BCH"></i><h3>Bitcoin Cash</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc ETH text_info" title="ETH"></i><h3>Etherium</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc ETC text_info" title="ETC"></i><h3>Etherium Classic</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc ZEC text_black" title="ZEC"></i><h3>Zcash</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc LTC-alt text_secondary" title="LTC"></i><h3>Litecoin</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc DASH-alt text_blue" title="DASH"></i><h3>Dash</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div><div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc XMR text_orange" title="XMR"></i><h3>XMR</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div>
        
       
      <div class="col-xl-4 col-sm-6">
      		<div class="card mb-4">
            	<div class="card-sm-header">
                	<span class="wallet-heading"><i class="cc NEO text_success" title="NEO"></i><h3>NEO</h3></span> 
                </div>
                <div class="card-body">
                    
                    
                    <ul class="list_none p-0 wallet_info">
                    	<li>
                            <span>Заявок</span>
                            <span>24</span>
                          </li>
                       <li>
                       	<span>На продажу</span>
                        <span>20</span>
                      </li>
                      <li>
                        <span>На покупку</span>
                        <span>4</span>
                      </li>   
                    </ul>	
                    <a href="#" class="btn btn-primary">Купить</a>
                    <a href="#" class="btn btn-dark">Продать</a>
                </div>
            </div>
      	</div></div>-->

';
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