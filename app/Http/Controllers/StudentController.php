<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {

    	date_default_timezone_set('Europe/London');
		$bookings =  Booking::where('date',date('Y-m-d'))->where('status',1)->where('patient_id',auth()->user()->id)->get();
		return view('prescription.index',compact('bookings'));
    }
   

    public function store(Request $request)
    {
    	$data  = $request->all();
    	$data['medicine'] = implode(',',$request->medicine);
    	Prescription::create($data);
    	return redirect()->back()->with('message','Prescription created');
    }

    public function show($userId,$date)
    {
        $prescription = Prescription::where('user_id',$userId)->where('date',$date)->first();
        return view('prescription.show',compact('prescription'));
    }

    //get all patients from prescription table
    public function patientsFromPrescription()
    {
        $patients = Prescription::get();
        return view('prescription.all',compact('patients'));
    }



}

// <div class="content">
//     <p>high</p>
// </div>
// <div class="content">
//     <p>low</p>
// </div>
// <div class="content">
//     <p>medium</p>
// </div>
// <div class="content">
//     <p>critical</p>
// </div>
// <div class="content">
//     <p>high</p>
// </div>

// Jquery
// var content = $(".content p").text();

//     if (content == "high") {

//         $(this).css("color", "#ffffff");
//     }
//    if (content == "low") {

//         $(this).css("color", "#ccc");
//     }
//    if (content == "critical") {

//         $(this).css("color", "#000");
//     }