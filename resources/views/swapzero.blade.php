@extends('layouts.light')
@section('title', 'Обмен валют')
@section('content')
<div class="row" style="
    /* height: 100%; */
    background: white;
    border-radius: 5px;
    box-shadow: 0px 0px 18px #00000017;
">
      	<div class="col-md-8" style="
    border-right: 2px solid #e0e0e04d;
">
      		<div class="card mb-4" style="
">
            	<div class="card-header" style="">Отдаёте<span id="origcurr" style="display: none;" class="currtext
                            ">Яндекс Деньги</span>
</div>
                <div class="card-wrap">
                	
                    <div class="tab-content card-body">
                        <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                        	<div class="row">
                                
                                <div class="form-group col-md-6">
                                    
                                    <div class="input-group">
                                        <input type="number" id="sumstart" class="form-control" placeholder="Минимум 10 RUB">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 pt-2">
                                	<h6>Выберите систему</h6>
                                </div>
                                <div class="form-group col-md-12 text-center mb-0">
                                	<ul id="origpanelcurr" class="list_none p-0 payment_methods_list m-0">
                                		<li class="">
                                        	<a href="javascript:void(0);" data-tag="Qiwi (RUB)" style="
"><img src="./index_files/qiwi.png" alt="Twitter" style="height: 43px !important;height: auto;"><span style="
    margin-top: 3px;
">QIWI RUB</span></a>
                                        </li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Яндекс Деньги" style="
"><img src="./index_files/yandex_dengi_product_icon_rgb.png" alt="Twitter" style="height: 36px !important;height: auto;/* margin-top: 10px; */"><span style="
">Яндекс.Деньги</span></a> 
                                    	</li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Webmoney (WMR)" style="
"><img src="https://www.webmoney.ru/img/icons/wmlogo_flat_48.png?1542983030" alt="Twitter" style="height: 33px !important;height: auto;"><span>WMR</span></a> 
                                    	</li><li class="">
                                           <a href="javascript:void(0);" data-tag="Rapida Online" style="/* background-color: rgba(94, 129, 177, 0.2); */"><img src="https://steam365.ru/index_files/rapida_logo.png" alt="Twitter" style="height: 33px !important;height: auto;"><span>Рапида Online</span></a> 
                                    	</li>
                                        
                                        
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Visa/MasterCard" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="./index_files/mc_symbol.svg" alt="Twitter" style="height: 31px !important;height: auto;/* margin-top: 10px; */"><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Visa_2014_logo_detail.svg" alt="Twitter" style="height: 20px !important;height: auto;/* margin-top: 10px; */"><span>MC/Visa RUB</span></a> 
                                    	</li>
                                    <li class="">
                                           <a href="javascript:void(0);" data-tag="PayPal (RUB)" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="Twitter" style="height: 26px !important;height: auto;/* margin-top: 10px; */"><span>PayPal RUB</span></a> 
                                    	</li></ul>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
      	</div>
        
      <div class="col-md-8">
      		<div class="card mb-4">
            	<div class="card-header">Получаете<span id="modifcurr" class="currtext
                            " style="display: none;">Qiwi (RUB)</span></div>

                <div class="card-wrap">
                	
                    <div class="tab-content card-body">
                        <div role="tabpanel2" id="tab2" class="tab-pane fade show active">
                        	<div class="row">
                                
                                <div class="form-group col-md-6">
                                    
                                    <div class="input-group">
                                        <input id="sumfull" type="text" class="form-control" placeholder="">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 pt-2">
                                	<h6>Выберите систему</h6>
                                </div>
                                <div class="form-group col-md-12 text-center mb-0">
                                	<ul id="modifpanelcurr" class="list_none p-0 payment_methods_list m-0">
                                		<li class="">
                                        	<a href="javascript:void(0);" data-tag="Qiwi (RUB)" style="
"><img src="./index_files/qiwi.png" alt="Twitter" style="height: 43px !important;height: auto;"><span style="
    margin-top: 3px;
">QIWI RUB</span></a>
                                        </li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Яндекс Деньги" style="
"><img src="./index_files/yandex_dengi_product_icon_rgb.png" alt="Twitter" style="height: 36px !important;height: auto;/* margin-top: 10px; */"><span style="
">Яндекс.Деньги</span></a> 
                                    	</li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Webmoney (WMR)" style="
"><img src="https://www.webmoney.ru/img/icons/wmlogo_flat_48.png?1542983030" alt="Twitter" style="height: 33px !important;height: auto;"><span>WMR</span></a> 
                                    	</li><li class="">
                                           <a href="javascript:void(0);" data-tag="Rapida Online" style="/* background-color: rgba(94, 129, 177, 0.2); */"><img src="https://steam365.ru/index_files/rapida_logo.png" alt="Twitter" style="height: 33px !important;height: auto;"><span>Рапида Online</span></a> 
                                    	</li>
                                        
                                        
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Visa/MasterCard" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="./index_files/mc_symbol.svg" alt="Twitter" style="height: 31px !important;height: auto;/* margin-top: 10px; */"><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Visa_2014_logo_detail.svg" alt="Twitter" style="height: 20px !important;height: auto;/* margin-top: 10px; */"><span>MC/Visa RUB</span></a> 
                                    	</li>
                                    <li class="">
                                           <a href="javascript:void(0);" data-tag="PayPal (RUB)" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="Twitter" style="height: 26px !important;height: auto;/* margin-top: 10px; */"><span>PayPal RUB</span></a> 
                                    	</li></ul>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
      	</div>
      	
<button class="btn btn-default" style="
    width: 100%;
    float: right;
        margin-top:15px;
    /* border-radius: 0px; */
">Начать обмен<div class="ready" style="
    /* margin: 10px auto 15px auto; */
    float: right;
"><i class="icon-refresh icons" style="
    font-size: 25px;
    position: relative;
    border-radius: 360px;

    padding: 6px;

    margin-top: 10px !important;
    "></i></div></button>
    
      	</div>
      	@endsection