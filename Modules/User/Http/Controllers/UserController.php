<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Validate;

class UserController extends Controller
{
    private $user;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('user::users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::users.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug('user');

        $role->users()->attach($user);

        return redirect()->route('user.index')->with('success','User created successfully.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(User $user)
    {
        return view('user::users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(User $user)
    {
        return view('user::users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
  
        $user->update($request->all());
  
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
