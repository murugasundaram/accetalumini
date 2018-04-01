<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    protected $fillable = [
        'id',
        'name',
		'email',
        'msg'
    ];

}
