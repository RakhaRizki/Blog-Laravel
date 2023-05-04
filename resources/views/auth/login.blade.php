@extends('layouts.app')

@section('title', 'login')
@section('content')

  <div class="row">
        @if (session()->has('logout'))
            <div class="alert alert-danger">
                <i class="fa-solid fa-right-from-bracket"></i>
                <b>{{ session()->get('logout') }}</b> Anda Berhasil Logout, Silahkan Login Kembali
            </div>
        @endif
        @if (session()->has('login_forbidden'))
            <div class="alert alert-danger">
                <i class="fa-solid fa-right-from-bracket"></i>
                <b>{{ session()->get('login_forbidden') }} </b>Anda Belum Login, Silahkan Login Terlebih Dahulu
            </div>
        @endif
        <div class="col-md-4 mx-auto">

            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    email atau password salah
                </div>
            @endif

            <div class="card">
                <div class="card-header text-center fw-bold">
                    Login
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif



                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="{{ route('password.request') }}" class="btn btn-link">
                              Forgot Your Password?
                          </a>
                        </div>

                        

                    </form>

                </div>
            </div>


        </div>
    </div>


@endsection