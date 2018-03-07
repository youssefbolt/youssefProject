<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contribution;
use App\User;

use Carbon\Carbon;
use App\Campaign;
use Auth;
use File;
use App\Http\Requests\Requestsit;
use App\Http\Requests\UPDATEREQUEST;
use Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;

class SiteController extends Controller
{
 public function __construct(){
 	$this->middleware('bini');
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




  public function indexcmp(){
$cnb = DB::table('binis')->join('campaigns', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('binis.id' , Auth::guard('bini')->user()->id)->get();


return view('cmp', ['cnb' => $cnb ]);

  }





public function trans ($id){
  if($id ==1){
$cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'dam' )->get();

  }
  if($id ==2){
$cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'laijoi' )->get();

    
  }
  if($id ==3){
$cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'top' )->get();
    
  }
  if($id ==4){
$cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'kaka' )->get();
    
  }
  if($id ==5){

    $cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'zizi' )->get();
  }
  if($id ==6){

      $cnb = DB::table('campaigns')->join('binis', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)


->where('type_cmp' ,'fafa' )->get();
  }
 

return view('hamalat', ['cnb' => $cnb ]);


}



  public function edite($id){

$cnb = DB::table('campaigns')->where('id', $id )->get();


return view('cmpedit', ['cnb' => $cnb]);
  }


  public function filtrhamalat(Request $request){
$cnb = DB::table('binis')->join('campaigns', 'campaigns.id_bini', '=', 'binis.id')->where( 'deleted_at' , null)->


where('ville',$request->input('ville'))->where()->get();


return view('cmp', ['cnb' => $cnb ]);

  }





      public function store(Request $request){


// show difference in days between now and end dates







      $cnb= new Campaign();
      $cnb->title=$request->input('title');
 $cnb->ville=$request->input('ville');
      $cnb->text=$request->input('text');
     $cnb->type_cmp=$request->input('type_cmp');
$cnb->id_bini = Auth::guard('bini')->user()->id;


  $data = $request->input('photo_cmp');

$photo = $request->file('photo_cmp')->getClientOriginalName();
$destination = 'upload';
$image =$request->file('photo_cmp')->move($destination, $photo);

$cnb->photo_cmp=$image;

$cnb->save();
Alert::success('created  job!')->persistent("Close");
 return redirect('/cmp');
  }








 public function indexsup($id){

   $cnb = DB::table('binis')->join('campaigns', 'campaigns.id_bini', '=', 'binis.id')

->where( 'deleted_at' , null)
->where('id_bini',Auth::guard('bini')->user()->id)->where('campaigns.id',$id)->get();



return view('cmpsup', ['cnb' => $cnb ]);


  }










    public function delete($id){

DB::table('campaigns')
            ->where('id', $id)
            ->update(['deleted_at' => Carbon::now()]);
return redirect('/cmp');
Alert::success('deleted good!')->persistent("Close");



  }




  public  function update($id , Request $request){
$cnb = Campaign::find($id)->get();


  if($request->file('photo_cmp') != null ){
    File::delete($cnb[0]->photo_cmp);
$photo = $request->file('photo_cmp')->getClientOriginalName();
$destination = 'upload';
$image =$request->file('photo_cmp')->move($destination, $photo);
DB::table('campaigns')
            ->where('id', $id)
            ->update(['photo_cmp' => $image ]);
}



DB::table('campaigns')
            ->where('id', $id)
            ->update(['title' => $request->input('title') , 
        'text' => $request->input('text'),

   'type_cmp' => $request->input('type_cmp'),

]);
            Alert::warning('Update  good!')->persistent("Close");
return redirect('/cmp');









  }




  


}
