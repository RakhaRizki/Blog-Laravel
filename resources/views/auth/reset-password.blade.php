@extends('layouts.app')

@section('title', 'Reset Password')
@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">

    <div class="card">
    <div class="card-header text-center">
        Reset Password
    </div>

<div class="card-body">

 <form method="POST" action=" {{ route("password.update") }} ">
 @csrf

 <input type="hidden" name="token" value="{{ $request ->route('token') }}">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
    value= "{{ old('email', $request->email) }}" >
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>

  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Reset</button>

</form>

 </div>
    </div>

    </div>
</div>

@endsection