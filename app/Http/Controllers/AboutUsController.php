<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AboutUsController extends Controller
{
    public function index(): Response
    {
        $user = Auth::user();
        return Inertia::render('AboutUs', [
            'user' => $user
        ]);
    }
}
