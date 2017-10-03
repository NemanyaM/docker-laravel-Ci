<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DockerController extends Controller
{
    public function index ()
    {
        return view('docker');
    }
}
