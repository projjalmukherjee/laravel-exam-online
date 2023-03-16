<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\QuestionAnswer;

class QuestionAnswerController extends Controller
{
    
    public function index(Request $request) {

        if($request->get('student_name')) {

            $name = $request->get('student_name');
            session()->put('name',$name);
           

            
            return redirect('/exam/start');

        } else if (session('name') != NULL) {

            return redirect('/exam/start');
        }

        return view('exam.index');
    }


    public function examtext(Request $request) {


        
        if(!session()->has('name')) {

            return redirect('/exam');
            
        }

        
        $name  = session('name');

        if(!session()->has('q_id')) {
            $qu_arr = QuestionAnswer::first();
            $q_id = $qu_arr->id;
            session()->put('q_id',$q_id);

        } else {
            $q_id =  session()->get('q_id');
        }


        $question_set = QuestionAnswer::where('id',$q_id)->first();
        
        $last_question_data = QuestionAnswer::orderBy('id','desc')->first();
        $last_id = $last_question_data->id;

        $answer_with_options = json_decode($question_set->answer_with_options,true);
        
        $correct_ans = $answer_with_options['correct'];
        if($request->ajax()){
           
            $option_val = $request->get('option_val');

            $student_result_obj = Result::where('student_name',$name);
            
            $student_result = $student_result_obj->first();
           
            if($option_val == $correct_ans) {
                
                if($student_result_obj->count() > 0) {
                
                    $student_result->student_correct_ans+=1;
                } else {
                    $student_result = new Result;
                    $student_result->student_correct_ans=1;
                }
            } else if($option_val != $correct_ans && $option_val != '') {

                if($student_result->count() > 0) {
                   
                    $student_result->student_wrong_ans+=1;
                } else {
                    $student_result = new Result;
                    $student_result->student_wrong_ans=1;
                }

            } else {
               
                if($student_result->count() > 0) {

                    $student_result->student_skip_ans+=1;
                } else {
                    $student_result = new Result;
                    $student_result->student_skip_ans=1;
                }
            }

            $student_result->student_name = $name;
            $student_result->student_session_id = session()->getId();
            $student_result->save();
            
            $q_id+=1;

            if($last_id >= $q_id) {

                session()->put('q_id',$q_id);
                
            }
            else{

                session()->forget('q_id');
                return redirect('/exam/result');

            }
            
            $question_set = QuestionAnswer::where('id',$q_id)->first();
           
            $answer_with_options = json_decode($question_set->answer_with_options,true);
            
            $correct_ans = $answer_with_options['correct'];

            return view('exam.ajax',compact('question_set','answer_with_options'));

        }

        return view('exam.test',compact('question_set','answer_with_options'));

    }


    public function result() {

        $s_name = session('name');
        session()->forget('name');
        
        $result = Result::where('student_name',$s_name)->first();
        
        if(!$result) {

            return redirect('/exam');
        }
        return view('exam.result',compact('result'));

    }


}
