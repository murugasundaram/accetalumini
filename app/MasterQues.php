<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MasterQues extends Model
{
    protected $table = 'master_ques';
    protected $fillable = [
        'id',
        'ques'
    ];

}
