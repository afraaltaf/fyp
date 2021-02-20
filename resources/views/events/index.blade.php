
@extends('layouts.app')
 

@section('content')
     <h1>Bookings</h1>
     @if(count($events) > 0)
       @foreach ($events as $event)
         <div class = "well">
           <h3><a href= "/events/{{$event->id}}">{{$event->tutorName}}</a></h3>
           <small>Booking Created On {{$event->created_at}} by {{$event->user->name}}</small>
         </div>
       @endforeach
       <hr>
       {{$events->links()}}
     @else
         <p>No Bookings Found</p>
     @endif

