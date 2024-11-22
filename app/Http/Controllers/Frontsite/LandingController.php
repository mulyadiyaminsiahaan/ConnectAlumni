<?php
// app/Http/Controllers/Frontsite/LandingController.php
namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;


class LandingController extends Controller
{
    public function index(Request $request)
    {

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->usertype == 'admin') {
                return redirect('/admin');
            } else {
                // Arahkan pengguna yang tidak login ke halaman login
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
                return view('pages.frontsite.landing-page.index', compact('users'));
            }
        } else {
            // Arahkan pengguna yang tidak login ke halaman login
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
            return view('pages.frontsite.landing-page.index', compact('users')); // Pass 'users' instead of 'user'
        }


    }


    public function create()
    {
        return abort(404);
    }
}