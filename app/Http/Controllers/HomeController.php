<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $website = new Website();
        // $website->domain = 'site1';
        // $website->options = ['db_hostname' => 'localhost', 'db_database' => 'mipage_site2', 'db_username' => 'root', 'db_password' => 'root'];
        // $website->save();

        return view('home');
    }
}
