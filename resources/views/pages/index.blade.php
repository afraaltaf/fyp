 @extends('layouts.app')

 @section('content')
 <div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Add Child Details</h5>
                </div>
            </div>
        </div>

</div>
</div>

<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div class="card-header"><h3></h3></div>
<div class="card-body">
<form class="forms-sample" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="exampleInputName1">Full name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword4">Date of Birth</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="education" placeholder="education">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select name="gender" class="form-control" id="exampleSelectGender">
                    <option value="">Please select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword4">Current Academic Year </label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="AcademicYear" placeholder="Current Academic Year">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword4">Name of School</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="SchoolName" placeholder="School Name">
            </div>
        </div>
    </div>

    <div class="row">
        
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="">Phone number</label>
                <input type="text" name="phone_number" class="form-control">
                
            </div>
        </div>

    </div>
    <div class="row">
    
    <div class="form-group">
        <label for="exampleTextarea1">Additional notes</label>
        <textarea class="form-control" id="exampleTextarea1" rows="4"name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
        </form>
        </div>
        </div>
        </div>
        </div>
     @endsection
    
 