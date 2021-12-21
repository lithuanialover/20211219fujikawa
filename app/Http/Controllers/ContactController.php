<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('/index');
    }
    public function post(Request $request)
    {
        $contact = new Contact($request->all());
        $form = $request->all();
        unset($form['_token_']);
        $contact->fill($form)->save();
        return redirect('/thanks');
    }
}
