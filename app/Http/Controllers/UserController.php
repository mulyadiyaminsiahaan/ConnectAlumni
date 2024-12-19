<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Validator
use Illuminate\Support\Facades\Validator;
//JsonResponse
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $formattedUsers = $users->map(function ($user) {
            return [
                'user' => $user,
                'links'=> $user->get_links()

            ];
        });

        return response()->json([
            'message' => 'Success',
            'users' => $formattedUsers
        ]);


    }

    public function show($name)
    {
        $user = (new User)->get_user_by_name($name);
        if ($user) {
            return response()->json([
                'message' => 'Success',
                'user' => $user,
                'links' => $user->get_links()
            ]);
        }

        return response()->json([
            'message' => 'User not found'
        ], 404);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'about' => 'required|string',
            'contact' => 'required|string',
            'job' => 'required|string',
            'photo' => 'required|string',
            'status' => 'required|string',
            'birth_of_date' => 'required|date',
            'program_studi' => 'required|string',
            'angkatan' => 'required|string',
            'tempatKerja' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        $user = User::create_user($request->all());

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
            'links' => $user->get_links()
        ], 201);
    }

    public function update(Request $request, $name)
    {
        $user = (new User)->get_user_by_name($name);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:8|confirmed',
            'about' => 'string',
            'contact' => 'string',
            'job' => 'string',
            'photo' => 'string',
            'status' => 'string',
            'birth_of_date' => 'date',
            'program_studi' => 'string',
            'angkatan' => 'string',
            'tempatKerja' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }

        $user = $user->update_user($request->all());

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
            'links' => $user->get_links()
        ]);
    }

    public function destroy($name)
    {
        $user = (new User)->get_user_by_name($name);
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }
}
