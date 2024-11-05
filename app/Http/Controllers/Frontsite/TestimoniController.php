<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('pages.frontsite.testimoni.index', compact('testimoni'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pekerjaan' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:4',
            'judul_utama' => 'required|string|max:255',
            'link_video' => 'required|url',
        ]);

        Testimoni::create([
            'pekerjaan' => $request->pekerjaan,
            'program_studi' => $request->program_studi,
            'angkatan' => $request->angkatan,
            'judul_utama' => $request->judul_utama,
            'link_video' => $request->link_video,
        ]);

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan!');
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
