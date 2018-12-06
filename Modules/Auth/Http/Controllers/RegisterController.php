<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\Auth\Emails\UserActivation;
use Modules\Auth\Emails\ResetPassword;

use Activation;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Display registration form.
     * @return 
     */
    public function showRegistrationForm()
    {
        return view('auth::register');
    }

    /**
     * Post registration
     * @return 
     */
    public function register(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($request->all());

        $activation = Activation::create($user);

        \Mail::to($user)->send(new UserActivation($user, $activation->code));

        //$role = Sentinel::findRoleBySlug('user');

        //$role->users()->attach($user);

        return redirect('/backend');
    }

    /**
     * Activate registration
     * @return 
     */
    public function activate($email, $code)
    {
        $user = User::whereEmail($email)->first();

        if ( empty($user) )
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

}
