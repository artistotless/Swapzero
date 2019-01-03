<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Code;
use App\Http\Controllers\CodeController;

class ActivateEmailController extends Controller
{
   public function activate(Request $request)
{
    $res = Code::where('user_id',$request->id)
        ->where('code',$request->code)
        ->first();
    if($res) {
        //Удаляем использованный код           
        $res->delete();
        //активируем аккаунт пользователя           
        User::find($request->id)
                ->update([                   
                    'activated'=>1,
                ]);
        //редиректим на страницу авторизации с сообщением об активации
        return  '<div data-toggle="tab" class="tab-link active" style=" background: #ff5c7f;  font-family: Arial; text-align: center; padding: 50px; color: white;">Аккаунт успешно активирован . <a style="color: #ad2845;" href="/">Перейти на главную</a></div>';
        // redirect()->to('auth/login')->with(['message' => 'ok']);
    }
    return '<div data-toggle="tab" class="tab-link active" style=" background: #ab314b; font-family: Arial; text-align: center; padding: 50px; color: white; ">Ошибка! Токен активации аккаунта не найден. <a style="color: #f37c95;" href="/">Перейти на главную</a></div>';
}
}
