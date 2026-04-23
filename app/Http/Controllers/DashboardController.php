<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = auth()->user()
            ->articles()
            ->with('category')
            ->latest()
            ->get();

        return view('dashboard', compact('articles'));
    }
}