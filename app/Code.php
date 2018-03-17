<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Code extends Model
{
    protected $table = 'codes';


    public function getStatus($carpa){

      $status = 0;
      $cs = \DB::table('codes as code')
         ->select('*')
         ->where('code.carpa','=',$carpa)
         ->get();
     foreach ($cs as $c) {
      $status = $c->status;
     }

      return $status;
    }

    public function getCarpa($userId){

      $carpas = 0;
      $count = \DB::table('user_code as u_c')
         ->select('u_c.user_id')
         ->where('u_c.user_id','=',$userId)
         ->count();

      if($count > 0){
        $carpas = \DB::table('user_code as u_c')
          ->join('codes as c', 'u_c.code_id', '=', 'c.id')
          ->select('c.*')
          ->where('u_c.user_id','=',$userId)
          ->get();

      }

      return $carpas;
    }
}
