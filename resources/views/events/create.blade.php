@extends('layouts.app')
 

   @section('content')
        <h1>Make a booking</h1>
            {!! Form::open(['action' => '\App\Http\Controllers\EventController@store', 'method' => 'POST']) !!}
            <div class = "form-group">
                {{Form::label('tutorName', 'Tutor') }}
                <select name="tutorName" >
                    <option value="Miss A">Miss A</option>
                    <option value="Mr B">Mr B</option>
                    <option value="Mr C">Mr C</option>
                    <option value="Ms D">Ms D</option>
                    <option value="Miss E">Miss E</option>
                    <option value="Mrs F">Mrs F</option>
                    <option value="Mrs G">Mrs G</option>
                    <option value="Mrs H">Mrs H</option>
                  </select>
            </div>
            <div class = "form-group">
                {{Form::label('subject', 'Subject') }}
                <select name="subject">
                    <option value="Maths">Maths</option>
                    <option value="Englinsh Language">English Literature</option>
                    <option value="English Literature">English Language</option>
                    <option value="Biology">Biology</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option>
                  </select>
            </div>
            <div class = "form-group">
                {{Form::label('date', 'Date') }}
                <input type="date" id="date" name="date">
            </div>
            
                
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        
    @endsection

    




