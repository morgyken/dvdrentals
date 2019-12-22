<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
      $data = movie::all();

      // return $data;

        return view('home', ['data' => $data]);
    }

    public function moviezone()
    {
        $data = movie::all();

      // return $data;

        return view('moviezone', ['data' => $data]);
        //return view('moviezone');
    }


    public function techzone()
    {
        $data = movie::all();

      // return $data;

        return view('techzone', ['data' => $data]);
        
    }


    public function contact()
    {
        $data = movie::all();

      // return $data;

        return view('contact', ['data' => $data]);
   
    }

    public function register(Request req)
    {
        return view('join');
    }



    public function join()
    {
        return view('join');
    }



}
