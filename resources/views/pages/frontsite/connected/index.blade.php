@extends('layouts.default')

@section('title', 'Profil')

@section('content')
    <main class="container mx-auto mt-8 flex">
    <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
        <div class="w-1/3 flex flex-col items-center">
            <!-- Memeriksa apakah pengguna memiliki foto -->
                        <div>
                            <img class="w-48 h-48 rounded-full border-4 border-blue-500" src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="{{ $user->name }}">
                        </div>
        </div>

                <div class="w-2/3 bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-gray-500 text-lg">Profile</h2>
                    <h1 class="text-4xl font-bold text-gray-800 mt-2">Tentang Saya</h1>
                    <div class="text-gray-700 mt-4 text-justify">
                        <p>
                            {{ $user->about }} <!-- Menampilkan tentang user -->
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div>
                            <p class="text-gray-500">Nama</p>
                            <p class="text-gray-800 font-semibold">{{ $user->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Pekerjaan</p>
                            <p class="text-gray-800 font-semibold">{{ $user->job }} at {{$user->tempatKerja}}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Nomor Telepon</p>
                            <p class="text-gray-800 font-semibold">{{ $user->contact }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Tanggal Lahir</p>
                            <p class="text-gray-800 font-semibold">{{ \Carbon\Carbon::parse($user->birth_of_date)->format('d - m - Y') }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">E-mail</p>
                            <p class="text-gray-800 font-semibold">{{ $user->email }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Status</p>
                            <p class="text-gray-800 font-semibold">{{ $user->status }}</p>
                        </div>
                        <div>
                    <p class="text-gray-500">Program Studi</p>
                    <p class="text-gray-800 font-semibold">{{ $user->program_studi }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Angkatan</p>
                    <p class="text-gray-800 font-semibold">{{ $user->angkatan }}</p>
                </div> 
                    <div class="flex justify-end mt-8">
                        <a href="https://www.instagram.com/iadelofc/profilecard/?igsh=bHNoMDQ1eHlrODJz" class="ml-4">
                            <img src="{{ asset('/assets/frontsite/images/instagram.svg') }}" alt="Instagram" class="w-8 h-8">
                        </a>
                        <a href="https://wa.me/<?php echo $user->contact ?>" class="ml-4">
                            <img src="{{ asset('/assets/frontsite/images/whatsapp.svg') }}" alt="WhatsApp" class="w-8 h-8">
                        </a>
                    </div>
                    </div>
                </div>
            </main>


@endsection