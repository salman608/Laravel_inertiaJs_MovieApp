<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class TagController extends Controller
{
    public function index()
    {
        return Inertia::render('Tag/Index');
    }

    public function create()
    {
        return Inertia::render('Tag/Create');
    }
}
