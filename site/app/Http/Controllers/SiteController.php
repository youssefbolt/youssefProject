<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contribution;
use App\User;

use Carbon\Carbon;
use App\Bini;

use File;
use App\Http\Requests\Requestsit;
use App\Http\Requests\UPDATEREQUEST;
use Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;

class SiteController extends Controller
{
 







public authbini($email  ,$password){

$bini = DB::table('binis')->where('email',$email)->where('password',$password)->get();

 foreach ($bini as $vbini){
if($vbini->id!=null){
  return redirect('/acch');
}}

   session()->flash('eroor' ,'le mot de pass ou email incorect  ');
   return redirect('/');















}










   
   public function acch(){
$cnb = DB::table('contributions')->where( 'deleted_at' , null)->orderBy('id','desc')->limit(5)->get();


$user = DB::table('users')->get();
return view('acch', ['cnb' => $cnb , 'user'=>$user]);


  }

    public function sss(UPDATEREQUEST $request){

if($request->input('ville')==null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')

->where( 'deleted_at' , null)->limit(5)->get();



return view('acch2', ['cnb' => $cnb ]);


  }

if($request->input('ville')!=null )

if( $request->input('type_cnb')!=null){
 

 



 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->where( 'ville' ,$request->input('ville'))->get();




return view('acch2', ['cnb' => $cnb ]);



  }



if($request->input('ville')==null )

if( $request->input('type_cnb')!=null){
 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->limit(5)->get();





return view('acch2', ['cnb' => $cnb ]);

}



if($request->input('ville')!=null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'ville' ,$request->input('ville'))->limit(5)->get();





return view('acch2', ['cnb' => $cnb ]);
}




}




public function biniregister(Request $request){




      $bini= new Bini();
      $bini->nom=$request->input('name');
      $bini->password=$request->input('password');
       $bini->tel=$request->input('tel');
        $bini->ville=$request->input('ville');
          $bini->sex=$request->input('sex');
     $bini->email=$request->input('email');
     $bini->save();

}



public function binilogin(Request $request){

$bini = DB::table('binis')->where('email',$request->input('email'))->where('password',$request->input('password'))->get();

 foreach ($bini as $vbini){
if($vbini->id!=null){
	return redirect('/acch');
}}

	 session()->flash('eroor' ,'le mot de pass ou email incorect  ');
	 return redirect('/');






     

}


}
