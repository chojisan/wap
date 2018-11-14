<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\Sentinel\User;
use Sentinel;
use Activation;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function register()
    {
        return view('auth::register');
    }

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

        //$this->sendMail($user, $activation->code);

        return redirect('/backend');
    }

    public function activate($email, $code)
    {
        $user = User::whereEmail($email)->first();

        $sentinelUser = Sentinel::findById($user->id);

        if (Activation::complete($sentinelUser, $code))
        {
            return redirect('/auth/login');
        }
        else
        {

        }
    }

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
