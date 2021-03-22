 @extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >
       
                    
                </div>

                <div class="card-body">
                    <p>Date:{{$prescription->date}}</p>
                    <p>Parent:{{$prescription->user->name}}</p>
                    <p>Tutor:{{$prescription->tutor->name}}</p>
                    <p>Subject:{{$prescription->name_of_subject}}</p>
                    <p>Behaviour:{{$prescription->behaviour}}</p>
                    <p>Grade (working at):{{$prescription->current_grade}}</p>
                    {{-- <p>Areas to Improve:{{$prescription->areas_to_improve}}</p> --}}
                    <p>Tutor Feedback:{{$prescription->feedback}}</p>
                    <p>Tutor signature:{{$prescription->signature}}</p>

                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
