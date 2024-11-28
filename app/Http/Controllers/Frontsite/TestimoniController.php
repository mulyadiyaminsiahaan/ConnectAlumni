<?php

namespace App\Http\Controllers\Frontsite;

use GuzzleHttp\Client;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8001/api/testimoni";
        $response = $client->request('GET', $url);

        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        // print_r($contentArray['data']);


        return view('pages.frontsite.testimoni.index', [
            'testimoni' => $contentArray['data'],
        ]);
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
    
        // Mendapatkan user_id dari pengguna yang sedang login
        $userId = Auth::id();
    
        $response = Http::post("http://127.0.0.1:8001/api/posttestimoni", [
            'user_id' => $userId, // Menambahkan user_id 
            'pekerjaan' => $request->pekerjaan,
            'program_studi' => $request->program_studi,
            'angkatan' => $request->angkatan,
            'judul_utama' => $request->judul_utama,
            'link_video' => $request->link_video,
        ]);
    
        if ($response->successful()) {
            return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan testimoni!');
        }
    }
    

    // Menghapus testimoni berdasarkan id testimoni nya

    public function deleteTestimoni($id)
    {
        $response = Http::delete('http://127.0.0.1:8001/api/deletetestimoni'. $id);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan testimoni!');
        }
    }


    // Tampilkan testimoni yang akan di edit (Menampilkan data berdasarkan id)

    public function showUpdate($id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8001/api/testimoni". $id;
        $response = $client->request('GET', $url);

        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        // print_r($contentArray['data']);


        return view('pages.frontsite.testimoni.index', [
            'testimoni' => $contentArray['data'],
        ]);
    }


    public function updateTestimoni(Request $request, $id)
    {
        $request->validate([
            'pekerjaan' => ['sometimes','string','max:255'],
            'program_studi' => ['sometimes','string','max:255'],
            'angkatan' => ['sometimes','string','max:4'],
            'judul_utama' => ['sometimes','string','max:255'],
            'link_video' => ['sometimes','url'],
        ]);

        $response = Http::post("http://127.0.0.1:8001/api/updatetestimoni". $id,[
            'pekerjaan' => $request->input('pekerjaan'),
            'program_studi' => $request->input('program_studi'),
            'angkatan' => $request->input('angkatan'),
            'judul_utama' => $request->input('judul_utama'),
            'link_video' => $request->input('link_video'),
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan testimoni!');
        }
    }

    

}