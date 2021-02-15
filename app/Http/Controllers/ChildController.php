<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $record = Child::orderBy('created_at')->paginate(10);
        return view('records.index')->with('records', $record);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
            'schoolYear' => 'required',
            'nameOfSchool' => 'required',
            'additionalNotes' => 'required'
        ]);

        //Create Child record

        $record = new Child;
        $record->name = $request->input('name');
        $record->dateOfBirth =  $request->input('dateOfBirth');
        $record->gender =  $request->input('gender');
        $record->schoolYear =  $request->input('schoolYear');
        $record->nameOfSchool =  $request->input('nameOfSchool');
        $record->additionalNotes =  $request->input('additionalNotes');
        $record->user_id = auth()->user()->id;
        $record->save();

        return redirect('/records')->with('success', 'Child Record Created');

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
        $record = Child::find($id);
        return view ('records.show')->with('record',$record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Child::find($id);

        //check the correct user
        if(auth()->user()->id !== $record->user_id){
            return redirect('/records')->with('error', 'Unauthorised Page');
        }
        return view ('records.edit')->with('record', $record);
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
       $this->validate($request, [
        'name' => 'required',
        'dateOfBirth' => 'required',
        'gender' => 'required',
        'schoolYear' => 'required',
        'nameOfSchool' => 'required',
        'additionalNotes' => 'required'
    ]);

    //Create Child record

    $record = new Child;
    $record->name = $request->input('name');
    $record->dateOfBirth =  $request->input('dateOfBirth');
    $record->gender =  $request->input('gender');
    $record->currentAcademicYear =  $request->input('schoolYear');
    $record->nameOfSchool =  $request->input('nameOfSchool');
    $record->additionalNotes =  $request->input('additionalNotes');
    $record->user_id = auth()->user()->id;
    $record->save();

    return redirect('/records')->with('success', 'Child Record Created');

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

        $post = Post::find($id);

        //check the correct user
        if(auth()->user()->id !== $record->user_id){
            return redirect('/records')->with('error', 'Unauthorised Page');
        }

        $record->delete();

        return redirect('/records')->with('success', 'Child Record Removed');
    }
}
