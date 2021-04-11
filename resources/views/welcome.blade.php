@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <img src="/frontPage/Logo.jpg" class="img-fluid" style="">
            <img src="" class="img-fluid" style="">
        </div>
        <div class="welcome-text col-md-6 ">
            <h2>Tutor Scheduling System</h2>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <div class="mt-5">
               {{-- <a href="{{url('/register')}}"> <button class="btn btn-success">Register</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a> --}}
            </div>
        </div>
    </div>
    
    <div class= "card-deck">
      
      <div class="card text-center border-color mb-3" style="width: 18rem; height: 20rem;">
        <br>
        <i class="far fa-calendar-alt fa-10x"></i>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div> 
    
      <div class="card text-center border-color mb-3" style="width: 18rem; height: 20rem;">
      <br>
      <i class="fas fa-chalkboard-teacher fa-10x" ></i>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>    
    
    <div class="card text-center border-color mb-3" style="width: 18rem; height: 20rem;">
      <br>
      <i class="fas fa-chart-line fa-10x"></i>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div> 
  </div>
    <br>
    <br>
  <!--date picker component-->
<find-tutor></find-tutor>
</div>
@endsection
