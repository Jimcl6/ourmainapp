<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage(){
        $ourName = 'John Doe';
        return view('homepage', ['name' => $ourName, 'catName' => 'Fluffy']);
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">Back to home</a>';
    }
}
