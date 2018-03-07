<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Alert;
use Mail;
class ContactController extends Controller
{
    

    public function contact (Request $request){

  $contact= new Contact();
      $contact->nom=$request->input('nom');
   $contact->email=$request->input('email');
   $contact->text=$request->input('text');
   $contact->save();


session()->flash('ss' ,'creat contact sucess  ');
 return redirect('/');



    }


    public function send(Request $request){

 $a = 'Email : '.$request->get('email').'                              '.$request->get('text');


Mail::raw($a, function($message)
{
    $message->from('annonyme@gmail.com', 'KHAYR.com');

    $message->to('aittaharyoussef7@gmail.com' )->cc('aittaharyoussef7@gmail.com');
});









	

























    }
}
