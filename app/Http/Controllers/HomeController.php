<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $slider = Article::where('type', 'slider')->where('state', 1)->get();
        $article = Article::where('type', 'article')->where('state', 1)->get();
        $service = Article::where('type', 'service')->where('state', 1)->get();
        $work = Article::where('type', 'work')->where('state', 1)->get();
        $news = Article::where('type', 'news')->where('state', 1)->get();
        $social = Article::where('type', 'social')->where('state', 1)->get();
        return view('website.pages.home')->with(['slider' => $slider, 'article' => $article, 'service' => $service, 'work' => $work, 'news' => $news, 'social' => $social]);
    }
    public function about()
    {
        $article = Article::where('type', 'article')->where('state', 1)->get();
        $service = Article::where('type', 'service')->where('state', 1)->get();
        $about = Article::where('type', 'about')->where('state', 1)->first();
        $work = Article::where('type', 'work')->where('state', 1)->get();
        $social = Article::where('type', 'social')->where('state', 1)->get();
        return view('website.pages.about')->with(['service' => $service, 'about' => $about, 'article' => $article, 'social' => $social, 'work' => $work]);
    }
    public function contact()
    {
        return view('website.pages.contact');
    }
    public function works()
    {
        $work = Article::where('type', 'work')->where('state', 1)->get();
        $article = Article::where('type', 'article')->where('state', 1)->get();
        return view('website.pages.works')->with(['work' => $work, 'article' => $article]);
    }
    public function work($id)
    {
        $work = Article::where('state', 1)->where('type', 'work')->findOrFail($id);
        $next = Article::where('state', 1)->where('type', 'work')->where('id', '>', $work->id)->first();

        return view('website.pages.work')->with(['data' => $work, 'next' => $next]);
    }
    public function newses()
    {
        $news = Article::where('type', 'news')->where('state', 1)->get();
        return view('website.pages.newses')->with(['news' => $news]);
    }
    public function news($id)
    {
        $news = Article::where('state', 1)->where('type', 'news')->findOrFail($id);
        $next = Article::where('state', 1)->where('type', 'news')->where('id', '>', $news->id)->first();
        return view('website.pages.news')->with(['news' => $news,'next'=>$next]);
    }
}
