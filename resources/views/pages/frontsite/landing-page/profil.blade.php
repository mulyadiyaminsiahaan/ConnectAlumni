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
            <div class="relative">
                <img class="w-48 h-48 rounded-full border-4 border-blue-500" src="{{ asset('storage/' . $user->photo) }}" alt="Profile Photo">
            </div>
        </div>

        <div class="w-2/3 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-gray-500 text-lg">Profile</h2>
            <h1 class="text-4xl font-bold text-gray-800 mt-2">About Me</h1>
            <div class="text-gray-700 mt-4 text-justify">
                <p>
                    {{ $user->about }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div>
                    <p class="text-gray-500">Full Name</p>
                    <p class="text-gray-800 font-semibold">{{ $user->name }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Job</p>
                    <p class="text-gray-800 font-semibold">{{ $user->job }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Phone</p>
                    <p class="text-gray-800 font-semibold">{{ $user->contact }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Birth date</p>
                    <p class="text-gray-800 font-semibold">{{ \Carbon\Carbon::parse($user->birth_of_date)->format('d - m - Y') }}</p>
                </div>
                <div>
                    <p class="text-gray-500">E - mail</p>
                    <p class="text-gray-800 font-semibold">{{ $user->email }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Status</p>
                    <p class="text-gray-800 font-semibold">{{ $user->status }}</p>
                </div>
            </div>
            <div class="flex justify-end mt-8">
                <a href="{{ route('editprofil') }}" class="bg-blue-600 text-white px-6 py-2 rounded-full shadow-lg">Edit Profile</a>
            </div>
        </div>
    </main>
@endsection
