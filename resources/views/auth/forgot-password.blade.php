@extends('layouts.app')

@section('title', 'login')
@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">

    <div class="card">
    <div class="card-header text-center">
        Reset Password
    </div>

<div class="card-body">

 <form method="POST" action=" {{ route("password.email") }} ">
 @csrf

 @if (session()->has('status'))
 <div class="alert alert-success">
     {{ session()->get('status') }}
 </div>
 @endif

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif

</div>
  <button type="submit" class="btn btn-primary">Reset</button>
   </form>
   
     </div>
       </div>
         </div>
           </div>

@endsection