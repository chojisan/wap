<?php

namespace Modules\User\Http\Controllers;

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

class ResetPasswordController extends Controller
{

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
