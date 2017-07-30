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

    public function createPage()
    {
    	return view('office.create');
    }

    public function create (Request $request)
    {

    }

    public function editPage()
    {
    	return view('office.edit');
    }

    public function edit(Request $request)
    {

    }

    public function showArchieved()
    {
    	return view('office.archieved');
    }

    public function archieve(Request $request)
    {

    }
}
