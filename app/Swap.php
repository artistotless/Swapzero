<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swap extends Model
{
protected $table = 'swaps';
protected $fillable = ['user_id', 'currency1','currency2','sum','status','curr1details','curr2details','uniqid'];
}
