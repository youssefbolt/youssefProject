<?php

namespace App;
use App\Mail\Requests;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nom', 'text', 'email',
    ];

 	
 	protected $dates = ['updated_at'];
   

   
}
