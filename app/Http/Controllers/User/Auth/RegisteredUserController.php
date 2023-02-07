<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:2',
            'gender' => 'required|string|max:2',
            'email' => 'required|string|email|max:255|unique:users',
            'prefectures_id' => 'required|string|max:2',
            'municipalities' => 'required|string|max:255',
            'current_job' => 'required|string|max:2',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::guard('users')->login($user = User::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'email' => $request->email,
            'prefectures_id' => $request->prefectures_id,
            'municipalities' => $request->municipalities,
            'current_job' => $request->current_job,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
