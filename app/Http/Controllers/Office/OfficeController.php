<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficeController extends Controller
{
    //
    public function show()
    {
    	return view('office.home');
    }

    public function create (Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        dd($request->toArray());
    }

    public function edit(Request $request)
    {
        dd($request->toArray());
    	return view('office.edit');
    }

    public function save(Request $request)
    {

    }

    public function archieved()
    {
    	return view('office.archived');
    }

    public function archieve(Request $request)
    {

    }

    public function destroy(Request $request){

    }
}
