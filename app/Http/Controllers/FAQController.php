<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class FAQController extends Controller
{
    public function index(): Response
    {
        $user = Auth::user();
        return Inertia::render('FAQ' , [
            'user' => $user,
            ]);
    }
}
