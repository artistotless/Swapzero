 @extends('layouts.light')
@section('title', 'Часто задаваемые вопросы')
@section('content')
<div id="profilepage">

        
      
      <div class="row" style="
    /* display: none; */
">
      	<div class="col-xl-9 col-md-8">
      		<div class="card mb-4">
            	
    <div class="card-wrap">
                	<ul role="tablist" id="pills-tab" class="nav nav_tab">
                      <li class="nav-item">
                        <a href="#tab1" data-toggle="tab" class="nav-link active show">Общие настройки</a>
                      </li>
                      
                    <li class="nav-item">
                        <a href="#tab2" data-toggle="tab" class="nav-link">Безопасность</a>
                      </li><li class="nav-item">
                        <a href="#tab3" data-toggle="tab" class="nav-link">Оповещения</a>
                      </li></ul>
                    <div class="tab-content card-body">
                        <div role="tabpanel" id="tab1" class="tab-pane fade active show">
    <div class="row">
                        	<form class="form-horizontal row mt-2" action="index.html">
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Логин</label>
                                <input type="text" class="form-control" value="Tricia Diyana" required="" autofocus="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" value="johndoe9016@gmail.com" required="" autofocus="">
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Telegram</label>
                                <input type="text" class="form-control" required="" autofocus="" placeholder="@example">
                            </div>
                        </div><div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>VK</label>
                                <input type="text" class="form-control" required="" autofocus="" placeholder="Ваша страница вконтакте">
                            </div>
                        </div><div class="col-12 text-right">
                            <button type="submit" class="btn btn-default mt-2">Сохранить</button>
                        </div>
                    </form>
    </div>
                        </div>
                        <div role="tabpanel" id="tab2" class="tab-pane fade"><div class="row">
                          <form class="form-horizontal row mt-2" action="index.html">
                        
                        
                        
                        
                        
                        
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Новый пароль</label>
                                <input type="password" class="form-control" placeholder="Enter Password" value="123456" required="" autofocus="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Повторите пароль</label>
                                <input type="password" class="form-control" placeholder="Enter Password" value="123456" required="" autofocus="">
                            </div>
                        </div><div class="col-12 text-right">
                            <button type="submit" class="btn btn-default mt-2">Сохранить</button>
                        </div>
                    </form>
                        </div></div>
                    <div role="tabpanel" id="tab3" class="tab-pane fade">
                            <div class="row"><div class="card">
            	<div class="card-header">Email Оповещения</div>
                <div class="card-body">
                	<div class="row">
                    	<div class="col-xl-6 col-lg-12">
                            <div class="switch_box float-right pl-3">
                                <label class="switch">
                                    <input checked="" class="switch_checkbox" type="checkbox">
                                    <span class="switch_slide"></span>
                                </label>
                            </div>
                            <h6>Новости сервиса</h6>
                            <p class="small text-muted ">Оповещать только о самых важных новостях.</p>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="switch_box float-right pl-3">
                                <label class="switch">
                                    <input class="switch_checkbox" type="checkbox">
                                    <span class="switch_slide"></span>
                                </label>
                            </div>
                            <h6>Криптовалюта</h6>
                            <p class="small text-muted ">Вы первыми узнаете кто решил продать/купить криптовалюту на бирже.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
                            </div>
                        </div></div>
                </div>
                
            </div>
            
      	</div>
        <div class="col-xl-3 col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
              	<div class="col-md-12 text-center">
                	<div class="user_pic_wrap">
                    	<img src="images/user_img.jpg" alt="user_img">
                        <span class="edit_pic">
                        	<label for="user_img">
                            	<input type="file" name="filename" id="user_img" accept="image/gif, image/jpeg, image/png">
                                <i class="fa fa-edit"></i>
                            </label>
                        </span>
                    </div>
                    <div class="user_detail">
                    	<h5 class="mt-2">admin</h5>
                        <a href="#">triciadiyana@gmail.com</a>
                    </div>
                    <ul class="list_none social_icon">
                        <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class=" fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                     </ul>
                </div>
              </div>
            </div>
            <div class="card-body border-top">
            	<div class="row text-center">
              	<div class="col-md-12">
                  <h5 class="text-muted small">Денежный оборот</h5>
                  <h3>700₽</h3>
              	</div>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Обмен эл. валют</div>
                <div class="card-body">
                	<div class="col-12">
                    	<div class="login_list_head d-none d-md-block">
                        	<div class="row">
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Дата</p>
                                </div>
                                <div class="col-md-3 col-12">
                                    <p class="mb-0">Сумма</p>
                                </div><div class="col-md-4 col-12">
                                    <p class="mb-0">Отдали</p>
                                </div><div class="col-md-3 col-12">
                                    <p class="mb-0">Получили</p>
                                </div>
                                
                                
                        	<div class="col-md-2 col-12">
                                    <p class="mb-0">Статус</p>
                                </div></div>
                        </div>
                        <div class="login_list_body">
                            <div class="row">
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Дата: </span> 2018-01-31 06:52:40</p>
                                </div>
                                
                                <div class="col-md-3 col-12 py-2">
                                    <p class="mb-0 text-warning"><span class="d-inline-block d-md-none">Сумма: </span>100 ₽</p>
                                </div><div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Отдали: </span> QIWI</p>
                                </div>
                                <div class="col-md-2 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Получили: </span> Яндекс.Деньги</p>
                                </div><div class="col-md-2 col-12 py-2">
                                    <p class="mb-0 text-success"><span class="d-inline-block d-md-none">Статус:  </span>Успешно</p>
                                </div>
                            </div>
                            
                            
                            
                        <div class="row">
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Дата: </span> 2018-01-31 06:52:40</p>
                                </div>
                                
                                <div class="col-md-3 col-12 py-2">
                                    <p class="mb-0 text-warning"><span class="d-inline-block d-md-none">Сумма: </span>900 ₽</p>
                                </div><div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Отдали: </span>Webmoney (WMR)</p>
                                </div>
                                <div class="col-md-2 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Получили: </span> Яндекс.Деньги</p>
                                </div><div class="col-md-2 col-12 py-2">
                                    <p class="mb-0 text-success"><span class="d-inline-block d-md-none">Статус:  </span>Успешно</p>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      	      	<br><div class="row">
      	<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Покупка/Продажа криптовалют</div>
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
                                <div class="col-md-3 col-12">
                                    <p class="mb-0">Status</p>
                                </div>
                        	</div>
                        </div>
                        <div class="login_list_body">
                            <div class="row">
                                <p class="mb-0">Вы ещё не покупали/продавали криптовалюту.</p>
                                
                                
                                
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div></div>
      @endsection