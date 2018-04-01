<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class StudentDetails extends Model
{
    protected $table = 'student_details';
    protected $fillable = [
        'id',
        'name',
		'dept',
        'batch'
    ];

}
