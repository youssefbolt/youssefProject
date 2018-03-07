<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Campaign extends Model
{

   protected $fillable = [
        'title', 'text', 'type_cmp','photo_cmp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *



     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



	use softDeletes ;

}