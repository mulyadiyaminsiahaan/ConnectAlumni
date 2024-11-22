<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan filter dari request
        $filter = $request->input('filter', ''); // Default filter kosong

        // Query untuk mengambil data alumni
        if ($filter == 'popular') {
            // Mengambil berdasarkan jumlah alumni yang paling banyak (misalnya berdasarkan 'alumni_count')
            $users = User::orderBy('alumni_count', 'desc')->get();
        } elseif ($filter == 'recent') {
            // Mengambil berdasarkan data terbaru
            $users = User::orderBy('created_at', 'desc')->get();
        } else {
            // Mengambil semua data alumni jika filter kosong
            $users = User::all(); // Get all users, not just the authenticated user
        }

        // Mengirimkan data users ke view
        return view('pages.frontsite.category.index', compact('users')); // Pass 'users' instead of 'user'
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
    public function show(string $id)
    {
        return abort(404);
    }

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
}
