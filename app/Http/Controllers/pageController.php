<?php

namespace App\Http\Controllers;

use App\Adoption;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Carbon\Carbon;


//use App\petclub;

class pageController extends Controller
{
    public function index() {
        
        $current = Carbon::now();
        $news = News::orderBy('date', $current)->get();
        $adoptions = Adoption::all();

        
        return view('index')
        ->with('news', $news)
        ->with('adoptions', $adoptions);
    }

    public function about() {
        return view('about');
    }

   

}
