<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

        \App\Models\Student::create([
            'user_id' => $user->id,
            'fName' => explode(' ', $request->name)[0],
            'lName' => count(explode(' ', $request->name)) > 1 ? explode(' ', $request->name)[1] : 'Scholar',
            'studentId' => 'LUMINA-' . rand(10000, 99999),
            'email' => $request->email,
            'pNumber' => '+1 (555) ' . rand(100, 999) . '-' . rand(1000, 9999),
            'course' => 'BSc in Advanced Technologies',
            'age' => 20,
            'gender' => (rand(1, 2) == 1) ? 'Female' : 'Male',
            'brgy' => 'University District',
            'city' => 'Metropolis',
            'province' => 'Global Campus',
            'enrolled' => 'Enrolled',
            'studentImage' => 'default.png',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
