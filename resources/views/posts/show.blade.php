<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->title}}</title>

    <!-- Local Bootstrap -->
    <link href=" {{ asset ('Bootstrap/css/bootstrap.min.css')}} " rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Local CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">

</head>
<body>

<div class="container">
<article class="blog-post mt-5">
        <h2 class="blog-post-title mb-1"> {{$post->title}} </h2>
        <p class="blog-post-meta"> {{ date("d M Y H:i", strtotime($post->created_at)) }} </p>
        <p> {{$post->content}} </p>

        <!-- Komen -->

        <small class="text-muted">{{$total_comments}} Komentar </small>

        @foreach($comments as $comment)
        <div class="card mb-3">
                <div class="card-body">
                        <p>{{$comment->comment}}</p>
                </div>
        </div>
        @endforeach

</article>
        <a href="{{url('posts')}}" class= "btn btn-outline-danger">kembali</a>
</div>
    
<!-- Local Bootstrap -->
<script src="{{ asset ( '/Bootstrapjs/bootstrap.bundle.min.js' )}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>