<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Modules\User\Entities\User;

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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'username' => $request['username'],
            'first_name' => $request['first_name'], 
            'middle_name' => $request['middle_name'], 
            'last_name' => $request['last_name'], 
            'email' => $request['email'], 
            'password' => bcrypt($request['password'])
        ]);

        auth()->login($user);

        return redirect()->route('backend');
    }
}
