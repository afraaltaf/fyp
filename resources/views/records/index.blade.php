@extends('layouts.app')
 

   @section('content')
        <h1>Child Records</h1>
        @if(count($records) > 0)
          @foreach ($records as $record)
            <div class = "well">
              <h3><a href= "/records/{{$record->id}}">{{$record->name}}</a></h3>
              <small>Record Created On {{$record->created_at}} by {{$record->user->name}}</small>
            </div>
          @endforeach
          <hr>
          {{$records->links()}}
        @else
            <p>No Child Records Found</p>
        @endif

    @endsection 
    