@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
           

            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>appoinment time</span>
                    
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
    </div>
</div>

<div class="container">
         @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
                
            </div>
                
        @endforeach
    
        
    <form action="{{route('appointment.store')}}" method="post">@csrf
 
    <div class="card">
        <div class="card-header">
            Choose date

        </div>
        <div class="card-body">
         <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Choose AM time
           <span style="margin-left: 700px">Check/Uncheck
               <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="checkbox" name="time[]"  value="9am-9.55am">9am-9.55am</td>
                <tr>
                  <th scope="row">2</th>
                  <td><input type="checkbox" name="time[]"  value="10am-10.55am">10am-10.55am</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td><input type="checkbox" name="time[]"  value="11am-11.55am">11am-11.55am</td>
                </tr>
            
            
              </tbody>
            </table>
        </div>
    </div>

        <div class="card">
        <div class="card-header">
            Choose PM time
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">4</th>
                  <td><input type="checkbox" name="time[]"  value="12pm-12.55pm">12pm-12.55pm</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td><input type="checkbox" name="time[]"  value="13.00pm-13.55pm">13.00pm-13.55pm</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td><input type="checkbox" name="time[]"  value="14.00pm-14.55pm">14.00pm-14.55pm</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td><input type="checkbox" name="time[]"  value="15.00pm-15.55pm">15.00pm-15.55pm</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td><input type="checkbox" name="time[]"  value="16.00pm-16.55pm">16.00pm-16.55pm</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td><input type="checkbox" name="time[]"  value="17.00pm-17.00pm">17.00pm-17.55pm</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td><input type="checkbox" name="time[]"  value="18.00pm-18.55pm">18.00pm-18.55pm</td>
                </tr>

                <tr>
                  <th scope="row">11</th>
                  <td><input type="checkbox" name="time[]"  value="19.00pm-19.55pm">19.00pm-19.55pm</td>
                </tr>
                <tr>
                 
                
            
            
            </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

</div>

<style type="text/css">
    input[type="checkbox"]{
        zoom:1.1;
   
    }
    body{
        font-size: 18px;
    }
</style>



@endsection