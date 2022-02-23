<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the admin control panel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function command($action)
    {
        $message = "";
        
        switch ($action) {
            case "migrate":
                Artisan::call('migrate');
                break;
            case "cache":
                Artisan::call('cache:clear');
                break;
            case "images":
                Artisan::call('image:clear');
                break;
            case "views":
                Artisan::call('responsecache:clear');
                Artisan::call('view:clear');
                break;
            case "routes":
                Artisan::call('route:clear');
                break;
            case "clear-compiled":
                Artisan::call('clear-compiled');
                break;
            case "routes-cache":
                Artisan::call('route:cache');
                break;
            case "optimize":
                Artisan::call('optimize', ['--force' => true]);
                break;
        }


        return redirect()->route('admin.admin.acp')->with('alert-message', Artisan::output() )->with('alert-type', 'success'); 
//        return ($url = session()->get('backUrl')) ? redirect($url) : redirect()->route('admin.admin.acp');
    }



}
