<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adoption;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;


class Adoptions_Controller extends Controller
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
        $adoption = Adoption::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.animals.index')
            ->with('adoptions', $adoption);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animals.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ //$this->validate for version 5.2
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['required'],            
           ]);
    
           /* Este é o codigo para o upload na storage/app
           
            $file = $request->file('image')->store('images');
            $request->file('image')->store('images');
            */


            $adoptions = new Adoption();
            $adoptions->name = $request->get('name');
            $adoptions->image = $request->get('image');
            $adoptions->description = $request->get('description');
            $adoptions->save();

            return redirect('/admin/adoptions')->with('success', "Created");
            
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
        $adoptions = Adoption::findOrFail($id);
        return view('admin.animals.edit')
        ->with('adoptions', $adoptions);
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
        $this->validate($request, [ //$this->validate for version 5.2
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            
           ]);
                     
            $adoptions = Adoption::findOrFail($id);
            $adoptions->name = $request->get('name');          
            $adoptions->image = $request->get('image');
            $adoptions->description = $request->get('description');
            $adoptions->save();

            return redirect('/admin/adoptions')->with('success', "Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adoptions = Adoption::findOrFail($id);
        $adoptions->delete();

        return redirect('/admin/adoptions')->with('success', 'Deleted');
    }
}
