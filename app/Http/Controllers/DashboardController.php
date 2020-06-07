<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function __construct(Request $request)
    {
        if( $request->locale ) {
            App::setLocale($request->locale);
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

    public function profile()
    {
        return view('dashboard.profile.index');
    }
}
