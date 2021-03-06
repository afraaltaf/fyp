@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Tutor Information</h4>
                    <img  src="{{asset('images')}}/{{$user->image}}" width="100px" style="border-radius: 50%;" >
                    <br>
                   <p class="lead"> Name:{{ucfirst($user->name)}}</p>
                   <p class="lead"> Degree:{{$user->education}}</p>
                   <p class="lead"> Subject:{{$user->subject}}</p>
                </div>
                
            </div>
            
        </div>
        <div class="col-md-9">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

            @if(Session::has('errmessage'))
                <div class="alert alert-danger">
                    {{Session::get('errmessage')}}
                </div>
            @endif
            
           
            <form action="{{route('booking.lesson')}}" method="post">@csrf
            <div class="card">
                <div class="card-header lead">{{$date}}</div>
                <div class="card-body">
                    <div class="row">
                        @foreach($times as $time)
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="time" value="{{$time->time}}" >
                                <span>{{$time->time}}
                                    </span>
                            </label>
                        </div>
                        <input type="hidden" name="tutorId" value="{{$tutor_id}}">
                        <input type="hidden" name="lessonId" value
                        ="{{$time->lesson_id}}">
                        <input type="hidden" name="date" value
                        ="{{$date}}">



                        
                        
                        @endforeach
                    </div>
                </div>
               </div>
               <div class="card-footer">
                @if(Auth::check())
                <button type="submit" class="btn btn-success" style="width: 100%;">Book Lesson</button>
                @else 
                    <p>Please Register or Login to book lesson</p>
                    <a href="/register"><button class="btn btn-success">Register</button></a>
                    <a href="/login"><button class="btn btn-secondary">Login</button></a>
                @endif

                   
               </div>


           </form>

           </div>
    </div>
</div>
@endsection
