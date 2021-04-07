 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{auth()->user()->student_name}}</div>

                <div class="card-body">
                 
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th scope="col">Date</th>
                          <th scope="col">Tutor</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Behaviour</th>
                          <th scope="col">Grade(currently working at)</th>
                          {{-- <th scope="col">Areas to Improve</th> --}}
                          {{-- <th scope="col">procedure to use medicine</th> --}}
                          <th scope="col">Tutor Feedback</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($trackers as $tracker)
                        <tr>
                         
                          <td>{{$tracker->date}}</td>
                          <td>{{$tracker->tutor->name}}</td>
                          <td>{{$tracker->name_of_subject}}</td>
                          <td>{{$tracker->behaviour}}</td>
                          <td>{{$tracker->current_grade}}</td>
                        {{-- <td>{{$tracker->areas_to_improve}}</td>  --}}
                          {{-- <td>{{$tracker->procedure_to_use_medicine}}</td> --}}
                          <td>{{$tracker->feedback}}</td>
                        </tr>
                        @empty
                        <td>You have no updates</td>
                        @endforelse
                       
                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
