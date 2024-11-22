<?php

// AlumniController.php
namespace App\Http\Controllers;

use App\Models\User; // Mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
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
            $user = Auth::user();
        }

        // Mengirimkan data users ke view
        return view('pages.frontsite.category.index', compact('user')); // Pastikan nama view sesuai
    }
}


