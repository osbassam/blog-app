<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PaintingController extends Controller
{
    public function index()
    {
        return Inertia::render('Painting');
    }
}
