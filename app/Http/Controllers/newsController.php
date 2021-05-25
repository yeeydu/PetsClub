<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;

class newsController extends Controller
{
    public function news() {

        
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news')
        ->with('news', $news);
    }

    public function show($id) {

        //$news = News::all();
        $news = News::find($id);
        return view('news_details')
        ->with('news', $news);
    }

}