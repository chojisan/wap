<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Template;
use Sentinel;

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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        
        // Auth::attempt($credentials)
        if (Sentinel::authenticate($request->all())) {
            // Authentication passed...
            return redirect('/backend');
        }
        else
        {
            return back()->with('error', 'Wrong Login Credentials');
        }

    }

    public function logout()
    {
        Sentinel::logout();

        return redirect('/');
    }

    public function reset()
    {
        
    }
}
