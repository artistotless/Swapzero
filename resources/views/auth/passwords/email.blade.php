<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Восстановление пароля</title>
    @include('layouts.light.styles')
</head>

<body>
    
  <div class="bg_image h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	<a href="{{ url('/') }}" >
          	<img src="{{ asset('index_files/logo_dark.png') }}" alt="logo">
          	</a>
            </div>	
            
            <form method="POST" action="{{ route('password.email') }}" style="
    margin-top: 25px;
">
{{ csrf_field() }}
              <div class="form-group">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">Email</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="example@site.net" value="{{ old('email') }}"  required autofocus>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
        
        
              <button type="submit" class="btn btn-default btn-block">Сбросить пароль</button>
            </form>
       
          </div>
        </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



</body></html>