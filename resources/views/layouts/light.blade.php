<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Navigation-->

  	  <!-- HEAD BLOCK-->
    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Сервис обмена и покупки электронных валют.">
  <meta name="author" content="">
  <title>@yield('title') | Swapzero - Платёжная система, p2p биржа , обмен валют.</title>
  
  @include('layouts.light.styles')
       @include('layouts.light.scripts')
  </head>
  
  <body class="fixed-nav sticky-footer" id="page-top" style="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
      @include('layouts.light.header')
      
      @include('layouts.light.navbar')
     
  </nav>
  <div class="content-wrapper">
   @if (Auth::check())
   @if (Auth::user()->activated == "0")
  <div class="tab_nav">
                	<ul role="tablist" id="pills-tab" class="nav nav-pills">
                  <li class="nav-item">
                    <div data-toggle="tab" class="tab-link active" style="
">Ваш аккаунт не активирован. Письмо для активации выслано вам на почту ({{Auth::user()->email}})</div>
                  </li>
                  
                  
                  
                </ul>
                </div>
                @endif
                @endif
    <div class="container-fluid">
    
        <!-- PITCH BLOCK-->
        @include('layouts.light.pitch')
    <!-- CONTENT BLOCK-->
      
      @yield('content')
      	</div> 
    
    <!-- FOOTER BLOCK-->
   @include('layouts.light.footer')
   </div>

  
   
      </div>

 

</body></html>