
@extends('layouts.app')
 

@section('content')
     <h1>Bookings</h1>
     @if(count($events) > 0)
       @foreach ($events as $event)
         <div class = "well">
           <h3><a href= "/events/{{$event->id}}">{{$event->doctorName}}</a></h3>
          
         </div>
       @endforeach
       <hr>
       {{$events->links()}}
     @else
         <p>No Bookings Found</p>
     @endif

