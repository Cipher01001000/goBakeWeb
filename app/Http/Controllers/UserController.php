<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //Show register/create form
    public function create()
    {
        return view('user/register');
    }

    //Create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'role_id' => 'required',
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'contact_number' => ['required', 'min:10'],
            // 'municipality' => ['required', 'min:3'],
            // 'barangay' => ['required', 'min:3'],
            // 'house_no' => ['required', 'min:3'],
            // 'zip_code' => ['required', 'min:3'],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        Alert::success('Success', 'You have been successfully created an account!');

        //redirect user in with role they are
        $user = auth()->user();

        if ($user->role_id == 1) {
            return redirect('/admin');
        } else if ($user->role_id == 2) {
            return redirect('/');
        } else if ($user->role_id == 3) {
            return redirect('/seller');
        }
    }

    //logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //logout
    public function sellerLogout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //show login form
    public function login()
    {
        return view('user/login');
    }

    //athenticate user
    public function authenticate(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            Alert::success('Welcome to Gobake', 'Welcome to our cake paradise! Treat yourself to irresistible delights. Enjoy!');

            //redirect user in with role they are
            $user = auth()->user();

            if ($user->role_id == 1) {
                return redirect('/admin');
            } else if ($user->role_id == 2) {
                return redirect('/');
            } else if ($user->role_id == 3) {
                return redirect('/seller');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
