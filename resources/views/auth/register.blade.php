@extends('layouts.app')

@section('title', 'login')
@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">

    <div class="card">
    <div class="card-header text-center">
        Register
    </div>

<div class="card-body">

 <form method="POST" action=" {{ route("register") }} ">
 @csrf

 @if (session()->has('error_message'))
 <div class="alert alert-danger">
     {{ session()->get('error_message') }}
 </div>
 @endif

 <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" > 
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors ->first('name') }}</span>
    @endif
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
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

  <button type="submit" class="btn btn-primary">Register</button>

</form>

 </div>
    </div>

    </div>
</div>

@endsection