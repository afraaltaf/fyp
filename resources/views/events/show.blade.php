@extends('layouts.app')

   @section('content')
   <a href="/events" class = "btn btn-default">Go Back</a>
        <h1>{{$event->doctorName}}</h1>
        <div>
             {!!$event->subject!!}
        </div>
        <div>
            {!!$event->date!!}
       </div>
       
     
        <div>Booking Created on {{$event->created_at}} for {{$event->user->name}}</div>
        <hr>
        @if(!Auth::guest())
               @if(Auth::user()->id == $event->user_id)
               <a href="/events/{{$event->id}}/edit" class = "btn btn-default">Edit</a>

               {!!Form::open(['action'=> ['\App\Http\Controllers\EventController@destroy', $event->id],'method' => 'POST', 'class' => 'pull-right'])!!}
               {{Form::hidden('_method', 'DELETE')}}
               {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
               {!!Form::close()!!}
               @endif
        @endif
   @endsection  

