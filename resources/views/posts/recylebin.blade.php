@extends('layouts.app')

@section('title')
blog
@endsection

@section('content')

<div class="container">

    <!-- Judul -->

    <h1 class="my-5 text-center">
         <span>Coding</span>Skuy <a href=" {{url('posts')}} " class="btn btn-outline-primary mx-3"> Kembali </a>
    </h1>

    <!-- Isi -->
    
    @php($number = 1)
    @foreach($posts as $p)

<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">{{ $p->title }}</h5>
        <p class="card-text">{{ $p->content }}</p>
        <p class="card-text"><small class ="class-muted"> Dibuat Pada {{ date("d M Y H:i", strtotime($p->created_at)) }}</small></p>
    </div>
</div>

    @php($number++)
    @endforeach

</div>

@endsection