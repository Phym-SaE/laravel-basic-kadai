<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel基礎</title>
    </head>

    <body>
        <h1>投稿一覧</h1>
        @foreach ($posts as $post)
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <hr />
        @endforeach
    </body>

</html>
