@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <img src="/frontPage/Logo.jpg" class="img-fluid" style="">
            <img src="" class="img-fluid" style="">
        </div>
        <div class="col-md-6">
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
    <br>
    <br>
    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        

        <div class="carousel-inner">
          <div class="carousel-item active ">
            <div class = "icon">
            <i class="fas fa-chalkboard-teacher fa-10x" ></i>
            </div>
            <br>
            <p class="icon-text" >Select from our range of qualified tutors</p> 
          </div>

          <div class="carousel-item">
            <div class = "icon">
                <i class="far fa-calendar-alt fa-10x"></i>
                </div>
                <br>
                <p class="icon-text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptates porro provident deleniti voluptate, non velit. Quibusdam, ratione ea doloremque fugit nemo asperiores facere beatae 
                    nihil delectus, exercitationem, facilis explicabo!</p> 
              </div>
            

            <div class="carousel-item">
                <div class = "icon">
                    <i class="fas fa-chart-line fa-10x"></i>
                    </div>
                    <br>
                    <p class="icon-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptates porro provident deleniti voluptate, non velit. Quibusdam, ratione ea doloremque fugit nemo asperiores facere beatae 
                        nihil delectus, exercitationem, facilis explicabo!</p> 
                  </div>
                
    

          

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <br>
    <br>
  <!--date picker component-->
 <find-tutor></find-tutor>
</div>
@endsection
