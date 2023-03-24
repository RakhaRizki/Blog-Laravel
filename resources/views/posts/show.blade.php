@extends('layouts.app')

@section('title')
blog
@endsection

@section('content')


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

        <!-- End Komen -->

</article>
        <a href="{{url('posts')}}" class= "btn btn-outline-danger">kembali</a>
</div>
    
@endsection