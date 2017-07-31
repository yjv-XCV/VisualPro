<?php

namespace App\Http\Controllers\Visual;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisualController extends Controller
{
    //
    public function console(Request $request)
    {
        dd($request->toArray());
    	return view('visual.console');
    }

    public function display(Request $request)
    {
    	return view('visual.display');
    }
}
