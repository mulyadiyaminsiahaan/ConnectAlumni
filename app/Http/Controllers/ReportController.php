<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Store a newly created report in the API.
     */

    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8001/api/reports";
        $response = $client->request('GET', $url);
 
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
 
        // print_r($contentArray['data']);
 
 
        return view('pages.frontsite.admin.report', [
       'report' => $contentArray['data'],
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input data laporan
        $request->validate([
            'judul_utama' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alasan' => 'required|string|max:500',
        ]);

        // Kirim data laporan ke API menggunakan HTTP POST
        $response = Http::post("http://127.0.0.1:8001/api/reports", [
            'judul_utama' => $request->judul_utama,
            'nama' => $request->nama,
            'alasan' => $request->alasan,
        ]);

        // Cek apakah respons dari API berhasil
        if ($response->successful()) {
            return redirect()->back()->with('success', 'Laporan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim laporan. Silakan coba lagi.');
        }
    }
}
