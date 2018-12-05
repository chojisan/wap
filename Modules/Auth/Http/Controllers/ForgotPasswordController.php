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

class ForgotPasswordController extends Controller
{

    /**
     * Display forgot password form
     * @return 
     */
    public function forgotPassword()
    {
        return view('auth::forgot-password');
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
        Mail::send('auth::reset-password-email', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) {
            $message->to($email);
            $message->subject("Reset User Password");
        });
    }
}
