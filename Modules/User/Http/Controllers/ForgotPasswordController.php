<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Validator;
use Template;
use Sentinel;
use Reminder;

use Modules\User\Mail\ResetPassword;

class ForgotPasswordController extends Controller
{

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

        if ( !empty($user) )
        {
            $reminder = Reminder::exists($user) ?: Reminder::create($user);

            \Mail::to($user)->send(new ResetPassword($user, $reminder->code));

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
}
