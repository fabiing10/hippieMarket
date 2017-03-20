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
      $carpa = 0;
      $count = \DB::table('user_code as u_c')
         ->select('u_c.user_id')
         ->where('u_c.user_id','=',$userId)
         ->count();

      if($count > 0){

        $query = \DB::table('user_code as u_c')
           ->select('*')
           ->where('u_c.user_id','=',$userId)
           ->get();
        foreach ($query as $q) {
         $code_id = $q->code_id;
        }

       $cs = \DB::table('codes as code')
            ->select('*')
            ->where('code.id','=',$code_id)
            ->get();
        foreach ($cs as $code) {
         $carpa = $code->carpa;
        }
      }


      return $carpa;
    }
}
