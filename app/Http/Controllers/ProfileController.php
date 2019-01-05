<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings(Request $request)
    {
$this->validate($request, [
    'tg' => 'alpha_dash|max:100',
    'vk' => 'url|max:100',
  ]);
          User::find($request->id)
                ->update([                   
                    'name'=>$request->name,
                    'tg'=>$request->tg,
                    'vk'=>$request->vk,
                    
                ]);
                
      
      return redirect('/myprofile');

    }
    public function myprofile()
    {
    $swaps =  DB::table('swaps')->where('user_id', Auth::user()->id )->get();
    $cryptos =  DB::table('cryptos')->where('user_id1', Auth::user()->id )->orWhere('user_id2', Auth::user()->id )->get();
    
        return view('myprofile' , [                   
                    'swaps'=>$swaps,
                    'cryptos'=>$cryptos,
                ]
        
        );
    }
}
