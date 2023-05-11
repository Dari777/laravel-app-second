<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function show(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|min:3|max:15',
            'surname' => 'required|min:3|max:15',
            'message' => 'required|min:10|max:100'
        ]);
        Contact::create($request->all());
        return redirect()->back();
    }
}
