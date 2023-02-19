<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->username = $request->username;
        if (isset($request->password)) {
            if(!empty($request->password)){
                $user->password = Hash::make($request->password);   
            }
        }
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->estado = 0;
        $user->save();
        return $user;
    }

    public function login(LoginFormRequest $request, User $user)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],false)){
            $user = Auth::user();
            return $user;
        }else {
            return response()->json(['errors'=>['login'=>['Los datos no son validos']]]);
        }
    }
}
