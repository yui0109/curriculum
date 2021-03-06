@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        {{Auth::user()->name}}
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>

                   <h2 class='title'>
                       <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                       
                   </h2>
                   <p><a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>

                   

                   <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
            
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div>
            @foreach($questions as $question)
                <div>
                    <a href="https://teratail.com/questions/{{ $question['id'] }}">
                     {{ $question['title'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection