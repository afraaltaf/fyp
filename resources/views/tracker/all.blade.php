@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >
       
                     Lesson ({{$parents->count()}})
                 </div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Date</th>
                          <th scope="col">User</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Gender</th>

                          <th scope="col">Time</th>
                          <th scope="col">Tutor</th>
                          <th scope="col">Status</th>
                          <th scope="col">Tracker</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($parents as $key=>$parent)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$parent->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>
                                             
</td>
                          <td>{{$parent->user->name}}</td>
                          <td>{{$parent->user->email}}</td>
                          <td>{{$parent->user->phone_number}}</td>
                          <td>{{$parent->user->gender}}</td>
                          <td>{{$parent->time}}</td>
                          <td>{{$parent->tutor->name}}</td>
                          <td>
                            @if($parent->status==1)
                             checked
                             @endif
                          </td>
                          <td>
                              <!-- Button trigger modal -->
              
                   <a href="{{route('tracker.show',[$parent->user_id,$parent->date])}}" class="btn btn-secondary">View Tracker</a>
          

                               
                          </td>
                        </tr>
                        @empty
                        <td>There are no lessons!</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
