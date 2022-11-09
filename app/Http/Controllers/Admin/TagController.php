<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Str;
use Inertia\Inertia;

use function Termwind\render;

class TagController extends Controller
{
    public function index()
    {

        return Inertia::render('Tag/Index', [
            'tags' => Tag::paginate(5),
        ]);
    }

    public function create()
    {
        return Inertia::render('Tag/Create');
    }

    public function store()
    {
        Tag::create([
            'tag_name' => Request::input('tagName'),
            'slug'    => Str::slug(Request::input('tagName')),
        ]);
        return redirect()->route('admin.tags.index');
    }
}
