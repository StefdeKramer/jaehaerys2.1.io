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
use Illuminate\Support\Facades\Auth;


Class UserController extends Controller
{

    public function getDashboard()
    {
        return view('dashboard');

    }

    //De data moet gevalideerd worden zodat er geen bullshit kan worden geplaatst
    //Feature Laravel voor email
    // Door het gebruik van required en een hoeveelheid mee te geven zal de data worden gecontrolleerd beide kloppen

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
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {


        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

}

// Door request te gebruiken worden er gelijk 2 use aangemaakt.
// Laravel crypt functie bcrypt kan je het wachtwoord hashen