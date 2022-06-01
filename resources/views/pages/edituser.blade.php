@extends('layouts.template')
@section('content')

    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit an user</h4>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                  <form action="{{route('updateuser', $user->id)}}" method="post"  class="forms-sample">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                        
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" >
                        
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="is_admin" class="form-control">
                            <option value="">Select</option>
                            <option value="1" @if($user->is_admin == 1) selected @endif>Admin</option>
                            <option value="0" @if($user->is_admin == 0) selected @endif>User</option>
                        </select>

                        @if($errors->has('is_admin'))
                            <span class="text-danger">{{$errors->first('is_admin')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" name="status" class="form-control" value="{{$user->status}}">

                        @if($errors->has('status'))
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    </div>    

@endsection 