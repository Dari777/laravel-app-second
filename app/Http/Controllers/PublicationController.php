<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    //
    public function index()
    {
        return view('publication');
    }

    public function show(Request $request)
    {
        // dd($request);
        $request->validate([
            'titlePublication' => 'required|min:3|max:25',
            'descriptionPublication' => 'required|min:3|max:50',
            'textPublication' => 'required|min:10'
        ]);
        Publication::create($request->all());
        return redirect()->back();
    }
}
