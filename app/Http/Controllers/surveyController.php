<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class surveyController extends Controller
{
    public function startSurvey()
    {
    	return view('index');
    }
}
