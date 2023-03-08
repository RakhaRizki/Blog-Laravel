<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Rakha</title>

    <!-- CDN Bootstrap -->
    <link href=" {{ asset ('Bootstrap/css/bootstrap.min.css')}} " rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<style>
    .body {
        padding: 6px;
        border-bottom: 2px solid grey;
    }
    span {
        color: red;
    }

    h1 {
        font-weight: bold;
    }

</style>

<body>

<div class="container">

    <!-- Judul -->

    <h1 class="my-5 text-center">CodingSkuy <a href=" {{url('posts/create')}} " class="btn btn-outline-warning mx-3"> + Tambah Post</a></h1>

    <!-- Isi -->
    
    @php($number = 1)

    @foreach($posts as $p)
    @php($p = explode(",", $p))

<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">{{ $p[1] }}</h5>
        <p class="card-text">{{ $p[2] }}</p>
        <p class="card-text"><small class ="class-muted"> Dibuat Pada {{ date("d M Y H:i", strtotime($p[3])) }}</small></p>
        <a  href="{{url("posts/$p[0]")}}" class="btn btn-outline-success">Selengkapnya</a>
    </div>
</div>

    @php($number++)
    @endforeach

</div>

    <!-- CDN Bootstrap -->
    <script src="{{ asset ( '/Bootstrapjs/bootstrap.bundle.min.js' )}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>

</html>