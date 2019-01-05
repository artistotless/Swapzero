 @extends('layouts.light')
@section('title', 'Профиль пользователя')
@section('content')
@section('pitch')

      
      
      
      
      <div class="row" style="
      margin: 15px 0px 15px 0px;
    box-shadow: 0px 0px 18px #00000017;
">

      	<div style="

    padding-right: 5px;
" class="col-md-8">
       <div class="box bg_info" style="
    padding: 6px 26%;
">
              
<div class="user_pic_wrap">
                	<div class="user-info-avatar" id="ava1" style="display: block; "></div>
                    	<img src="" class="gravatar" style="display:none" > 
                        
                    </div>
                    
                    
                   <nav class="social-nav" style="margin: 0 auto;text-align: center;"><ul class="list_none social_icon" style="
">
                        <li><a target="blank" href="{{ Auth::user()->vk }}"><i class=" fab fa-vk"></i></a></li>
                        <li><a target="blank" href="{{ Auth::user()->tg }}"><i class=" fab fa-telegram"></i></a></li>
                        <li><a target="blank" href="mailto://{{ Auth::user()->email }}"><i class=" fas fa-at"></i></a></li>
                        
                     </ul></nav>
              <div class="box-body d-flex align-items-center justify-content-between">
                <a href="{{ route('settings') }}" class="btn btn-default" style="
    width: 100%;
    padding: 9px;
    color: #ffffff;
    height: 31px;
    float: right;
    font-size: 11px;
    border-radius: 12px;
">Редактировать профиль</a>
                
              </div>
         </div></div>
        
      <div class="col-md-8" style="padding-left: 5px;background: #667eea;">
       <div class="box bg_success" style="padding: 6px 45px;">
              
              <div class="box-body info-prof d-flex align-items-center justify-content-between">
                <span>Денежный оборот</span>
                <span class="info-prof-span">{{ Auth::user()->cashalltime }}₽</span>
              </div>
         <div class="box-body info-prof  d-flex align-items-center justify-content-between">
                <span>Репутация</span>
                <span class="info-prof-span">{{ Auth::user()->rep }}</span>
              </div><div class="box-body info-prof  d-flex align-items-center justify-content-between">
                <span>Тарифный план</span>
                <span class="info-prof-span">{{ Auth::user()->plan }}</span>
              </div><div class="box-body info-prof  d-flex align-items-center justify-content-between">
                <span>Идентификация:</span>
                <span class="info-prof-span">
                  @if (Auth::user()->identified == "0") Не пройдена @else Пройдена @endif</span>
              </div></div></div>
    
      	

      	
      	</div>
      @endsection
      
<div id="profilepage">

        
      <div class="row" style="
    /* height: 100%; */
    background: white;
    border-radius: 5px;
    box-shadow: 0px 0px 18px #00000017;
">

      	<div class="col-md-8" style="

    padding-right: 5px;
">
       <div id="chart_Swap"></div></div>
        
      <div class="col-md-8" style="

    padding-left: 5px;
">
       <div id="chart_Crypto"></div></div>
    
      	

      	
      	</div>
      
      
   
        
        
        
        

      <div class="row">
      	<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Обмен эл. валют (история)</div>
                <div class="card-body">
                	<div class="col-12">
                    	<div class="login_list_head d-none d-md-block">
                        	<div class="row">
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Дата</p>
                                </div>
                                <div class="col-md-3 col-12">
                                    <p class="mb-0">Сумма</p>
                                </div><div class="col-md-2 col-12">
                                    <p class="mb-0">Отдали</p>
                                </div><div class="col-md-4 col-12">
                                    <p class="mb-0">Получили</p>
                                </div>
                                
                                
                        	<div class="col-md-2 col-12">
                                    <p class="mb-0">Статус</p>
                                </div></div>
                        </div>
                        <div class="login_list_body">
                        
                       @forelse($swaps as $swap)
                              <div class="row">
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Дата: </span> {{ $swap->created_at }}</p>
                                </div>
                                
                                <div class="col-md-3 col-12 py-2">
                                    <p class="mb-0 text-warning"><span class="d-inline-block d-md-none">Сумма: </span>{{ $swap->sum }} ₽</p>
                                </div><div class="col-md-2 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Отдали: </span> {{ $swap->currency1 }}</p>
                                </div>
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Получили: </span> {{ $swap->currency2 }}</p>
                                </div><div class="col-md-2 col-12 py-2">
                                    <p class="mb-0 text-success"><span class="d-inline-block d-md-none">Статус:  </span>{{ $swap->status }}</p>
                                </div>
                            </div>

@empty
 <div class="row">
