@extends('admin.layout')
@section('title', 'Create new User')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New User</h4>
                <form action="{{ url('admin/user/new') }}" method="POST" role="form">
                    {{ csrf_field()}}
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-control {{ $errors->has('type') ? 'is-invalid' : ''}}" name="type" value="{{ old('type') }}" id="type">
                                <option value="">Choose...</option>
                                <option value="1" {{old('type') == 1 ? 'selected' : ''}}>Client</option>
                                <option value="2" {{old('type') == 2 ? 'selected' : ''}}>Manage</option>
                            </select>
                            <div class="invalid-feedback">{{$errors->first('type')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
                            <div class="invalid-feedback">{{$errors->first('name')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control {{ $errors->has('user') ? 'is-invalid' : ''}}" name="user" value="{{ old('user') }}" id="user" placeholder="User">
                            <div class="invalid-feedback">{{$errors->first('user')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" value="{{ old('password') }}" id="password" placeholder="Password">
                            <div class="invalid-feedback">{{$errors->first('password')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ url('admin/user') }}" role="button">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection