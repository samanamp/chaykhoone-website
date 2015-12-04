<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class pagesController extends Controller
{
    public function home(){

//        $article = new Article;
//        $article->title = "یه شیر خوب و غلیط";
//        $article->subtitle = "دارم عشق میکنم با زندگی";
//        $article->body = "با یه سری کار خوب میشه با زندگی کلی حال کرد";
//        $article->thumb_image = 'img/contact-bg.jpg';
//        $article->save();
        $articles = Article::all();
//        return $articles;
        return view('pages.home', compact('articles'));
    }

    public function showArticle($id){
        $article = Article::findOrFail($id);
        return view('pages.post', compact('article'));
    }
}
