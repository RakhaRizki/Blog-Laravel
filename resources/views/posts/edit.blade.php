<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingSkuy | Buat Postingan</title>

     <!-- CDN Bootstrap -->
     <link href=" {{ asset ('Bootstrap/css/bootstrap.min.css')}} " rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

     <style>

        h1{
            font-weight: bold;
        }

     </style>

</head>
<body>

<div class="container">

    <!-- Judul -->

    <h1 class="text-center my-5"> Edit Postingannya MasBro !</h1>

    <!-- Form -->

  <form method= "post" action= "{{ url("posts/{$post->slug}") }}" method="post" >
  @method('PATCH')
  @csrf 

<div class="mb-3">
  <label for="title" class="form-label">Judul</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
</div>

<div class="mb-3">
  <label for="content" class="form-label">Konten</label>
  <textarea class="form-control" id="content" rows="3" name="content" value="{{ $post->content }}" required > {{ $post->content }} </textarea> 
</div>

<!-- Button -->
<button type="submit" class="btn btn-outline-primary">simpan</button>
<a href="{{url('posts')}}" class= "btn btn-outline-success">kembali</a>

  </form>

  <form method="POST" action="{{ url("posts/$post->slug") }}">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-outline-danger my-2 ">Hapus!</button>
</form>

    <!-- CDN Bootstrap -->
    <script src="{{ asset ( '/Bootstrapjs/bootstrap.bundle.min.js' )}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>