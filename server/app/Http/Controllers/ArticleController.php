<?php

namespace App\Http\Controllers;

// Articleクラスを読み込む
use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{


    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }
    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();
        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = Article::find($id);

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        // 保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
