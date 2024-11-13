@extends('layouts.default')

@section('title', 'Testimoni')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .video-card {
            position: relative;
            background-color: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            transition: transform 0.2s;
            display: flex;
            align-items: center;
        }

        .video-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.9);
            transition: transform 0.2s;
        }

        .video-image:hover .play-button {
            transform: translate(-50%, -50%) scale(1.2);
        }

        .video-image {
            position: relative;
            margin-right: 1rem;
        }

        .video-image img {
            width: 400px !important;
            height: 300px !important;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-gray-100 p-10">
    <div class="flex flex-col gap-8">

        <h2 class="text-7xl font-bold text-center text-[#1E2B4F] mb-6">Alumni Testimoni</h2>

        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> --}}
            @foreach($testimoni as $testimoni)
                <!-- Video Card 1 -->
                <div class="video-card">
                    <div class="video-image">
                        <img src="{{ asset('/assets/frontsite/images/wisudawan1.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                        <span class="play-button">▶</span>
                    </div>
                    <div>
                        <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">{{ $testimoni->judul_utama }}</h4>
                        <p class="text-sm text-[#AFAEC3]"><em>{{ $testimoni->pekerjaan }}</em></p>
                        <p class="text-xs text-gray-500">{{ $testimoni->program_studi }} {{ $testimoni->angkatan }}</p>
                    </div>
                </div>
            @endforeach
        {{-- </div> --}}

        <!-- Button Add Testimoni -->
        <a href="#" class="fixed bottom-0 right-0 m-4" onclick="toggleTestimoniForm(event)">
            <img src="{{ asset('/assets/frontsite/images/buttonadd.png') }}" alt="Add Testimoni" class="w-16 h-16">            
        </a>

        {{-- Form Testimoni Pop-up --}}
        <div id="testimoniForm" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg shadow-lg w-1/2">
                <h2 class="text-2xl font-bold mb-4">Add Testimoni</h2>
                <form action="{{ route('testimoni.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <input name="pekerjaan" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700 placeholder-gray-500" placeholder="Pekerjaan" type="text"/>
                        </div>
                        <div>
                            <select name="program_studi" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700">
                                <option value="" disabled selected>S1 Program Studi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
                                <option value="Metalurgi">Metalurgi</option>
                                <option value="Bioproses">Bioproses</option>
                                <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                                <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                                <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>
                        <div>
                            <select name="angkatan" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700">
                                <option value="" disabled selected>Angkatan</option>
                                @for ($year = 2000; $year <= date('Y'); $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>
                            <input name="judul_utama" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700 placeholder-gray-500" placeholder="Judul Utama" type="text"/>
                        </div>
                        <div>
                            <input name="link_video" class="w-full p-4 border rounded-full bg-gray-100 text-gray-700 placeholder-gray-500" placeholder="Link Video" type="text"/>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-4">
                        <button class="bg-gray-500 text-white px-6 py-2 rounded-full" type="button" onclick="toggleTestimoniForm(event)">Cancel</button>
                        <button class="bg-blue-500 text-white px-6 py-2 rounded-full" type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Success Notification -->
        @if(session('success'))
            <div id="successNotification" class="fixed top-4 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
        @endif

        <script>
            function toggleTestimoniForm(event) {
                event.preventDefault();
                const testimoniForm = document.getElementById('testimoniForm');
                testimoniForm.classList.toggle('hidden');
            }

            // Hide success notification after a few seconds
            document.addEventListener('DOMContentLoaded', function() {
                const notification = document.getElementById('successNotification');
                if (notification) {
                    setTimeout(() => {
                        notification.classList.add('opacity-0');
                        setTimeout(() => notification.remove(), 1000);
                    }, 3000);
                }
            });
        </script>
    </div>
</body>
@endsection
