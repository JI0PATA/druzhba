<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $slides = Slide::all();

        return view('admin.index', [
            'slides' => $slides,
        ]);
    }
}
