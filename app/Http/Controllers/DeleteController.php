<?php

namespace App\Http\Controllers;

use App\Models\User;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8001/api/testimoni";

        // Ambil kata kunci pencarian dari input pengguna
        $search = $request->get('search');

        // Kirim parameter pencarian ke API jika ada input
        $query = [];
        if ($search) {
            $query['search'] = $search;
        }

        // Buat URL dengan query string jika ada parameter pencarian
        if (!empty($query)) {
            $url .= '?' . http_build_query($query);
        }

        // Lakukan request ke API
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $testimoniData = json_decode($content, true)['data'];

        // Ambil nama pengguna dari database berdasarkan user_id
        $users = User::pluck('name', 'id'); // Ambil pasangan id => name

        foreach ($testimoniData as &$testimoni) {
            $testimoni['name'] = $users[$testimoni['user_id']] ?? 'Unknown User';
        }

        return view('pages.frontsite.admin.delete', [
            'testimoni' => $testimoniData,
            'search' => $search, // Kirim kata kunci ke view untuk referensi
        ]);
    }


    public function deleteTestimoni($id)
    {
        // Mengirim request HTTP DELETE ke API untuk menghapus testimoni berdasarkan ID yang diberikan.
        $response = Http::delete('http://127.0.0.1:8001/api/deletetestimoni/' . $id);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Testimoni berhasil Dihapus');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus testimoni!');
        }
    }


    // Tampilkan testimoni yang akan di edit (Menampilkan data berdasarkan id)

    public function showUpdate($id)
    {
        $client = new Client(); // Membuat instance baru dari GuzzleHttp Client untuk mengirim request HTTP.
        $url = "http://127.0.0.1:8001/api/testimoni/" . $id; // Mengatur URL endpoint API dengan menyertakan ID testimoni.
        $response = $client->request('GET', $url); // Mengirim request GET ke API untuk mendapatkan data testimoni berdasarkan ID.

        $content = $response->getBody()->getContents(); // Mendapatkan isi body dari response API.
        $contentArray = json_decode($content, true); // Mengubah data JSON dari response menjadi array PHP.

        // print_r($contentArray['data']);
        return view('pages.frontsite.admin.edit', [
            'testimoni' => $contentArray,
        ]);
    }


    // Update Testimoni dengan ID
    public function updateTestimoni(Request $request, $id)
    {
        $request->validate([
            // Validasi jika ada input sesuai dengan ketentuan nya misalkan dia harus string dengan max 255 karakter.
            'pekerjaan' => ['sometimes', 'string', 'max:255'], // sometimes-> bisa berisi bisa tidak, namun karna value edit langsung menampilkan yang semula, maka otomatis terisi.
            'program_studi' => ['sometimes', 'string', 'max:255'],
            'angkatan' => ['sometimes', 'string', 'max:4'],
            'judul_utama' => ['sometimes', 'string', 'max:255'],
            'link_video' => ['sometimes', 'url'],
        ]);

        // Mengirim request HTTP PUT ke API untuk memperbarui data testimoni dengan ID tertentu.
        $response = Http::put("http://127.0.0.1:8001/api/updatetestimoni/" . $id, [
            'pekerjaan' => $request->input('pekerjaan'),
            'program_studi' => $request->input('program_studi'),
            'angkatan' => $request->input('angkatan'),
            'judul_utama' => $request->input('judul_utama'),
            'link_video' => $request->input('link_video'),
        ]);

        if ($response->successful()) { // Mengecek apakah request ke API berhasil.
            // Redirect ke halaman dengan pesan sukses jika API merespons sukses.
            return redirect()->route('delete.index')->with('success', 'Testimoni berhasil ditambahkan!');
        } else {
            // Redirect kembali ke halaman sebelumnya dengan pesan error jika API gagal.
            return redirect()->back()->with('error', 'Gagal menambahkan testimoni!');
        }
    }
}