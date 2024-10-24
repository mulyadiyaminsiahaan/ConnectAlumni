<?php
// app/Http/Controllers/Frontsite/LandingController.php
namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->usertype == 'admin') {
                return redirect('/admin');
            } else {
                return view('pages.frontsite.landing-page.index');
            }
        } else {
            // Arahkan pengguna yang tidak login ke halaman login
            return view('pages.frontsite.landing-page.index');
        }
    }

    public function create()
    {
        return abort(404);
    }
}