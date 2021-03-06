<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Redirect;

use  App\movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    use AuthenticatesUsers;

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


    public function join()
    {
        $data = movie::all();

      // return $data;

        return view('join', ['data' => $data]);
    }


    public function showLoginForm ()
    {
        $data = movie::all();

      // return $data;

        return view('auth.login', ['data' => $data]);
    }

    public function login (Request $request)
    {
      // validate the info, create rules for the inputs
            $rules = array(
                'email'    => 'required|email', // make sure the email is an actual email
                'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
            );

            // run the validation rules on the inputs from the form
            $validator = Validator::make(Input::all(), $rules);

            // if the validator fails, redirect back to the form
            if ($validator->fails()) {
                return Redirect::to('login')
                    ->withErrors($validator) // send back all errors to the login form
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {

                // create our user data for the authentication
                $userdata = array(
                    'email'     => Input::get('email'),
                    'password'  => \Hash::make(Input::get('password'))
                );

                // attempt to do the login
                if (\Auth::attempt($userdata)) {

                    // validation successful!
                    // redirect them to the secure section or whatever
                    // return Redirect::to('secure');
                    // for now we'll just echo success (even though echoing in a controller is bad)
                    echo 'SUCCESS!';

                } else {        

                    // validation not successful, send back to form 
                    return Redirect::to('login');

                }

            }
        }

}
