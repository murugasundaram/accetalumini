<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = [
        'id',
        'qus_no',
        'stu_id',
        'ans'
    ];

}
