<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {


        return view('cms.dashboard.index');

        // return 'sukses login';
        
    }
}
