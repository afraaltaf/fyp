@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
    <div class="row ">
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    <p>Name: {{auth()->user()->name}}</p>
                    <p>Email: {{auth()->user()->email}}</p>
                    <p>Phone Number: {{auth()->user()->phone_number}}</p>
                    <p>Gender: {{auth()->user()->gender}}</p>
                    <p>Student's Name: {{auth()->user()->student_name}}</p>
                    <p>Current Academic Year: {{auth()->user()->current_academic_year}}</p>
                    <p>Relationship to Student: {{auth()->user()->relationship_to_student}}</p>
            

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form action="{{route('profile.store')}}" method="post">@csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{auth()->user()->name}}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
        
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}">    
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">select gender</option>
                                <option value="male" @if(auth()->user()->gender==='male')selected @endif >Male</option>
                                <option value="female" @if(auth()->user()->gender==='female')selected @endif>Female</option>
                            </select>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        <div class="form-group">
                                    <label>Student's Name</label>
                                    <input type= "text" name="student_name" class="form-control" value = {{auth()->user()->student_name}}> 
                        </div> 
                        
                        <div class="form-group">
                                    <label>Current Academic Year</label>
                                    <input type= "number" name="current_academic_year" class="form-control" value = {{auth()->user()->current_academic_year}}>      
                        </div>
                        <div class="form-group">
                                    <label>Relationship to Student</label>
                                    <input type= "text" name="relationship_to_student" class="form-control" value = {{auth()->user()->relationship_to_student}}>      
                        </div> 



                        <div class="form-group">
                            
                            <button class="btn btn-primary" type="submit">Update</button>
                            
                        </div>
                            
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Update Image</div>
                <form action="{{route('profile.pic')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    @if(!auth()->user()->image)
                    <img src="/images/3Dz1og01c2vXjbjmfTskpLqdVGEB2Qmpg1DLROiR.png" width="120">
                    @else 
                     <img src="/profile/{{auth()->user()->image}}" width="120">
                    @endif
                    <br>
                    <input type="file" name="file" class="form-control" required="">
                    <br>
                     @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
@endsection
