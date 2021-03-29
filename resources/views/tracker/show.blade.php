 @extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >
       
                    
                </div>

                <div class="card-body">
                    <p>Date:{{$tracker->date}}</p>
                    <p>Parent:{{$tracker->user->name}}</p>
                    <p>Tutor:{{$tracker->tutor->name}}</p>
                    <p>Subject:{{$tracker->name_of_subject}}</p>
                    <p>Behaviour:{{$tracker->behaviour}}</p>
                    <p>Grade (working at):{{$tracker->current_grade}}</p>
                    {{-- <p>Areas to Improve:{{$tracker->areas_to_improve}}</p> --}}
                    <p>Tutor Feedback:{{$tracker->feedback}}</p>
                    <p>Tutor signature:{{$tracker->signature}}</p>

                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
