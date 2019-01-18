
@extends('admin.layout')

@section('title', 'Admin Dashdoard')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#addNewUser">New User
                    <i class="mdi mdi-plus"></i>
                </button>
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
                                <!--<th>#</th>-->
                                <th>Type</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>User</th>
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
                                <!--<td class="font-weight-medium">{{$key + 1}}</td>-->
                                <td>{{$user->type == 1 ? 'Client': 'Manager'}}</td>
                                <td>{{$user->user_id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->user}}</td>
                                <td>{{$user->created_by}}</td>
                                <td>{{$user->updated_by}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn2 btn-light" data-toggle="dropdown">
                                            <i class="icon icon-edit icon-white"></i>
                                            <span class="glyphicon glyphicon-option-vertical">...</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Reset Password</a>
                                        </div>
                                    </div>
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

@section('modal')
<!--modal add new-->
<div class="modal" id="addNewUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('admin/user/new') }}" method="POST" role="form">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {{ csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user" id="user" placeholder="User">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection