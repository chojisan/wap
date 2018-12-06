<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Auth;
use Validator;

use Mail;
use Template;
use Sentinel;
use Reminder;

class LoginController extends Controller
{
    use ThrottlesLogins;
    /**
     * Display login form
     * @return 
     */
    public function showLoginForm()
    {
        return view('auth::login');
    }

    /**
     * Authenticate login form
     * @return 
     */
    public function authenticate(Request $request)
    {
        $rememberMe = false;

        if (isset($request->remember_me))
        {
            $rememberMe = true;
        }

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
            
        if (Auth::attempt($credentials, $rememberMe))
        {
            // Authentication passed...
            return redirect('/backend');
        }
        else
        {
            return back()->with("error", "Wrong Login Credentials");
        }
    }

    /**
     * Logout
     * @return 
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
 
}
