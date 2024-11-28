<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


use Illuminate\Http\Request;

class ConnectedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.frontsite.connected.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        $user = User::findOrFail($userId);

        // Kirim data ke view
        return view('pages.frontsite.connected.index', compact('user'));
    }

    // public function show1(string $id)
    // {
    //     $users = User::findOrFail($id);
    //     return redirect()->route('pages.frontsite.connected.index', ['id' => $user->id] );

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }

    public function showUsers()
    {
        // Mengambil 4 pengguna secara acak dari database
        $users = User::all(); // Mengambil semua pengguna dari database
        $users = $users->shuffle()->take(4); // Mengacak dan mengambil 4 pengguna

        // Mengirim data pengguna ke view
        return view('pages.frontsite.connected.index', compact('users'));
    }
}
