<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Adoption;
//use Illuminate\Support\Facades\Storage;

class adoptionController extends Controller
{
    public function adoption() {

        $adoptions = Adoption::orderBy('created_at', 'asc')->get();
        return view('adoption')
        ->with('adoptions', $adoptions);
    }
}
