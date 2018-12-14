<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;

use Mail;
use Template;
use Sentinel;
use Reminder;

class AuthController extends Controller
{
    /**
     * Display login form
     * @return 
     */
    public function login()
    {
        return view('user::auth.login');
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

    /**
     * Display forgot password form
     * @return 
     */
    public function forgotPassword()
    {
        return view('user::auth.forgot-password');
    }

    /**
     * Post forgot password
     * @return 
     */
    public function postForgotPassword(Request $request)
    {
        $user = User::whereEmail($request->email)->first();  

        if (count($user) > 0)
        {
            $reminder = Reminder::exists($user) ?: Reminder::create($user);
            // send email
            //$this->sendEmail($user, $reminder->code);
            return back()->with("success", "Email successfully reset. Please check your email for reset code.");
        }
        else{
            return back()->with("error", "Entered Email not found. Please try again.");
        }
    }

    /**
     * Send forgot password email.
     * @return 
     */
    private function sendEmail($user, $code)
    {
        Mail::send('user::mails.reset-password', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) {
            $message->to($email);
            $message->subject("Reset User Password");
        });
    }

    /**
     * Authenticate and Display reset password form
     * @return 
     */
    public function reset($email, $code)
    {
        $user = User::whereEmail($email)->first();

        if (count($user) == 0)
        {
            abort(404);
        }

        if ($reminder = Reminder::exists($user))
        {
            if ($code == $reminder->code)
            {
                return view('user::auth.reset-password');
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }

        
    }

    /**
     * Post reset password
     * @return 
     */
    public function postResetPassword(Request $request, $email, $code)
    {
        $this->validate(request(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::whereEmail($email)->first();

        if (count($user) == 0)
            abort(404);

        if ($reminder = Reminder::exists($user))
        {
            if ($code == $reminder->code)
            {
                Reminder::complete($user, $code, $request->password);

                return redirect('/auth/login')->with('success', 'Please login with your new password.');
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }
    }
}
