<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles(){
        return response()->json(Article::all(), 200);
    }

    public function getArticle($id){
        $article = Article::findOrFail($id);
        if (is_null($article)) { return response()->json(['message' => 'Article not found'], 404); }
        return response()->json($article, 200);
    }

    public function addArticle(Request $request){
        
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'photo' => 'required'
        ]);
        
        return Article::create($request->all());
    }

    public function updateArticle(Request $request, $id){
        $article = Article::findOrFail($id);
        if (is_null($article)) { return response()->json(['message' => 'Article not found'], 404); }
        
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function deleteArticle($id){
        $article = Article::findOrFail($id);
        if (is_null($article)) { return response()->json(['message' => 'Article not found'], 404); }
        
        $article->delete();
        return response()->json(['message' => 'Article deleted'], 204);
    }
}
