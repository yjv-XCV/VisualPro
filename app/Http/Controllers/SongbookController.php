<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongbookController extends Controller
{
    //
    public function show()
    {
    	return view('office.songbook.home');
    }

    public function create (Request $request)
    {
        dd($request->toArray());
    }

    public function edit(Request $request)
    {
        dd($request->toArray());
    	return view('office.songbook.edit');
    }

    public function save(Request $request)
    {

    }

    public function archieved()
    {
    	return view('office.songbook.archived');
    }

    public function archieve(Request $request)
    {

    }

    public function destroy(Request $request){

    }
}
