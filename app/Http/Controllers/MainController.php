<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function post()
    {
        return response()->json(['first' => 'ok'],201);
    }
    public function put()
    {
        return response()->json(['first' => 'ok']);
    }
}
