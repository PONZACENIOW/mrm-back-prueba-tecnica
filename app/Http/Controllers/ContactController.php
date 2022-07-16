<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactsRequest;

class ContactController extends Controller
{

    function contactPost(ContactsRequest $req)
    {
        $contact = new Contact;

        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;

        $contact->save();

        return response($contact, 200);
    }

    function contactGet()
    {
        $contact = Contact::all();

        return response($contact, 200);
    }
}
