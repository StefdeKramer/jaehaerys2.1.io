<?php
/**
 * Created by PhpStorm.
 * User: stefd
 * Date: 2016-09-22
 * Time: 12:18
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


Class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        
        $user->save();
        
        return redirect()->back();


    }

    public function postSignIn()
    {

    }
}

// Door request te gebruiken worden er gelijk 2 use aangemaakt.
// Laravel crypt functie bcrypt kan je het wachtwoord hashen