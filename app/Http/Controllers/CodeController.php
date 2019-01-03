<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
public static function generateCode($length = 10)
{
    $num = range(0, 9);	   
    $alf = range('a', 'z');	   
    $_alf = range('A', 'Z');   
    $symbols = array_merge($num, $alf, $_alf);   
    shuffle($symbols);	   
    $code_array = array_slice($symbols, 0, (int)$length);  
    $code = implode("", $code_array);
   
    return $code;
}
}
