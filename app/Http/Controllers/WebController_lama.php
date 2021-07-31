<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('index', ['nama_depan_1' => 'Hosea']);
    }
}
