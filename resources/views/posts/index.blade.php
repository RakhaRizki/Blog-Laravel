<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingSkuy | Beranda</title>

    <!-- CDN Bootstrap -->
    <link href=" {{ asset ('Bootstrap/css/bootstrap.min.css')}} " rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<style>
    
    .body {
        padding: 6px;
        border-bottom: 2px solid grey;
    }
    span {
        color: blue;
    }

    h1 {
        font-weight: bold;
    }

</style>

<body>

<div class="container">

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

    <!-- CDN Bootstrap -->
    <script src="{{ asset ( '/Bootstrapjs/bootstrap.bundle.min.js' )}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>

</html>