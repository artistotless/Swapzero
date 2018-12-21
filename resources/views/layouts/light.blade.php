<html lang="{{ app()->getLocale() }}">
<head></head><body class="fixed-nav sticky-footer" id="page-top" style="">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
  	  <!-- HEAD BLOCK-->
    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Сервис обмена и покупки электронных валют.">
  <meta name="author" content="">
  <title>@yield('title') | Swapzero - Полуавтоматический обмен валют</title>
  
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="http://bestwebcreator.com/cryptocash/demo/assets/images/favicon.png">
  <!-- Bootstrap core CSS-->

   <link href="https://steam365.ru/index_files/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
  <!-- Google Font -->
  <link href="https://steam365.ru/index_files/css" rel="stylesheet">
  <!-- Icon Fonts-->
<link href="https://steam365.ru/index_files/cryptocoins.css" rel="stylesheet" type="text/css">
    
   
  <link href="https://steam365.ru/index_files/simple-line-icons.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="https://steam365.ru/index_files/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="https://steam365.ru/index_files/admin.css" rel="stylesheet">
      @include('layouts.light.header')
      
      @include('layouts.light.navbar')
     
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
    
        <!-- PITCH BLOCK-->
        @include('layouts.light.pitch')
    <!-- CONTENT BLOCK-->
      
      @yield('content')
      	</div> 
    
    <!-- FOOTER BLOCK-->
   @include('layouts.light.footer')
   </div>

  
    <!-- SCRIPTS BLOCK-->
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Page level plugin JavaScript-->

 
    <script src="./index_files/perfect-scrollbar.js"></script>
    <!-- countdown js  --> 

    <!-- Custom scripts for all pages-->
    <script src="./index_files/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="./index_files/admin-charts.min.js"></script>
      </div>

    <script>  
    
$("#sumstart" ).change(function () {

var sum = $( "#sumstart" ).val();

$("#sumfull" ).val(sum);


  })
</script>

</body></html>