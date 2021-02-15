@extends('layouts.app')

   @section('content')
   <a href="/records" class = "btn btn-default">Go Back</a>
        <h1>{{$record->name}}</h1>
        <div>
             {!!$record->dateOfBirth!!}
        </div>
        <div>
            {!!$record->gender!!}
       </div>
       <div>
        {!!$record->currentAcademicYear!!}
       </div>
       <div>
        {!!$record->nameOfSchool!!}
       </div>
       <div>
        {!!$record->AdditionalNotes!!}
       </div>
        <small>Record Created on {{$record->created_at}} by {{$record->user->name}}</small>
        <hr>
        @if(!Auth::guest())
               @if(Auth::user()->id == $record->user_id)
               <a href="/records/{{$record->id}}/edit" class = "btn btn-default">Edit</a>

               {!!Form::open(['action'=> ['\App\Http\Controllers\ChildController@destroy', $record->id],'method' => 'POST', 'class' => 'pull-right'])!!}
               {{Form::hidden('_method', 'DELETE')}}
               {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
               {!!Form::close()!!}
               @endif
        @endif
   @endsection  
