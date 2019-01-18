@extends('admin.layout')
@section('title', 'Admin Dashdoard')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <a class="btn btn-success btn-block" href="{{url('admin/user/new')}}" role="button">New User</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{$user->user_id}}</td>
                                <td>{{$user->type == 1 ? 'Client': 'Manager'}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->user}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_by}}</td>
                                <td>{{$user->updated_by}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ url('admin/user/edit/')}}/{{$user->user_id}}" role="button">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection