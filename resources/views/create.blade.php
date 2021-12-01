<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
       <h1>Blog Name</h1>
       <form action="/posts" method="POST">

           @csrf
           <div class="title">
             <h2>Title</h2>
             <input type="text" name="post[title]" placeholder="タイトル"/>

           {{ csrf_field() }}
           <div class="title">
             <h2>Title</h2>
             <input type="text" name="[title]" placeholder="タイトル"/>

           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も１日お疲れさまでした。"></textarea>
           </div>

           <input type="submit" value="store"/>

           <input type="submit" value="strore"/>

       </form>
       <div class="back">[<a href="/">back</a>]</div>
       </div>
        </div>
    </body>
</html>
