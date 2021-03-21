@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Your appointments({{$appointments->count()}})</div>
b
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Time</th>
                          <th scope="col">Date for</th>
                          <th scope="col">Created date</th>
                          <th scope="col">Status</th>
                          <th scope="col">Reschedule</th>
                          <th scope="col">Cancel</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($appointments as $key=>$appointment)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$appointment->doctor->name}}</td>
                          <td>{{$appointment->time}}</td>
                          <td>{{$appointment->date}}</td>
                          <td>{{$appointment->created_at}}</td>
                          <td>
                              @if($appointment->status==0)
                              <button class="btn btn-primary">Not visited</button>
                              @else 
                              <button class="btn btn-success"> Checked</button>
                              @endif
                          </td>
                            <td>
                            @if(!Auth::guest())
                              @if(Auth::user()->id == $appointment->user_id)
                              <a href="/booking/edit" class = "btn btn-default">Edit</a>
                            @endif
                            @endif
                          </td>
                          <td>
                            <a type="button" class="btn btn-danger"
                               href="{{ route('destroy', $appointment->id) }}">Delete</a>
                          </td>
                        </tr>
                        @empty

                        <td>You have no appointments</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
