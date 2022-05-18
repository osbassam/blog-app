<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ToDoListController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('ToDoList');
    }
}
