<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

use App\Http\Requests;

class Contact_Controller extends Controller
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
        $contacts = Contacts::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.contacts.index')
            ->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
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
                'email' => ['required'],
                'phone' => ['required'],
                'message' => ['required'],
               ]);

                $contacts = new Contacts();
                $contacts->name = $request->get('name');
                $contacts->email = $request->get('email');
                $contacts->phone = $request->get('phone');
                $contacts->message = $request->get('message');
                $contacts->save();

                return redirect('/admin/contacts')->with('success', "Created");
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
        $contacts = Contacts::findOrFail($id);
        return view('admin.contacts.edit')
        ->with('contacts', $contacts);
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
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
           ]);

            $contacts = Contacts::findOrFail($id);
            $contacts->name = $request->get('name');
            $contacts->email = $request->get('email');
            $contacts->phone = $request->get('phone');
            $contacts->message = $request->get('message');
            $contacts->save();

            return redirect('/admin/contacts')->with('success', "Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                 $contacts = Contacts::findOrFail($id);
                 $contacts->delete();

                 return redirect('/admin/contacts')->with('success', 'Deleted');
    }
}
