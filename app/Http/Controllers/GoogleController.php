<?php

  

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash; // Import Auth facade if not already imported
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Auth;
use Throwable;

class GoogleController extends Controller

{

   /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToGoogle()

    {

        return Socialite::driver('google')->stateless()->redirect();

    }

          

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleGoogleCallback()

    {

        try {

        

            $user = Socialite::driver('google')->stateless()->user();

         

            $finduser = User::where('google_id', $user->getId())->first();

         

            if(!$finduser){

                $new_User = User::create([
                    'name'=> $user->getName(),
                    'email'=> $user->getEmail(),
                    'google_id'=> $user->getId()
                ]);
         

                Auth::login($new_User);

        

                return redirect()->intended('home');

         

            }else{

              
         

                Auth::login($finduser);

        

                return redirect()->intended('home');

            }

        

        } catch (Throwable $e) {

            dd('Something went worong!' . $e->getMessage());

        }

    }

}