<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateRequestController extends Controller
{
    public function updateRequest(){
        return view('admin.updateRequest.updateRequest');
    }
}
