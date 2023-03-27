@extends('layouts.app')

<!-- title -->
@section('title')
blog
@endsection

@section('content')


    <!-- Judul -->

    <h1 class="my-5 text-center"><span>Coding</span>Skuy <a href=" {{url('posts/create')}} " class="btn btn-outline-primary mx-3"> + Tambah Post</a> 
    <a href=" {{url('posts/trash')}} " class="btn btn-outline-danger"> Ini Histori </a></h1>
    </h1>

    <p class="text-muted text-center"> Total Postingan Aktif : <span class="badge bg-success"> {{ $total_active }} </span> Total postingan non Aktif : <span class="badge bg-warning"> {{ $total_nonActive }} </span> Total postingan dihapus : <span class="badge bg-danger"> {{ $total_dihapus }} </span> </p>
    </p>

    <!-- Isi -->
    
    
    @foreach($posts as $p)

<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">{{ $p->title }}</h5>
        <p class="card-text">{{ $p->content }}</p>
        <p class="card-text"><small class ="class-muted"> Dibuat Pada {{ date("d M Y H:i", strtotime($p->created_at)) }}</small></p>
        <a  href="{{url("posts/$p->slug")}}" class="btn btn-outline-success">Selengkapnya</a>
        <a  href="{{url("posts/$p->slug/edit")}}" class="btn btn-outline-primary">Edit</a>
    </div>
</div>

    
    @endforeach

</div>

<!-- Footer

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted"> © RakhaRizki 2022 </span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
    </ul>
  </footer>
</div> -->

@endsection
