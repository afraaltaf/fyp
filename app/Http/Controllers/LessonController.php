<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Time;
use App\Models\Prescription;
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mylessons = Lesson::latest()->where('user_id',auth()->user()->id)->get();
        
        return view('admin.lesson.index',compact('mylessons'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'date'=>'required|unique:lessons,date,NULL,id,user_id,'.\Auth::id(),
            'time'=>'required',
            
    
        ]);
        $lesson = Lesson::create([
            'user_id'=> auth()->user()->id,
            'date' => $request->date,
            
        ]);
        foreach($request->time as $time){
            Time::create([
                'lesson_id'=> $lesson->id,
                'time'=> $time,
                
                //'stauts'=>0
            ]);
        }
        return redirect()->back()->with('message','Lesson created for'. $request->date);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request){

        $date = $request->date;
        $lesson= Lesson::where('date',$date)->where('user_id',auth()->user()->id)->first();
        if(!$lesson){
            return redirect()->to('/lesson')->with('errmessage','Lesson time not available for this date');
        }
        $lessonId = $lesson->id;
        $times = Time::where('lesson_id',$lessonId)->get();

       
        return view('admin.lesson.index',compact('times','lessonId','date'));
    }

    public function updateTime(Request $request){
        $lessonId = $request->lessonId;
        $lesson = Time::where('lesson_id',$lessonId)->delete();
        foreach($request->time as $time){
            Time::create([
                'lesson_id'=>$lessonId,
                'time'=>$time,
                'status'=>0
            ]);
        }
        return redirect()->route('lesson.index')->with('message','Lesson time updated.');
    }


 
}

