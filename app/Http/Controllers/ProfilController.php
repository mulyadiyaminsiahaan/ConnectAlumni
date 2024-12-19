<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.frontsite.landing-page.profil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Return the profile view with the user data
        return view('pages.frontsite.landing-page.profil', compact('user'));
    } 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();
    
        return view('pages.frontsite.landing-page.editprofil', compact('user'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    // Update the user's profile
    public function update(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if $user is null (in case the user is not authenticated)
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to edit your profile.');
        }

        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'contact' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'about' => 'required|string|max:1000',
            'status' => 'required|string|max:255',
            'birth_of_date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'program_studi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:255',
            'tempatKerja' => 'required|string|max:255',
        ]);
        

        // Ensure $user is an instance of User and can be updated
        if ($user instanceof \App\Models\User) {
            // Update the user's data
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->contact = $validated['contact'];
            $user->job = $validated['job'] ?? $user->job;
            $user->about = $validated['about'] ?? $user->about;
            $user->status = $validated['status'] ?? $user->status;
            $user->birth_of_date = $validated['birth_of_date'] ?? $user->birth_of_date;
            $user->program_studi = $validated['program_studi'] ?? $user->program_studi;
            $user->angkatan = $validated['angkatan'] ?? $user->angkatan;
            $user->tempatKerja = $validated['tempatKerja'] ?? $user->tempatKerja;
            

            // Handle file upload (if there is a new photo)
            if ($request->hasFile('photo')) {
                // Delete the old profile photo if it exists
                if ($user->photo) {
                    $oldPhotoPath = public_path('storage/' . $user->photo);
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }

                // Save the new photo in the public/storage/profile_photos directory
                $photo = $request->file('photo');
                $imagePath = 'profile_photos/' . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path('storage/profile_photos'), $imagePath);
                $user->photo = $imagePath;
            }

            // Save the updated user data
            $user->save();
        } else {
            return back()->with('error', 'User not found or unable to update.');
        }

        // Redirect to the profile page with a success message
        return redirect()->route('profil')->with('success', 'Profile updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
