<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;

class News_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::orderBy('created_at', 'desc');
        return view('admin.news.create')
            ->with('news', $news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
       [
        'title' => ['required'],
        'date' => ['required'],
        'image' => ['required'],
        'exert' => ['required'],
        'content' => ['required'],

       ]);
       
        $news = new News();

        $news->title = $request->get('title');
        $news->date = $request->get('date');
        $news->image = $request->get('image');
        $news->exert = $request->get('exert');
        $news->content = $request->get('content');
        $news->save();

            return redirect('/admin/news')->with('success', "Updated");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit')
            ->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, 
       [
        'title' => ['required'],
        'date' => ['required'],
        'image' => ['required'],
        'exert' => ['required'],
        'content' => ['required'],

       ]);
       
        $news = News::findOrFail($id);

        $news->title = $request->get('title');
        $news->date = $request->get('date');
        $news->image = $request->get('image');
        $news->exert = $request->get('exert');
        $news->content = $request->get('content');
        $news->save();

            return redirect('/admin/news')->with('success', "Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect('/admin/news')->with('success', 'Deleted');
    }
}
