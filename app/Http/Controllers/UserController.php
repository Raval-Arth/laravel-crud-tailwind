<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_user(Request $request)
    {
        // save user
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        $user->save();

        // session message
        $request->session()->flash('message', 'Successfully register');

        // redirect user to login page
        return redirect()->route('login');
    }

    public function auth(Request $request)
    {
        $login_result = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

        if ($login_result) {
            return redirect('/');
        } else {
            // session message
            $request->session()->flash('error_message', 'Invalid credentials');

            return redirect('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
