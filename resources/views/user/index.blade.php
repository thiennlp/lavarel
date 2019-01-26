@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">User</div>

            <div class="card-body">
                <div class="row justify-content-start mb-3 ml-2">
                    <a class="btn btn-info btn-sm" href="{{ url('/user/new') }}" role=button>New User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Updated By</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['username'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['type'] == 1 ? 'Client' : 'Manager' }}</td>
                                <td>{{ $user['updated_by'] }}</td>
                                <td>{{ $user['created_by'] }}</td>
                                <td>{{ $user['updated_at'] }}</td>
                                <td>{{ $user['created_at'] }}</td>
                                <td>{{ $user['status'] == 1 ? 'Active' : 'Deactive' }}</td>
                                <td class="column-verticallineMiddle form-inline" style="vertical-align:middle;">
                                    <div class="d-inline-block">
                                        <a class="btn btn-info btn-sm btn-block" href="{{ url('/user/edit') . '/' . $user['id'] }}" role="button">Edit</a>
                                        <a class="btn btn-danger btn-sm btn-block" role="button">Delete</a>
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
