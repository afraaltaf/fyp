<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Event;
use DateTime;

class EventController extends Controller
{


        public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
		//$event = Event::orderBy('created_at')->paginate(10);

        $event = Event::where('user_id', auth()->user()->id)->paginate(10);
		return view('events.index')->with('events', $event);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		return view('events.create');
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$this->validate($request, [
			'tutorName'	=> 'required',
			'subject' => 'required',
			'date'  => 'required',
            
			
		]);
		
		//Create Event Record;
		
		$event 					= new Event;
		$event->tutorName		= $request->input('tutorName');
		$event->subject			= $request->input('subject');
		$event->date			= $request->input('date');
        $event->user_id         = auth()->user()->id;
       // $event->child_id        = $event->ChildController()->id;
        $event->save();
		
		
	   return redirect('/events')->with('success', 'Lesson was successfully booked');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$event = Event::find($id);
        return view ('events.show')->with('event',$event);
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

		//check the correct user
        if(auth()->user()->id !== $event->user_id){
            return redirect('/events')->with('error', 'Unauthorised Page');
        }
        return view ('events.edit')->with('event', $event);
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
		
        $this->validate($request, [
			'tutorName'	=> 'required',
			'subject' => 'required',
			'date'  => 'required',
			
		]);
		
		//Create Event Record;
		
		$event = Event::find($id);
		$event->tutorName		= $request->input('tutorName');
		$event->subject			= $request->input('subject');
		$event->date			= $request->input('date');
		$event->child_id        = $request->child()->id;
        $event->user_id         = auth()->user()->id;
       // $event->child_id         = child()->id;
		$event->save();
		
		
	   return redirect('/events')->with('success', 'Lesson was successfully amended!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
		//check the correct user
        if(auth()->user()->id !== $event->user_id){
            return redirect('/events')->with('error', 'Unauthorised Page');
        }

        $event->delete();

        return redirect('/events')->with('success', 'Scheduled lesson has been deleted');
    }

}