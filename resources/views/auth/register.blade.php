<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Регистрация пользователя</title>
    @include('layouts.light.styles')
        @include('layouts.light.scripts')

</head>
 
<body>
    
  <div class="bg_image h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	<a href="{{ url('/') }}" >
          	<img src="{{ asset('index_files/logo_white.jpg') }}" alt="logo">
          	</a>
            </div>	
            
            <form  method="POST" action="{{ route('register') }}" style="
    margin-top: 25px;
">
{{ csrf_field() }}

 <div class="form-group">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Логин</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
              </div>
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
              <div class="form-group">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="exampleInputPassword1">Пароль</label>
                <input class="form-control" id="password" type="password" placeholder="******" name="password" required>
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              
               <div class="form-group">
               <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="name">Повторите пароль</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="******" name="password_confirmation" required>
                
              </div>
              
               <div class="form-group">
               
              <label for=""></label>
              <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="javascript:void(0)" id="refresh" style="margin-left: 10px;"><span class="icon 
    icon-refresh icons
    "></span></a></p>
          </div>
          <div class="form-group">
          <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
              <label>Символы с картинки</label>
              <input class="form-control" type="text" name="captcha"/>
                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
          </div>
          
             
              <button type="submit" class="btn btn-default btn-block">Зарегистрироваться</button>
            </form>
            <div class="text-center mt-3 justify-content-between d-md-flex">
              <a class="d-block small" href="{{ url('/login') }}">Уже есть аккаунт?</a>
              <a class="d-block small" href="{{ route('password.request') }}">Забыли пароль?</a>
            </div>
          </div>
        </div>
  </div>
  
<script>
    $('#refresh').on('click',function(){
        var captcha = $('img.captcha-img');
        var config = captcha.data('refresh-config');
        $.ajax({
            method: 'GET',
            url: '/get_captcha/' + config,
        }).done(function (response) {
            captcha.prop('src', response);
        });
    });
</script>


</body></html>