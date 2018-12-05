<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Validator;
use Mail;
use Template;
use Sentinel;
use Reminder;

class LoginController extends Controller
{
    /**
     * Display login form
     * @return 
     */
    public function login()
    {
        return view('auth::login');
    }

    /**
     * Authenticate login form
     * @return 
     */
    public function authenticate(Request $request)
    {
        try {
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
            
            if (Sentinel::authenticate($request->all(), $rememberMe)) {
                // Authentication passed...
                return redirect('/backend');
            }
            else
            {
                return back()->with("error", "Wrong Login Credentials");
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return back()->with("error", "You are banned for $delay second(s).");
        } catch (NotActivatedException $e) {
            return back()->with("error", "Yor account is not yet activated!");
        }

    }

    /**
     * Logout
     * @return 
     */
    public function logout()
    {
        Sentinel::logout();

        return redirect('/');
    }
 
}
