<?php

namespace App\Http\Controllers\Swap;

use Illuminate\Http\Request;
use App\PayDetail;
use App\Http\Controllers\Controller;
class SwapController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');

    }
     public function step1(Request $data)
    {


 $paydetail2 =  PayDetail::where('name',$data->curr2)
        ->first();
     
       return  '<div class="modal fade show" id="swapModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="padding-right: 17px; display: block;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Обмен эл. валют</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Укажите свой счёт '.$paydetail2->name.': </label>
            <input type="text" class="form-control" placeholder="'.$paydetail2->example.'"  id="recipient-curr1"><br>

            
        
<button id="swapend" class="btn btn-primary">Продолжить</button>

          </div>
              
          
          
          <!-- MORE FIELDS --></div>
  
    </div>
  </div>
</div>
      	  <script>
      	     
      	 $(document).ready(function() {

 $("#swapend").bind( "click", swapend);


  });
  function swapend(){
  var modifcurr = $("#modifcurr").text();
  var origcurr = $("#origcurr").text();
  var sumswap = $("#sumstart").val();
  var paynumber = $("#recipient-curr1").val();
   $("#swapModal1").modal("hide")     
             $.ajax({
       type: "POST",
       url: "./swapend",
       cache: false,

       data: { curr1: origcurr, curr2: modifcurr,paynumb: paynumber, sum: sumswap},
       
                         beforeSend: function(request) {
        return request.setRequestHeader("X-CSRF-Token", $("meta[name=\'csrf-token\']").attr("content"));
    },

   
      success: function successFn(response) {
$(".bbbb").css("display","none");
$("#swapWrap").html(response);
    $("#swapModal2").modal("show")
      },
      error: function errorFn(response, status, error) {
    if(response.status=="422"){
    
$(".bbbb").css("display","block");
$(".bbbb").html("<strong>Ошибка! </strong>"+response.responseText);
$("#swapWrap").html("");
    }

      }
  });
  }
</script>
';


    }
   public function step2(Request $data)
    {
    if($data['curr1'] == $data['curr2']){
    return response('Выберите разные платёжные системы!', 422);
    }
         if($data['sum'] < 1){
    return response('Сумма меньше 10 ₽!', 422);
    }
       $this->validate($data, [
    'sum' => 'required|min:1|numeric',
    'curr1' => 'required',
    'curr2' => 'required',
    'paynumb' => 'required',
    
  ]);
   if ($data->user()) {
            // $request->user() возвращает экземпляр аутентифицированного пользователя
        
    $paydetail1 =  PayDetail::where('name',$data->curr1)
        ->first();
 $paydetail2 =  PayDetail::where('name',$data->curr2)
        ->first();
       $more = '';
        $id = $data->user()->id + 785;
        
      switch ($data->curr1) {
    case "Qiwi (RUB)":
   if($data->curr2 == "Яндекс Деньги") $cmt=  "Обмен будет выполнен в автоматическом режиме и займет пару секунд."; else $cmt=  "Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.";
        $more = '
        <div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""><p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">
    
    
     Для обмена нажмите кнопку "Перевести" и следуйте инструкциям платёжной системы. '.$cmt.'<a href="./faq" target="blank"> Посмотреть видео-инструкцию</a> </p>
    <span><a target="blank" href="https://qiwi.com/payment/form/99?extra%5B%27account%27%5D='.$paydetail1->detail.'&amountInteger='.$data->sum.'&amountFraction=0&extra%5B%27comment%27%5D=swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'&currency=643&blocked[0]=sum&blocked[1]=comment&blocked[3]=account" class="btn btn-primary">Перевести</a>
</span>
</div> </div>
';
        break;
    case "Webmoney (WMR)":
    if($data->curr2 == "Qiwi (RUB)" || $data->curr2 == "Яндекс Деньги") $cmt=  "Обмен будет выполнен в автоматическом режиме и займет пару секунд."; else $cmt=  "Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.";
   
        $more = '<div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""> 
        
        <p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">Для обмена нажмите кнопку "Перевести" и следуйте инструкциям платёжной системы. '.$cmt.'<a href="./faq" target="blank"> Посмотреть видео-инструкцию</a> </p>
        
        <form method="POST" action="https://merchant.webmoney.ru/lmi/payment_utf.asp" accept-charset="utf-8">  
  <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="'.$data->sum.'">
  <input type="hidden" name="LMI_PAYMENT_DESC" value="swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'">
  <input type="hidden" name="LMI_PAYEE_PURSE" value="'.$paydetail1->detail.'">
  <input type="hidden" name="LMI_SIM_MODE" value="0">

   <span><input type="submit" class="btn btn-primary" name="ok" value="Перевести">  </span>
 </div> </div>
</form>
        ';
        break;
    case "Яндекс Деньги":
    if($data->curr2 == "Qiwi (RUB)") $cmt=  "Обмен будет выполнен в автоматическом режиме и займет пару секунд."; else $cmt=  "Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.";
   
        $more = '
        
        
        
        <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">    
       <input type="hidden" name="receiver" value="410014225669194">    
       <input type="hidden" name="label" value="swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'">       
       <input type="hidden" name="targets" value="Swapzero.net | Обмен валют">    
       <input type="hidden" name="sum" value="'.$data->sum.'" data-type="number">       
        <input type="hidden" name="quickpay-form" value="donate">
       <input type="hidden" name="need-fio" value="false">    
       <input type="hidden" name="need-email" value="false">    
       <input type="hidden" name="need-phone" value="false">    
       <input type="hidden" name="need-address" value="false">    
       
        <div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""><p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">
    
    
     Для обмена нажмите кнопку "Перевести" и следуйте инструкциям платёжной системы. '.$cmt.'<a href="./faq" target="blank"> Посмотреть видео-инструкцию</a> </p>
    <span><input type="submit" class="btn btn-primary" value="Перевести">
</span>
</div> </div>
          </form>';
        break;
    case "Rapida Online":
        $more = '<div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""><p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">
        
    Переведите '.$data->sum.'₽ на указанный кошелек в системе "Rapida Online". В процессе перевода обязательно заполните поле "Сообщение" указанным примечанием. После оплаты нажмите кнопку "Я оплатил". Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.  <a href="./faq" target="blank">Посмотреть видео-инструкцию</a> </p>
    <span><a  href="javascript:void();" class="btn btn-primary" style="
    width: 100%;
">Я оплатил</a></span>
</div> </div>';
        break;
    case "Сбербанк Online":
        $more = '<div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""><p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">
        
    Переведите '.$data->sum.'₽ на указанный кошелек в системе "Сбербанк Online". В процессе перевода обязательно заполните поле "Сообщение" указанным примечанием. После оплаты нажмите кнопку "Я оплатил". Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.  <a href="./faq" target="blank">Посмотреть видео-инструкцию</a> </p>
    <span><a  href="javascript:void();" class="btn btn-primary" style="
    width: 100%;
">Я оплатил</a></span>
</div> </div>';
        break;
    case "PayPal (RUB)":
        $more = '<div class="panel-minimal-general" style=" "> <header class="panel-minimal pblue" style=" ">Оплата по реквизитам</header> <div class="panel-minimal-body" style=""><p>Кошелёк: <strong>'.$paydetail1->detail.'</strong></p><p>Сумма: <strong>'.$data->sum.'₽</strong>
    </p><p>Примечание: <strong>swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'</strong>
    </p><hr><p style="
    font-size: 12px;
">
        
    Переведите '.$data->sum.'₽ на указанный кошелек в системе "PayPal". В процессе перевода обязательно заполните поле "Добавить примечание" указанным примечанием. После оплаты нажмите кнопку "Я оплатил". Обмен будет выполнен оператором в ручном режиме и займет от 5 до 30 минут.  <a href="./faq" target="blank">Посмотреть видео-инструкцию</a> </p>
    <span><a  href="javascript:void();" class="btn btn-primary" style="
    width: 100%;
">Я оплатил</a></span>
</div> </div>';
        break;
}

 
  
return  '<!-- Modal -->
<div class="modal fade" id="swapModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Обмен эл. валют</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div style="
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    margin-bottom: 12px;
    flex-wrap: wrap;
">
    <div style="
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 48%;
    max-width: 48%;
    margin-right: 5px;
">
    <label for="recipient-name" class="col-form-label">Отдаете: </label><input type="text" class="form-control" value="'.$data->curr1.'" disabled=""></div><div style="
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 48%;
    max-width: 48%;
    margin-left: 5px;
"><label for="recipient-name" class="col-form-label">Получаете:</label><input type="text" class="form-control" value="'.$data->curr2.'" disabled=""></div></div>

           <label for="recipient-name" class="col-form-label">Ваш счет в '.$data->curr2.' :</label>
            <input type="text" style="margin-bottom:1rem" class="form-control" value ='.$data->paynumb.'  disabled>
        
     
          
          <!-- MORE FIELDS -->
'.$more.'
      </div>
  <p><span class="" title="Tooltip" style="
    font-size: 12px;
    color: #828282;
    margin-left:21px;
">Комиссия: 0%</span></p>
    </div>
  </div>
</div>';

    }
}
}
