<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    //  buatkan fungsi login untuk model User
    public function login(Request $request)
    {
        // validasi inputan email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Invalid credentials'
            ], 401);
        }

        // cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response([
                'message' => 'User not found'
            ], 404);
        }

        $tokens = $user->createToken('appToken')->plainTextToken;
        return response([
            'user' => $user,
            'tokens' => $tokens
        ]);
    }

    //buat untuk register
    public function register(Request $request)
    {
        // validasi inputan email dan password
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users|regex:/^[\w\.-]+@[\w\.-]+\.\w+$/',
            'password' => 'required|string|min:8',
        ]);

        // buat user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if (empty($request->name) || empty($request->email) || empty($request->password)) {
            return response([
                'message' => 'Name, email, and password are required'
            ], 400);
        }

        // buat token untuk user yang baru saja register
        $tokens = $user->createToken('appToken')->plainTextToken;
        return response([
            'user' => $user,
            'tokens' => $tokens
        ]);
    }

    // fungsi untuk menampilkan data user yang sedang login
    public function user(Request $request)
    {
        return $request->user();
    }

    // fungsi untuk logout
    public function logout(Request $request)
    {
        if($request->user()->tokens()->delete()){
            return response([
                'message' => 'Logged out'
            ]);
        } else {
            return response([
                'message' => 'Token not provided'
            ], 400);
        }
    }

    // fungsi register
}
