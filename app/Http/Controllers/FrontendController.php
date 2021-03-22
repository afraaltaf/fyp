<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Time;
use App\Models\User;
use App\Models\Booking;
use App\Models\Prescription;
use App\Mail\LessonMail;

class FrontendController extends Controller
{
    
    public function index()
    {
    	date_default_timezone_set('Europe/London');
        if(request('date')){
            $tutors = $this->findTutorsBasedOnDate(request('date'));
            return view('welcome',compact('tutors'));
        }
        $tutors = Lesson::where('date',date('Y-m-d'))->get();
    	return view('welcome',compact('tutors'));
    }

    public function show($tutorId,$date)
    {
        $lesson = Lesson::where('user_id',$tutorId)->where('date',$date)->first();
        $times = Time::where('lesson_id',$lesson->id)->where('status',0)->get();
        $user = User::where('id',$tutorId)->first();
        $tutor_id = $tutorId;

        return view(lesson,compact('times','date','user','tutor_id'));
    }

    public function findTutorsBasedOnDate($date)
    {
        $tutors = Lesson::where('date',$date)->get();
        return $tutors;

    }

    public function store(Request $request)
    {
        date_default_timezone_set('Europe/London');
        
        $request->validate(['time'=>'required']);
        $check=$this->checkBookingTimeInterval();
        if($check){
            return redirect()->back()->with('message','You have already booked a lesson today.');
        }
         
        
        Booking::create([
            'user_id'=> auth()->user()->id,
            'tutor_id'=> $request->tutorId,
            'time'=> $request->time,
            'date'=> $request->date,
            'status'=>0
        ]);

        Time::where('lesson_id',$request->lessonId)
            ->where('time',$request->time)
            ->update(['status'=>1]);
        //send email notification
        $tutorName = User::where('id',$request->tutorId)->first();
        $mailData = [
            'name'=>auth()->user()->name,
            'time'=>$request->time,
            'date'=>$request->date,
            'tutorName' => $tutorName->name

        ];
        try{
           // \Mail::to(auth()->user()->email)->send(new LessonMail($mailData));

        }catch(\Exception $e){

        }

        return redirect()->back()->with('message','Your lesson has been booked');


    }
  
    public function edit($id)
    {

        $lesson = Lesson::where('user_id',$tutorId)->where('date',$date)->first();
        $times = Time::where('lesson_id',$lesson->id)->where('status',0)->get();
        $user = User::where('id',$tutorId)->first();
        $tutor_id = $tutorId;

        return view(lesson,compact('times','date','user','tutor_id'));
    }


    public function update(Request $request, $id)
    {
		
        date_default_timezone_set('Europe/London');
        
        $request->validate(['time'=>'required']);
        $check=$this->checkBookingTimeInterval();
        if($check){
            return redirect()->back()->with('message','You have already booked a lesson.');
        }
   
        Booking::find($id)([
            'user_id'=> auth()->user()->id,
            'tutor_id'=> $request->tutorId,
            'time'=> $request->time,
            'date'=> $request->date,
            'status'=>0
        ]);

        Time::where('lesson_id',$request->lessonId)
            ->where('time',$request->time)
            ->update(['status'=>1]);
        //send email notification
        $tutorName = User::where('id',$request->tutorId)->first();
        $mailData = [
            'name'=>auth()->user()->name,
            'time'=>$request->time,
            'date'=>$request->date,
            'tutorName' => $tutorName->name

        ];
        try{
           // \Mail::to(auth()->user()->email)->send(new LessonMail($mailData));

        }catch(\Exception $e){

        }

        return redirect()->back()->with('message','Your lesson was successfully amended');


    }

    public function destroy($id)
    {
        
       $booking = Booking::find($id);
       $booking->delete();
       return redirect('/my-booking');


    }


    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id','desc')
            ->where('user_id',auth()->user()->id)
            ->whereDate('created_at',date('Y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $lessons = Booking::latest()->where('user_id',auth()->user()->id)->get();
        return view('booking.index',compact('lessons'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id',auth()->user()->id)->get();
        return view('my-prescription',compact('prescriptions'));
    }

    public function tutorToday(Request $request)
    {
        $tutors = Lesson::with('tutor')->whereDate('date',date('Y-m-d'))->get();
        return $tutors;
    }

    public function findTutors(Request $request)
    {
        $tutors = Lesson::with('tutor')->whereDate('date',$request->date)->get();
        return $tutors;
    }






  
   

    



   



}
