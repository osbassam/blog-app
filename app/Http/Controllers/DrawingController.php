<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DrawingController extends Controller
{
    public function index()
    {
        return Inertia::render('Drawing');
    }
}
