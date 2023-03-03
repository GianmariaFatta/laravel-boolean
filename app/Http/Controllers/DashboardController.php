<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tools = Tool::orderBy('name', 'ASC')->get();
        return view('dashboard', compact('tools'));
    }
}
