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
                          <th scope="col">Doctor</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Behaviour</th>
                          <th scope="col">Areas to Improve</th>
                          <th scope="col">procedure to use medicine</th>
                          <th scope="col">Doctor Feedback</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($prescriptions as $prescription)
                        <tr>
                         
                          <td>{{$prescription->date}}</td>
                          <td>{{$prescription->doctor->name}}</td>
                          <td>{{$prescription->name_of_subject}}</td>
                          <td>{{$prescription->behaviour}}</td>
                          <td>{{$prescription->areas_to_improve}}</td>
                        //  <td>{{$prescription->procedure_to_use_medicine}}</td>
                          <td>{{$prescription->feedback}}</td>
                        </tr>
                        @empty
                        <td>You have no prescriptions</td>
                        @endforelse
                       
                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