<p class="mb-0">Вы ещё ничего не обменивали.</p>
</div>
@endforelse

                     
                            
                            
                            
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      	      	<br><div class="row">
      	<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Покупка/Продажа криптовалют (история) </div>
                <div class="card-body">
                	<div class="col-12">
                    	<div class="login_list_head d-none d-md-block">
                        	<div class="row">
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Дата</p>
                                </div>
                                <div class="col-md-3 col-12">
                                    <p class="mb-0">Тип</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <p class="mb-0">Валюта</p>
                                </div>
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Партнёр</p>
                                </div>
                                 <div class="col-md-2 col-12">
                                    <p class="mb-0">Статус</p>
                                </div>
                        	</div>
                        </div>
                        <div class="login_list_body">
                       
                                @forelse($cryptos as $crypto)
                           <div class="row">
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Дата: </span> {{ $crypto->created_at }}</p>
                                </div>
                                
                                <div class="col-md-3 col-12 py-2">
                                    <p class="mb-0 text-warning"><span class="d-inline-block d-md-none">Тип: </span>@if ($crypto->type == "0") Продажа @else Покупка @endif</p>
                                </div>
                                <div class="col-md-2 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Валюта: </span> {{ $crypto->currency }}</p>
                                </div>
                                <div class="col-md-4 col-12 py-2">
                                @if ($crypto->user_id1 == Auth::user()->id) 
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Партнёр: </span> <a target="blank" href = "./profile/{{$crypto->user_id2}}" >{{DB::table('users')->where('id', $crypto->user_id2 )->first()->name}} </a> 
                                   </p> @else 
                                     <p class="mb-0"><span class="d-inline-block d-md-none">Партнёр: </span> <a target="blank" href = "./profile/{{$crypto->user_id1}}" >{{DB::table('users')->where('id', $crypto->user_id1 )->first()->name}}</a>
                                    </p>@endif
                                </div>
                                <div class="col-md-2 col-12 py-2">
                                    <p class="mb-0 text-success"><span class="d-inline-block d-md-none">Статус:  </span>{{ $crypto->status }}</p>
                                </div>
                        @empty
                            <div class="row">
                                <p class="mb-0">Вы ещё не покупали/продавали криптовалюту.</p>
                               
                            </div>
                            @endforelse
                            </div>
                 
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div></div>
     <script>
  
     $(document).ready(function() {
     
     
     var hash = md5("{{ Auth::user()->email }}");
       $(".gravatar").attr('data-gravatar_hash',hash);
     var name = "{{ Auth::user()->name }}";
             $.ajax({
      url: 'https://secure.gravatar.com/'+hash+'.json',
      method: 'GET',
      timeout: 4000,
      success: function successFn(response) {
        //Выполнить генерацию Gravatar
        $("#ava1").css('display','none');
        $(".gravatar").css('display','block');
           $(".gravatar").asyncGravatar({
    size: 100, // default: 64
default_img: "404",
  force_https: true // default: false
});
      },
      error: function errorFn(response, status, error) {
      if(response.status =="404"){
      //Выполнить генерацию CSS авы 
      $(".gravatar").css('display','none');
      $("#ava1").css('display','block');
      ColorAva(name);
      }
         
      }
  });


google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var dataSwap = new google.visualization.DataTable();
      dataSwap.addColumn('number', 'X');
      dataSwap.addColumn('number', 'Обменов');

      dataSwap.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);
         var dataCrypto = new google.visualization.DataTable();
      dataCrypto.addColumn('number', 'X');
      dataCrypto.addColumn('number', 'Обменов');

      dataCrypto.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);

      var optionsSwap = {
        hAxis: {
          title: 'Дата'
        },
        vAxis: {
          title: 'Обмен валют (за последнее время)'
        }
      };
      
 var optionsCrypto = {
        hAxis: {
          title: 'Дата'
        },
        vAxis: {
          title: 'Сделки на бирже (за последнее время)'
        }
      };
      var chartSwap = new google.visualization.LineChart(document.getElementById('chart_Swap'));
      var chartCrypto = new google.visualization.LineChart(document.getElementById('chart_Crypto'));

      chartSwap.draw(dataSwap, optionsSwap);
      chartCrypto.draw(dataCrypto, optionsCrypto);
    }

}); 



      var stringToColor = function stringToColor(str) {
    var hash = 0;
    var color = '#';
    var i;
    var value;
    var strLength;
    
    if(!str) {
        return color + '333333';
    }
    
    strLength = str.length;
    
    for (i = 0; i < strLength; i++) {
        hash = str.charCodeAt(i) + ((hash << 5) - hash);
    }
    
    for (i = 0; i < 3; i++) {
        value = (hash >> (i * 8)) & 0xFF;
        color += ('00' + value.toString(16)).substr(-2);
    }
    
    return color;
};
function ColorAva(name)
{
var letter = name.substr(0, 1).toUpperCase();

var backgroundColor = stringToColor(name);

var elementAvatar = document.getElementById('ava1');

elementAvatar.innerHTML = letter;
elementAvatar.style.backgroundColor = backgroundColor;
};


