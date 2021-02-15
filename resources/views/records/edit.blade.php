@extends('layouts.app')
 

   @section('content')
        <h1>Create Child Record</h1>
            {!! Form::open(['action' => ['\App\Http\Controllers\ChildController@update', $record->id], 'method' => 'POST']) !!}
            <div class = "form-group">
                {{Form::label('name', 'Full Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=> 'Full Name' ])}}

            </div>
            <div class = "form-group">
                {{Form::label('date of birth', 'Date of Birth')}}
                {{Form::text('date of birth', '', [ 'class' => 'form-control', 'placeholder'=> 'DOB' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', '', [ 'class' => 'form-control', 'placeholder'=> 'gender' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('current academic year', 'Current Academic Year')}}
                {{Form::text('gender', '', [ 'class' => 'form-control', 'placeholder'=> 'current academic year' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('current academic year', 'Current Academic Year')}}
                {{Form::text('current academic year', '', [ 'class' => 'form-control', 'placeholder'=> 'current academic year' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('additional notes', 'Additional Notes')}}
                {{Form::textarea('additional notes', '', [ 'class' => 'form-control', 'placeholder'=> '...' ])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

        
    @endsection