@extends('layouts.default')

@section('title', 'Connect')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .btn img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body class="bg-gray-100 p-10">
    <div class="flex flex-col items-center gap-8">
        <!-- Title -->
        <h1 class="text-7xl font-bold text-center text-[#1E2B4F] mb-6">Let's Connect</h1>

        <!-- Social Media Buttons -->
        <div class="flex gap-4">
            <a href="https://wa.me/6281234567890" class="btn btn-success">
                <img src="{{ asset('/assets/frontsite/images/whatsapp.svg') }}" alt="Whatsapp">
            </a>
            <a href="https://instagram.com" class="btn btn-primary">
                <img src="{{ asset('/assets/frontsite/images/instagram.svg') }}" alt="Instagram">
            </a>
        </div>

        <!-- Home Button -->
        <div class="bg-opacity-70 flex justify-center items-center">
            <a href="{{ url('/') }}" class="block text-xs text-black font-medium px-4 py-2 rounded-full text-center mt-7" style="background-color: rgb(255, 164, 27);">Home</a>
        </div>
        </div>
</body>
@endsection
