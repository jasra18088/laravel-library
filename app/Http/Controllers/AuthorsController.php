<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;

class AuthorsController extends Controller
{
    public function index() {
        
        $authors = Authors::latest()->get();

        return view('authors.index', ['authors' => $authors]);

    }

    public function show($id) {

        $author = Authors::find($id);

        return view('authors.show', ['author' => $author]);

    }
}
