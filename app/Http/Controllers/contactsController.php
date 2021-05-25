<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Http\Requests;

class contactsController extends Controller
{
    public function contacts() {
        return view('contacts');
    }

    function saveContacts(Request $request){

        $this->validate($request,
        [
           "name"=> ["required"],
           "email"=> ["required", "email"],
           "phone"=>["required"],
           "message"=>["required"]
       ]);
                
          $contact = new contacts();
          $contact->name = request()->get('name');
          $contact->email = request()->get('email');
          $contact->phone = request()->get('phone');
          $contact->message = request()->get('message');
          $contact->save();

            return view('success')
            ->with('name', $contact->name)
            ->with('email', $contact->email)
            ->with('phone', $contact->phone)
            ->with('message', $contact->message);
          }

      public function success(){        
        return view('success');
      }

}
