<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Sentinel;
use Activation;

class RegisterController extends Controller
{
    /**
     * Display registration form.
     * @return 
     */
    public function register()
    {
        return view('auth::register');
    }

    /**
     * Post registration
     * @return 
     */
    public function postRegister(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug('user');

        $role->users()->attach($user);

        // send email
        //$this->sendMail($user, $activation->code);

        return redirect('/backend');
    }

    /**
     * Activate registration
     * @return 
     */
    public function activate($email, $code)
    {
        $user = User::whereEmail($email)->first();

        if (count($user) == 0)
            abort(404);

        if (Activation::complete($user, $code))
        {
            return redirect('/auth/login');
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Send activation email
     * @return 
     */
    private function sendEmail($user, $code)
    {
        Mail::send('auth::activation-email', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) {
            $message->to($email);
            $message->subject("Account activation");
        });
    }
}
