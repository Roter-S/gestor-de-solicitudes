<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $totalUsers = DB::table('users')->count();
        $totalAccepted = DB::table('request_statuses')->where('status', 'Aceptado')->count();
        $totalWaiting = DB::table('request_statuses')->where('status', 'Pendiente')->count();
        $totalRejected = DB::table('request_statuses')->where('status', 'Rechazado')->count();

        return view('admin.home', compact('totalUsers', 'totalAccepted','totalWaiting','totalRejected'));
    }
}
