@extends('layouts.app')

@section('title')
blog
@endsection

@section('content')

<div class="container">

    <!-- Judul -->

    <h1 class="text-center my-5">Mau Nambah Apa Nich !</h1>

    <!-- Form -->

  <form method="post" action="{{ url('posts') }}">
  @csrf 

<div class="mb-3">
  <label for="title" class="form-label">Judul</label>
  <input type="text" class="form-control" id="title" name="title" required>
</div>

<div class="mb-3">
  <label for="content" class="form-label">Konten</label>
  <textarea class="form-control" id="content" rows="3" name="content" required ></textarea> 
</div>

<!-- Button -->
<button type="submit" class="btn btn-outline-primary">simpan</button>
<a href="{{url('posts')}}" class= "btn btn-outline-danger">kembali</a>

</div>
  </form>

@endsection