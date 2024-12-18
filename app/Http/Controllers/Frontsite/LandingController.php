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

        $Kategori1 = User::where('job', 'System Analyst')->whereNotNull('photo')->count();
        $Kategori2 = User::where('job', 'Programmer')->whereNotNull('photo')->count();
        $Kategori3 = User::where('job', 'UI/UX Designer')->whereNotNull('photo')->count();
        $Kategori4 = User::where('job', 'Data Analyst')->whereNotNull('photo')->count();
        $Kategori5 = User::where('job', 'Network Engineer')->whereNotNull('photo')->count();
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->usertype == 'admin') {
                return redirect('/admin');
            } else {
                $users = User::all(); // Get all users, not just the authenticated user
                return view('pages.frontsite.landing-page.index', compact('users', 'Kategori1', 'Kategori2', 'Kategori3', 'Kategori4', 'Kategori5')); // Pass 'users' instead of 'user'
            }
        } else {
            $users = User::all(); // Get all users, not just the authenticated user            
        
            // Mengirimkan data users ke view
            return view('pages.frontsite.landing-page.index', compact('users', 'Kategori1', 'Kategori2', 'Kategori3', 'Kategori4', 'Kategori5')); // Pass 'users' instead of 'user'
        }


    }


    public function create()
    {
        return abort(404);
    }
}