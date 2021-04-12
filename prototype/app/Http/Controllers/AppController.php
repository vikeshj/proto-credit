<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Response $response)
    {

        $data = ['apples', 'oranges', 'pine-apples'];
        return view('welcome', ['data' => $data]);
    }

    /**
     * store data to DB
     */
    public function store(){

    }
}
