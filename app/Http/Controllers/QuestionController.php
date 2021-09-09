<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('index')->with(['questions'=>$questions]);
    }

    public function show(Question $question)
    {
        if($question->showQuestion)
        {
            return view('question')->with(['question'=>$question]);
        }
        else
        {
            return view('unavailable');
        }
    }

    public function store(Request $request,Question $question)
    {
        
        $answer = new Answer;
        $answer->name = $request->name;
        $answer->ieeeid = $request->ieeeid;
        $answer->answer = $request->answer;
        $answer->questionNo = $question->questionNo;
        $answer->save();
        return redirect(route('question.index'))->with('message',"Thank You for answering the question");
        // dd($question->questionNo);
        dd($request->all());
        
    }
}
