<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細 </h1>

    <p>タイトル：{{ $article->title }}</p>

    <p>{{ $article->body }}</p>

    <a href="/articles/"><button>一覧へ戻る</button></a><br>

    <a href="/articles/{{ $article->id}}/edit"> <input type="submit" value="編集する"></a>
    
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('DELETE')
        <a><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></a>
    </form>
</body>
</html>