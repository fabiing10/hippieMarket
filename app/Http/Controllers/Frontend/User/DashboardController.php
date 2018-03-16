<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use \App\Code;
use \App\UserCode;
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
        date_default_timezone_set('America/Bogota');
        $c = new Code;
        $user_code = new UserCode;
        $status = \DB::table('user_code as u_c')->select('*')->where('u_c.user_id','=',Auth::id())->count();

        $uProfileId = Auth::id();
        $userProfile = User::find($uProfileId);

        $spot = $userProfile->spot;


        $status = \DB::table('user_code as u_c')->select('*')->where('u_c.user_id','=',Auth::id())->count();

        if($status >= $spot){
          $select = false;
        }else{
          $select = true;
        }

        $carpas = \DB::table('user_code as u_c')
          ->join('codes as c', 'u_c.code_id', '=', 'c.id')
          ->select('c.*')
          ->where('u_c.user_id','=',Auth::id())
          ->get();


       return view('frontend.user.dashboard')
                    ->with('c',$c)
                    ->with('carpas',$carpas)
                    ->with('status',$status)
                    ->with('select',$select)
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

      $userInfo =  User::find($user);
      $userInfo->carpa = true;
      $userInfo->save();

      return redirect('dashboard');
    }
    public function home(){
      return redirect('/dashboard');
    }
}
