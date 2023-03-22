<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

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
        $visitor = DB::table('visitor')->count();
        $todayVisitor = DB::table('visitor')->where('date', today())->count();
        $messages = DB::table('t_message')->get();
        return view('home', compact('messages', 'visitor', 'todayVisitor'));
    }
    public function clearCache()
    {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('route:cache');
        $exitCode = Artisan::call('route:clear');

        return redirect()->back();
    }
}
