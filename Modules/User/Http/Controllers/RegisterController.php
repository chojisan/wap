<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Entities\User;
use Modules\Role\Entities\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\Auth\Mail\UserActivation;

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

        $role = Role::whereSlug('registered')->first();

        $role->users()->attach($user);

        \Mail::to($user)->send(new UserActivation($user, $activation->code));

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
