<?php

namespace App\Http\Controllers;


use App\Package;
use Auth;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $packages = Package::all();
        $roles = Auth::user()->getRoleNames();
        if ($roles[0] == 'admin') {
            return redirect()->route('genre.index');
        }else{
            return redirect()->route('index');
        }

        
    }
}
