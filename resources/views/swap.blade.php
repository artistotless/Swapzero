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
            	<div class="card-header" style="">Отдаёте<span id="origcurr" style="display: inline;" class="currtext
                            ">Qiwi (RUB)</span>
</div>
                <div class="card-wrap">
                	
                    <div class="tab-content card-body">
                        <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                        	<div class="row">
                                
                                <div class="form-group col-md-6">
                                    
                                    <div class="input-group">
                                        <input type="number" id="sumstart" value="" class="form-control" placeholder="Минимум 10 RUB">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 pt-2">
                                	<h6>Выберите систему</h6>
                                </div>
                                <div class="form-group col-md-12 text-center mb-0">
                                	<ul id="origpanelcurr" class="list_none p-0 payment_methods_list m-0">
                                		<li class="active">
                                        	<a href="javascript:void(0);" data-tag="Qiwi (RUB)" style="
"><img src="{{ asset('public/index_files/qiwi.png') }}"  style="height: 43px !important;height: auto;"><span style="
    margin-top: 3px;
">QIWI RUB</span></a>
                                        </li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Яндекс Деньги" style="
"><img src="{{ asset('public/index_files/yandex_dengi_product_icon_rgb.png') }}"  style="height: 36px !important;height: auto;/* margin-top: 10px; */"><span style="
">Яндекс.Деньги</span></a> 
                                    	</li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Webmoney (WMR)" style="
"><img src="https://www.webmoney.ru/img/icons/wmlogo_flat_48.png?1542983030"  style="height: 33px !important;height: auto;"><span>WMR</span></a> 
                                    	</li><li class="">
                                           <a href="javascript:void(0);" data-tag="Rapida Online" style="/* background-color: rgba(94, 129, 177, 0.2); */"><img src="{{ asset('public/index_files/rapida_logo.png') }}"  style="height: 33px !important;height: auto;"><span>Rapida Online</span></a> 
                                    	</li>
                                        
                                        
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Сбербанк Online" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="https://finkultura.com/wp-content/uploads/2018/08/sberbank-icon.png"  style="height: 32px !important;height: auto;/* margin-top: 10px; */"><span>Сбербанк Online</span></a> 
                                    	</li>
                                    <li class="">
                                           <a href="javascript:void(0);" data-tag="PayPal (RUB)" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"  style="height: 26px !important;height: auto;/* margin-top: 10px; */"><span>PayPal RUB</span></a> 
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
                            " style="display: inline;">Яндекс Деньги</span></div>

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
"><img src="{{ asset('public/index_files/qiwi.png') }}"  style="height: 43px !important;height: auto;"><span style="
    margin-top: 3px;
">QIWI RUB</span></a>
                                        </li>
                                        <li class="active">
                                           <a href="javascript:void(0);" data-tag="Яндекс Деньги" style="
"><img src="{{ asset('public/index_files/yandex_dengi_product_icon_rgb.png') }}"  style="height: 36px !important;height: auto;/* margin-top: 10px; */"><span style="
">Яндекс.Деньги</span></a> 
                                    	</li>
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Webmoney (WMR)" style="
"><img src="https://www.webmoney.ru/img/icons/wmlogo_flat_48.png?1542983030"  style="height: 33px !important;height: auto;"><span>WMR</span></a> 
                                    	</li><li class="">
                                           <a href="javascript:void(0);" data-tag="Rapida Online" style="/* background-color: rgba(94, 129, 177, 0.2); */"><img src="{{ asset('public/index_files/rapida_logo.png') }}"  style="height: 33px !important;height: auto;"><span>Rapida Online</span></a> 
                                    	</li>
                                        
                                        
                                        <li class="">
                                           <a href="javascript:void(0);" data-tag="Visa/MasterCard" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="{{ asset('public/index_files/mc_symbol.svg') }}"  style="height: 31px !important;height: auto;/* margin-top: 10px; */"><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Visa_2014_logo_detail.svg"  style="height: 20px !important;height: auto;/* margin-top: 10px; */"><span>MC/Visa RUB</span></a> 
                                    	</li>
                                    <li class="">
                                           <a href="javascript:void(0);" data-tag="PayPal (RUB)" style="/* background-color: rgba(185, 17, 17, 0.2); */"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"  style="height: 26px !important;height: auto;/* margin-top: 10px; */"><span>PayPal RUB</span></a> 
                                    	</li></ul>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
      	</div>
   @if (Auth::check())


  TEST QIWI HOOK

  <button type="submit" id="testqiwihook" name="okbutton" > OK</button>





<button id="submitswap" class="btn btn-default" style="
    width: 100%;
    float: right;
        margin-top:15px;
    /* border-radius: 0px; */
">Начать обмен<div  class="ready" style="
    /* margin: 10px auto 15px auto; */
    float: right;
"><i class="icon-refresh icons" style="
    font-size: 25px;
    position: relative;
    border-radius: 360px;

    padding: 6px;

    margin-top: 10px !important;
    "></i></div></button>
   
   @else
    <a href="{{route('login')}}"  class="btn btn-default" style="
    width: 100%;
    float: right;
    margin-top:15px;
    text-transform: none;
">Авторизуйтесь, чтобы совершить обмен<div class="ready" style="
    /* margin: 10px auto 15px auto; */
    float: right;
"><i class="icon-info" style="
    font-size: 25px;
    position: relative;
    border-radius: 360px;

    padding: 6px;

    margin-top: 10px !important;
    "></i></div></a>
    @endif
    
      	</div>
      	<div id="swapWrap"></div>
      	<div class="alert alert-danger bbbb alert-dismissible fade show" style="z-index: 1050;display:none; border-radius:0px;" role="alert">
  <strong>Ошибка! </strong>Проверьте все поля, возможно сумма перевода меньше 10 RUB !
</div>
      	  <script>
      	     
      	 $(document).ready(function() {
 
 $('#submitswap').bind( 'click', swapstart);
  $('#testqiwihook').bind( 'click', test);


  });
  function test(){

     $.ajax({
        type: "POST",
                url: "api/qiwihook",
                    
                data: {
                    messageId:"7814c49d-2d29-4b14-b2dc-36b377c76156",
                    hookId:"88d65aec-18b4-4fd0-a28e-4fa6ca753559",
                    
                    payment:{
                    txnId:"13353941550",
                    date:"2018-06-27T13:39:00+03:00",
                    type:"IN",
                    status:"ERROR",
                    errorCode:"0",
                    personId:78000008000,
                    account:"+79165238345",
                    comment:"swap_3_410014225669194_786",
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
                    
                    hash:"57f35d203f41ccb99b0be1b44dbcdccdda9a4f25b67b473f948d43baef55bde0",
                    version:"1.0.0",
                    test:false,
   
                },

   
      success: function successFn(response) {
alert(response);
      },
      error: function errorFn(response, status, error) {
alert("ОШИБКА: "+response);
      }
  });
    
   }
   
   
   
   
   function swapstart(){
    var modifcurr = $('#modifcurr').text();
     $.ajax({
       type: "POST",
       url: './swapstart',
       cache: false,
       data: { curr2: modifcurr
},
       
                         beforeSend: function(request) {
        return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
    },

   
      success: function successFn(response) {
$('.bbbb').css('display','none');
$('#swapWrap').html(response);
    $('#swapModal1').modal('show')
      },
      error: function errorFn(response, status, error) {
   $('#swapWrap').html("");
$('.bbbb').css('display','block');

      }
  });
    
   }
   
</script>
      	@endsection
      	
      	
      	   