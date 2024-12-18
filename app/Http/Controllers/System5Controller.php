<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class System5Controller extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8001/api/system5";
        
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
        
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true)['data'];
 
        // print_r($contentArray['data']);

 
        return view('pages.frontsite.category.system5', [
            'users' => $contentArray,
            // 'search' => $search,
        ]);
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
