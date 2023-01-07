<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index(){
        $kamars = Kamar::all();
        return view('main.dashboard');
    }
}
