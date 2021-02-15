@extends('layouts.app')
 

   @section('content')
        <h1>Create Child Record</h1>
            {!! Form::open(['action' => '\App\Http\Controllers\ChildController@store', 'method' => 'POST']) !!}
            <div class = "form-group">
                {{Form::label('name', 'Full Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=> 'Full Name' ])}}

            </div>
            <div class = "form-group">
                {{Form::label('dateOfBirth', 'Date of Birth')}}
                {{Form::text('dateOfBirth', '', [ 'class' => 'form-control', 'placeholder'=> 'DOB' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', '', [ 'class' => 'form-control', 'placeholder'=> 'gender' ])}}
            </div>
            <div class = "form-group">
                {{Form::label('schoolYear', 'Current Academic Year')}}
                {{Form::text('schoolYear', '', [ 'class' => 'form-control', 'placeholder'=> 'school year' ])}}
            </div>
            <div class = "form-group">
                <div class = "form-group">
                    {{Form::label('nameOfSchool', 'Name of school')}}
                    {{Form::text('nameOfSchool', '', [ 'class' => 'form-control', 'placeholder'=> 'name of school' ])}}
                </div>
                <div class = "form-group">
                
                {{Form::label('additionalNotes', 'Additional Notes')}}
                {{Form::textarea('additionalNotes', '', [ 'class' => 'form-control', 'placeholder'=> '...' ])}}
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

        
    @endsection

    