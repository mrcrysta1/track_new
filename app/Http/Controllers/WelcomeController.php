<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request) {
       $usr_name = $request->input('name');
       $submit = $request->input('submit');
       $usr_mail = $request->input('mail');
       $usr_phone = $request->input('phone');
       $discription = $request->input('discription');
       $subject = $request->input('subject');
       $message = '';
       if (isset($_POST['submit'])) {
        
           $message = 'Thanks for contact us & your mail recived sucssefuly!';
       }



        return view('welcome',['message' => $message]);
    }
}

