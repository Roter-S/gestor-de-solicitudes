<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $emailUser = $request->session()->get('user');
        return view('admin.dashboard', compact('emailUser'));
    }
}
