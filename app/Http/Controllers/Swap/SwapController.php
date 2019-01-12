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
   
        $more = '
<a target="blank" href="https://qiwi.com/payment/form/99?extra%5B%27account%27%5D='.$paydetail1->detail.'&amountInteger='.$data->sum.'&amountFraction=0&extra%5B%27comment%27%5D=swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'&currency=643&blocked[0]=sum&blocked[1]=comment&blocked[3]=account" class="btn btn-primary">Перевести</a>
';
        break;
    case "Webmoney (WMR)":
        $more = '';
        break;
    case "Яндекс Деньги":
        $more = '<form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">    
       <input type="hidden" name="receiver" value="410014225669194">    
       <input type="hidden" name="label" value="swap_'.$paydetail2->id.'_'.$data->paynumb.'_'.$id.'">       
       <input type="hidden" name="targets" value="Swapzero.net | Обмен валют">    
       <input type="hidden" name="sum" value="'.$data->sum.'" data-type="number">       
        <input type="hidden" name="quickpay-form" value="donate">
       <input type="hidden" name="need-fio" value="false">    
       <input type="hidden" name="need-email" value="false">    
       <input type="hidden" name="need-phone" value="false">    
       <input type="hidden" name="need-address" value="false">    
          <input type="submit" class="btn btn-primary" value="Перевести"></form>';
        break;
    case "Rapida Online":
        $more = '';
        break;
    case "Сбербанк Online":
        $more = '';
        break;
    case "PayPal (RUB)":
        $more = '';
        break;
}

 
  
return  '<!-- Modal -->
<div class="modal fade" id="swapModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Обмен эл. валют</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Отдаете: </label>
            <input type="text" class="form-control" value = "'.$data->curr1.'"  disabled>
            <label for="recipient-name" class="col-form-label">Получаете:</label>
            <input type="text" class="form-control" value ="'.$data->curr2.'"  disabled>
           <label for="recipient-name" class="col-form-label">Ваш '.$data->curr2.' счет:</label>
            <input type="text" class="form-control" value ='.$data->paynumb.'  disabled>
        
          </div>
              <h5 for="recipient-name" >Сумма: '.$data->sum.'₽</h5>
          <hr>
          
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
