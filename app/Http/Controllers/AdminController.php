<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(Request $request)
    {
        if( $request->locale ) {
            \App::setLocale($request->locale);
        }
    }
    public function index(Request $request)
    {

        return view('dashboard.index');
    }

    public function settings()
    {

        return view('dashboard.settings.index');
    }

}
