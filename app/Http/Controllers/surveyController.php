<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\ContactUs;
use App\StudentDetails;
use App\MasterQues;
use App\Survey;

class surveyController extends Controller
{
    public function startSurvey()
    {
    	

    	return view('survey.question');
    }

    public function saveContact(Request $request)
    {
    	$data = $request->all();

    	$data['msg'] = $data['message'];

    	ContactUs::create($data);

        $mail = Mail::send([], [], function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to(['contact.muruga.sundaram@gmail.com', 'sgdms123@gmail.com'], "Feedback");
            $m->subject('Feedback form Accet Portal');
            $m->setBody($data['message']);
        });

        	return ['error' => false,
        			'msg' => 'mail send successfully!'];

    }

    public function storeSurvey(Request $request)
    { 
        $data = $request->all();

        $array['name'] = $data['name'];
        $array['dept'] = $data['dept'];
        $array['batch'] = $data['batch'];

        $stu = StudentDetails::create($array);

        $stu_id = $stu->id;

        $qno = array('q1' => 1, 'q2' => 2, 'q3' => 3, 'q4' => 4, 'q5' => 5, 'q6' => 6, 'q7' => 7, 
                     'q8' => 8, 'q9' => 9, 'q10' => 10, 'q11' => 11, 'q12' => 12, 'q13' => 13);

        foreach ($data['ques'] as $key => $value) {
           $val['stu_id'] = $stu_id;
           $val['qus_no'] = $qno[$key];
           $val['ans'] = $value;
           Survey::create($val);
        }

        return view('survey.question')->with(['name' => $data['name']]);
    }

    public function surveyResult()
    {
        $qno = array('q1' => 1, 'q2' => 2, 'q3' => 3, 'q4' => 4, 'q5' => 5, 'q6' => 6, 'q7' => 7, 
                     'q8' => 8, 'q9' => 9, 'q10' => 10, 'q11' => 11, 'q12' => 12, 'q13' => 13);

        $res = StudentDetails::orderBy('id', 'desc')->get();

        $questions = MasterQues::get();

        $ques = [];
        $array = [];

        foreach ($questions as $q1 => $q2) {
            $ques['q'.$q2->id] = $q2->ques;
        }
        
        $i = 0;
        foreach ($res as $key => $value) {
           $array[$i]['student']['name'] = $value->name;
           $array[$i]['student']['dept'] = $value->dept;
           $array[$i]['student']['batch'] = $value->batch;

           foreach ($qno as $qkey => $qvalue) {
            $survey = Survey::where('stu_id', $value->id)
                                            ->where('qus_no', $qvalue)->first();

             if(isset($survey) && $survey->ans != null && $survey->ans != "")
                  $array[$i]['answer'][$qkey] = $survey->ans;
              else
                $array[$i]['answer'][$qkey] = "";
           }
           $i++;
        }


        $data['question'] = $ques;
        $data['details'] = $array;
// echo "<pre>";
//         print_r($data); die();
                  
        return view('survey.result')->with($data);
    }

    public function getFeedback()
    {

        $feedback = ContactUs::orderBy('id', 'desc')->get();   

        return view('survey.feedback')->with(['feedbacks' => $feedback]);
    }
}
