<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\Sentinel\User;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Validator;
use Template;
use Sentinel;
use Reminder;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function login()
    {
        return view('auth::login');
    }

    public function authenticate(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            $credentials = $request->only('email', 'password');
            
            if (Sentinel::authenticate($request->all())) {
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

    public function logout()
    {
        Auth::logout();
        Sentinel::logout();

        return redirect('/');
    }

    public function forgotPassword()
    {
        return view('auth::forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
        $user = User::whereEmail($request->email)->first();  

        if (count($user) > 0)
        {
            $sentinelUser = Sentinel::findById($user->id);
            $reminder = Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
            //$this->sendEmail($user, $reminder->code);
            return back()->with("success", "Email successfully reset. Please check your email for reset code.");
        }
        else{
            return back()->with("error", "Entered Email not found. Please try again.");
        }
    }

    private function sendEmail($user, $code)
    {
        Mail::send('auth::reset-password-email', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) {
            $message->to($email);
            $message->subject("Reset User Password");
        });
    }

    public function reset($email, $code)
    {
        $user = User::whereEmail($email)->first();

        if (count($user) == 0)
        {
            abort(404);
        }

        $sentinelUser = Sentinel::findById($user->id);

        if ($reminder = Reminder::exists($sentinelUser))
        {
            if ($code == $reminder->code)
            {
                return view('auth::reset-password');
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

    public function postResetPassword(Request $request, $email, $code)
    {
        $this->validate(request(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::whereEmail($email)->first();

        if (count($user) == 0)
        {
            abort(404);
        }

        $sentinelUser = Sentinel::findById($user->id);

        if ($reminder = Reminder::exists($sentinelUser))
        {
            if ($code == $reminder->code)
            {
                Reminder::complete($sentinelUser, $code, $request->password);

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
