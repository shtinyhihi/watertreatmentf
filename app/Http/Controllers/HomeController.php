<?php

namespace App\Http\Controllers;
use App\Models\PendingAcc;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pacc = PendingAcc::all();
        return view('admin.layout.layout', compact('pacc'));
    }
}
