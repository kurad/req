<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function requests(){
        $requests = Requests::all();
        return view('admin.requests', compact('requests'));
    }
}
