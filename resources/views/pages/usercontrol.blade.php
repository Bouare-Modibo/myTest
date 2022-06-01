@extends('layouts.template')
@section('content')

    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Users</h3>
                        <p class="card-description">
                            User management <code>here you can edit, view and delete user</code>
                        </p>
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @forelse($users as $u)
                                        <tr>
                                            <td><a href="{{route('singleuser', $u->id)}}">{!! $u->name !!} </a></td>
                                            <td><a href="{{route('singleuser', $u->id)}}">{!! $u->email !!}</a></td>
                                            <td><label class="badge badge-info">{!! $u->is_admin == 1 ? 'Admin' : 'User' !!}</label></td>
                                            <td>{!! $u->status !!}</td>
                                            <td><a href="{{route('edit', $u->id)}}"><button class="btn btn-success btn-sm">Edit</button></a></td>
                                            <td>
                                                <form action="{{route('deleteuser', $u->id)}}" method="post">
                                                {{ csrf_field() }}
                                                        <button  class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                    @empty
                                        <td>Any User in the DataBase</td>
                                    @endforelse 
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>    

@endsection 