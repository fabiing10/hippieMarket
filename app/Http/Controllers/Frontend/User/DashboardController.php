<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use \App\Code;
use \App\UserCode;
use \App\Confirmation;
use \App\Confirmation;
use App\Models\Access\User\User;
/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $c = new Code;
        $user_code = new UserCode;
        $status = \DB::table('user_code as u_c')->select('*')->where('u_c.user_id','=',Auth::id())->count();


        if($status == true){
          $status = \DB::table('user_code as u_c')->select('*')->where('u_c.user_id','=',Auth::id())->get();
          foreach ($status as $s) {
           $code_id = $s->code_id;
          }

          $cs = \DB::table('codes as code')
               ->select('*')
               ->where('code.id','=',$code_id)
               ->get();
           foreach ($cs as $code) {
            $carpa = $code->carpa;
           }

        }else{
          $carpa = 0;
        }





       return view('frontend.user.dashboard')
                    ->with('c',$c)
                    ->with('carpa',$carpa)
                    ->with('status',$status)
                    ->with('userCode',$user_code);
    }

    public function save(DashboardRequest $request){

      $user = Auth::id();
      $carpa = Crypt::decrypt($request->carpa);

      $cs = \DB::table('codes as code')
         ->select('*')
         ->where('code.carpa','=',$carpa)
         ->get();
      foreach ($cs as $code) {
       $code_id = $code->id;
      }

      $code = Code::find($code_id);
      $code->status = true;
      $code->save();

      $userCode = new UserCode;
      $userCode->user_id = $user;
      $userCode->code_id = $code_id;
      $userCode->save();

      $confirmation = new Confirmation;
      $confirmation->user_id = $user;
      $confirmation->tipo_organizacion = $request->tipo_organizacion;
      $confirmation->nit = $request->nit;
      $confirmation->nombre_marca = $request->nombre_marca;
      $confirmation->representante_marca = $request->representante_legal;
      $confirmation->cedula = $request->cedula;
      $confirmation->direccion = $request->direccion;
      $confirmation->save();

      $userCode =  User::find($user);
      $userCode->carpa = true;
      $userCode->save();

      return redirect('dashboard');
    }
}
