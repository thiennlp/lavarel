@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">
	        <div class="card">
	            <div class="card-header">New User</div>

	            <div class="card-body">
	            	<form method="POST" action="{{ url('/user/new') }}">
	                    @csrf
	                    <div class="form-group row">
	                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

	                        <div class="col-md-6">
	                            <select class="custom-select{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" name="type" required>
	                            	<option value="">Please choose</option>
							        <option value="1"{{ old('name')  == 1 ? ' selected' : "" }}>Client</option>
							        <option value="2"{{ old('name')  == 2 ? ' selected' : "" }}>Manager</option>
							    </select>

	                            @if ($errors->has('type'))
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $errors->first('type') }}</strong>
	                                </span>
	                            @endif
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

	                        <div class="col-md-6">
	                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

	                            @if ($errors->has('name'))
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $errors->first('name') }}</strong>
	                                </span>
	                            @endif
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

	                        <div class="col-md-6">
	                            <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

	                            @if ($errors->has('username'))
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $errors->first('username') }}</strong>
	                                </span>
	                            @endif
	                        </div>
	                    </div>
	                    
	                    <div class="form-group row">
	                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

	                        <div class="col-md-6">
	                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

	                            @if ($errors->has('email'))
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $errors->first('email') }}</strong>
	                                </span>
	                            @endif
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

	                        <div class="col-md-6">
	                            <select class="custom-select{{ $errors->has('type') ? ' is-invalid' : '' }}" id="status" name="status" required>
	                            	<option value="">Please choose</option>
							        <option value="1"{{ old('status') == 1 ? " selected" : ""}}>Active</option>
							        <option value="0"{{ old('status') == 0 ? " selected" : ""}}>Deactive</option>
							    </select>

	                            @if ($errors->has('status'))
	                                <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $errors->first('status') }}</strong>
	                                </span>
	                            @endif
	                        </div>
	                    </div>

	                    <div class="form-group row mb-0">
	                        <div class="col-md-6 offset-md-4">
	                            <button type="submit" class="btn btn-primary">
	                                {{ __('Save') }}
	                            </button>
	                        </div>
	                    </div>
	                </form>
	            </div>
            </div>
        </div>
    </div>
</div>
@endsection
