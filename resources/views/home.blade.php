@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">


                  @foreach($users as $user)
                      <div class="card-header">{{$user->name}}</div>
                            <div class="card-body">
                              {{$user->role->title}}
                              @can('can-act')
                                <button class="btn btn-danger">Delete</button>
                              @endcan
                            </div>
                  @endforeach

                  @can('can-act')
                    <a class="btn btn-primary" href="superadmin/create-employee">Create User</a>
                  @endcan
          </div>
      </div>
  </div>
@endsection