function md5 ( str ) {	// Calculate the md5 hash of a string
	// 
	// +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
	// + namespaced by: Michael White (http://crestidg.com)

	var RotateLeft = function(lValue, iShiftBits) {
			return (lValue<<iShiftBits) | (lValue>>>(32-iShiftBits));
		};

	var AddUnsigned = function(lX,lY) {
			var lX4,lY4,lX8,lY8,lResult;
			lX8 = (lX & 0x80000000);
			lY8 = (lY & 0x80000000);
			lX4 = (lX & 0x40000000);
			lY4 = (lY & 0x40000000);
			lResult = (lX & 0x3FFFFFFF)+(lY & 0x3FFFFFFF);
			if (lX4 & lY4) {
				return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
			}
			if (lX4 | lY4) {
				if (lResult & 0x40000000) {
					return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
				} else {
					return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
				}
			} else {
				return (lResult ^ lX8 ^ lY8);
			}
		};

	var F = function(x,y,z) { return (x & y) | ((~x) & z); };
	var G = function(x,y,z) { return (x & z) | (y & (~z)); };
	var H = function(x,y,z) { return (x ^ y ^ z); };
	var I = function(x,y,z) { return (y ^ (x | (~z))); };

	var FF = function(a,b,c,d,x,s,ac) {
			a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
			return AddUnsigned(RotateLeft(a, s), b);
		};

	var GG = function(a,b,c,d,x,s,ac) {
			a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
			return AddUnsigned(RotateLeft(a, s), b);
		};

	var HH = function(a,b,c,d,x,s,ac) {
			a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
			return AddUnsigned(RotateLeft(a, s), b);
		};

	var II = function(a,b,c,d,x,s,ac) {
			a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
			return AddUnsigned(RotateLeft(a, s), b);
		};

	var ConvertToWordArray = function(str) {
			var lWordCount;
			var lMessageLength = str.length;
			var lNumberOfWords_temp1=lMessageLength + 8;
			var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1 % 64))/64;
			var lNumberOfWords = (lNumberOfWords_temp2+1)*16;
			var lWordArray=Array(lNumberOfWords-1);
			var lBytePosition = 0;
			var lByteCount = 0;
			while ( lByteCount < lMessageLength ) {
				lWordCount = (lByteCount-(lByteCount % 4))/4;
				lBytePosition = (lByteCount % 4)*8;
				lWordArray[lWordCount] = (lWordArray[lWordCount] | (str.charCodeAt(lByteCount)<<lBytePosition));
				lByteCount++;
			}
			lWordCount = (lByteCount-(lByteCount % 4))/4;
			lBytePosition = (lByteCount % 4)*8;
			lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80<<lBytePosition);
			lWordArray[lNumberOfWords-2] = lMessageLength<<3;
			lWordArray[lNumberOfWords-1] = lMessageLength>>>29;
			return lWordArray;
		};

	var WordToHex = function(lValue) {
			var WordToHexValue="",WordToHexValue_temp="",lByte,lCount;
			for (lCount = 0;lCount<=3;lCount++) {
				lByte = (lValue>>>(lCount*8)) & 255;
				WordToHexValue_temp = "0" + lByte.toString(16);
				WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length-2,2);
			}
			return WordToHexValue;
		};

	var x=Array();
	var k,AA,BB,CC,DD,a,b,c,d;
	var S11=7, S12=12, S13=17, S14=22;
	var S21=5, S22=9 , S23=14, S24=20;
	var S31=4, S32=11, S33=16, S34=23;
	var S41=6, S42=10, S43=15, S44=21;

	x = ConvertToWordArray(str);
	a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;

	for (k=0;k<x.length;k+=16) {
		AA=a; BB=b; CC=c; DD=d;
		a=FF(a,b,c,d,x[k+0], S11,0xD76AA478);
		d=FF(d,a,b,c,x[k+1], S12,0xE8C7B756);
		c=FF(c,d,a,b,x[k+2], S13,0x242070DB);
		b=FF(b,c,d,a,x[k+3], S14,0xC1BDCEEE);
		a=FF(a,b,c,d,x[k+4], S11,0xF57C0FAF);
		d=FF(d,a,b,c,x[k+5], S12,0x4787C62A);
		c=FF(c,d,a,b,x[k+6], S13,0xA8304613);
		b=FF(b,c,d,a,x[k+7], S14,0xFD469501);
		a=FF(a,b,c,d,x[k+8], S11,0x698098D8);
		d=FF(d,a,b,c,x[k+9], S12,0x8B44F7AF);
		c=FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);
		b=FF(b,c,d,a,x[k+11],S14,0x895CD7BE);
		a=FF(a,b,c,d,x[k+12],S11,0x6B901122);
		d=FF(d,a,b,c,x[k+13],S12,0xFD987193);
		c=FF(c,d,a,b,x[k+14],S13,0xA679438E);
		b=FF(b,c,d,a,x[k+15],S14,0x49B40821);
		a=GG(a,b,c,d,x[k+1], S21,0xF61E2562);
		d=GG(d,a,b,c,x[k+6], S22,0xC040B340);
		c=GG(c,d,a,b,x[k+11],S23,0x265E5A51);
		b=GG(b,c,d,a,x[k+0], S24,0xE9B6C7AA);
		a=GG(a,b,c,d,x[k+5], S21,0xD62F105D);
		d=GG(d,a,b,c,x[k+10],S22,0x2441453);
		c=GG(c,d,a,b,x[k+15],S23,0xD8A1E681);
		b=GG(b,c,d,a,x[k+4], S24,0xE7D3FBC8);
		a=GG(a,b,c,d,x[k+9], S21,0x21E1CDE6);
		d=GG(d,a,b,c,x[k+14],S22,0xC33707D6);
		c=GG(c,d,a,b,x[k+3], S23,0xF4D50D87);
		b=GG(b,c,d,a,x[k+8], S24,0x455A14ED);
		a=GG(a,b,c,d,x[k+13],S21,0xA9E3E905);
		d=GG(d,a,b,c,x[k+2], S22,0xFCEFA3F8);
		c=GG(c,d,a,b,x[k+7], S23,0x676F02D9);
		b=GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);
		a=HH(a,b,c,d,x[k+5], S31,0xFFFA3942);
		d=HH(d,a,b,c,x[k+8], S32,0x8771F681);
		c=HH(c,d,a,b,x[k+11],S33,0x6D9D6122);
		b=HH(b,c,d,a,x[k+14],S34,0xFDE5380C);
		a=HH(a,b,c,d,x[k+1], S31,0xA4BEEA44);
		d=HH(d,a,b,c,x[k+4], S32,0x4BDECFA9);
		c=HH(c,d,a,b,x[k+7], S33,0xF6BB4B60);
		b=HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);
		a=HH(a,b,c,d,x[k+13],S31,0x289B7EC6);
		d=HH(d,a,b,c,x[k+0], S32,0xEAA127FA);
		c=HH(c,d,a,b,x[k+3], S33,0xD4EF3085);
		b=HH(b,c,d,a,x[k+6], S34,0x4881D05);
		a=HH(a,b,c,d,x[k+9], S31,0xD9D4D039);
		d=HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);
		c=HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);
		b=HH(b,c,d,a,x[k+2], S34,0xC4AC5665);
		a=II(a,b,c,d,x[k+0], S41,0xF4292244);
		d=II(d,a,b,c,x[k+7], S42,0x432AFF97);
		c=II(c,d,a,b,x[k+14],S43,0xAB9423A7);
		b=II(b,c,d,a,x[k+5], S44,0xFC93A039);
		a=II(a,b,c,d,x[k+12],S41,0x655B59C3);
		d=II(d,a,b,c,x[k+3], S42,0x8F0CCC92);
		c=II(c,d,a,b,x[k+10],S43,0xFFEFF47D);
		b=II(b,c,d,a,x[k+1], S44,0x85845DD1);
		a=II(a,b,c,d,x[k+8], S41,0x6FA87E4F);
		d=II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);
		c=II(c,d,a,b,x[k+6], S43,0xA3014314);
		b=II(b,c,d,a,x[k+13],S44,0x4E0811A1);
		a=II(a,b,c,d,x[k+4], S41,0xF7537E82);
		d=II(d,a,b,c,x[k+11],S42,0xBD3AF235);
		c=II(c,d,a,b,x[k+2], S43,0x2AD7D2BB);
		b=II(b,c,d,a,x[k+9], S44,0xEB86D391);
		a=AddUnsigned(a,AA);
		b=AddUnsigned(b,BB);
		c=AddUnsigned(c,CC);
		d=AddUnsigned(d,DD);
	}

	var temp = WordToHex(a)+WordToHex(b)+WordToHex(c)+WordToHex(d);

	return temp.toLowerCase();
};
  
</script>
      @endsection
      