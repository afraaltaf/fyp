@extends('layouts.app')
 

   @section('content')
        <h1>Make a booking</h1>
            {!! Form::open(['action' => ['\App\Http\Controllers\EventController@update', $event->id], 'method' => 'POST']) !!}
            <div class = "form-group">
                {{Form::label('tutorName', 'Tutor') }}
                <select name="tutorName" id="">
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
                <select name="subject" id="">
                    <option value="Maths">Maths</option>
                    <option value="English Language">English Literature</option>
                    <option value="English Literature">English Language</option>
                    <option value="Biology">Biology</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option>
                  </select>
            </div>
            <div class = "form-group">
                {{Form::label('date', 'Date') }}
                {{Form::label('date', 'Date') }}
                <input type="date" id="date" name="date">
            </div>
            <div class = "form-group">
                {{Form::label('time', 'Time')}}
                {{Form::text('time', '', [ 'class' => 'form-control', 'placeholder'=> 'time' ])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    @endsection

    





