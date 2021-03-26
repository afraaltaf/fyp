<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tracker;
class TrackerController extends Controller
{
    public function index()
    {

    	date_default_timezone_set('Europe/London');
		$bookings =  Booking::where('date',date('Y-m-d'))->where('status',1)->where('doctor_id',auth()->user()->id)->get();
		return view('tracker.index',compact('bookings'));
    }
   

    public function store(Request $request)
    {
    	$data  = $request->all();
    	//$data['areas_to_improve'] = implode(',',$request->areas_to_improve);
    	Tracker::create($data);
    	return redirect()->back()->with('message','Progress Inputted');

    //     $data  = $request->all();
    // 	$data['medicine'] = implode(',',$request->medicine);
    // 	Tracker::create($data);
    // 	return redirect()->back()->with('message','Tracker created');
    
    }

    public function show($userId,$date)
    {
        $tracker = Tracker::where('user_id',$userId)->where('date',$date)->first();
        return view('tracker.show',compact('trackers'));
    }

    //get all parents from tracker table
    public function parentsFromTracker()
    {
        $parents = Tracker::get();
        return view('tracker.all',compact('parents'));
    }



}

