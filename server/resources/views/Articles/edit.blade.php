<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>投稿</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PUT')
        {{-- <input type="hidden" name="id" value="{{ $article->'id' }}"> --}}
        <p>
            論文タイトル：<br>
            <input type="string" name="title" value="{{ old('title') }}">
        </p>
        <p>
            本文：<br>
            <textarea type="text" name="body" value="{{ old('body') }}"></textarea>
        </p>


        <input type="submit" value="更新">
    </form>
</body>
</html>