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
            display: flex; /* Align items horizontally */
            align-items: center; /* Center vertically */
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
            margin-right: 1rem; /* Add some spacing between image and text */
        }

        .video-image img {
            width: 400px !important; /* Set a larger fixed width */
            height: 300px !important; /* Set a larger fixed height */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }
    </style>
</head>

<body class="bg-gray-100 p-10">
    <div class="flex flex-col gap-8"> <!-- Flex column for vertical layout -->

        <!-- Title -->
        <h2 class="text-7xl font-bold text-center text-[#1E2B4F] mb-6">Alumni Testimoni</h2>

        <!-- Video Card 1 -->
        <div class="video-card">
            <div class="video-image">
                <img src="{{ asset('/assets/frontsite/images/wisudawan1.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                <span class="play-button">▶</span>
            </div>
            <div>
                <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">Lulusan IT Del Sukses Raih Karir di Perusahaan Teknologi Global</h4>
                <p class="text-sm text-[#AFAEC3]"><em>Anne Hulli - FrontEnd Mandiri</em></p>
                <p class="text-xs text-gray-500">Information System 2015</p>
            </div>
        </div>

        <!-- Video Card 2 -->
        <div class="video-card">
            <div class="video-image">
                <img src="{{ asset('/assets/frontsite/images/industri.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                <span class="play-button">▶</span>
            </div>
            <div>
                <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">Peluang Karir di Bidang Pengembangan Aplikasi</h4>
                <p class="text-sm text-[#AFAEC3]"><em>Anne Hulli - FrontEnd Mandiri</em></p>
                <p class="text-xs text-gray-500">Information System 2015</p>
            </div>
        </div>

        <!-- Video Card 3 -->
        <div class="video-card">
            <div class="video-image">
                <img src="{{ asset('/assets/frontsite/images/wisudawan1.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                <span class="play-button">▶</span>
            </div>
            <div>
                <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">Lulusan IT Del Sukses Raih Karir di Perusahaan Teknologi Global</h4>
                <p class="text-sm text-[#AFAEC3]"><em>Anne Hulli - FrontEnd Mandiri</em></p>
                <p class="text-xs text-gray-500">Information System 2015</p>
            </div>
        </div>

        <!-- Video Card 4 -->
        <div class="video-card">
            <div class="video-image">
                <img src="{{ asset('/assets/frontsite/images/industri.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                <span class="play-button">▶</span>
            </div>
            <div>
                <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">Peluang Karir di Bidang Pengembangan Aplikasi</h4>
                <p class="text-sm text-[#AFAEC3]"><em>Anne Hulli - FrontEnd Mandiri</em></p>
                <p class="text-xs text-gray-500">Information System 2015</p>
            </div>
        </div>

        <!-- Video Card 5 -->
        <div class="video-card">
            <div class="video-image">
                <img src="{{ asset('/assets/frontsite/images/wisudawan1.jpg') }}" alt="Video Thumbnail" class="rounded-lg">
                <span class="play-button">▶</span>
            </div>
            <div>
                <h4 class="mt-4 text-lg font-medium text-[#1E2B4F]">Lulusan IT Del Sukses Raih Karir di Perusahaan Teknologi Global</h4>
                <p class="text-sm text-[#AFAEC3]"><em>Anne Hulli - FrontEnd Mandiri</em></p>
                <p class="text-xs text-gray-500">Information System 2015</p>
            </div>
        </div>

        {{-- tambahkan gambar buttonadd.png sebagai button mengambang di sisi kanan bawah --}}
        @if(Auth::check())
        <a href="#" class="fixed bottom-0 right-0 m-4" onclick="toggleTestimoniForm(event)">
            <img src="{{ asset('/assets/frontsite/images/buttonadd.png') }}" alt="Add Testimoni" class="w-16 h-16">            
        </a>

        {{-- Form Testimoni Pop-up --}}
        <div id="testimoniForm" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Add Testimoni</h2>
            <form>
            <div class="mb-4">
            <label for="job" class="block text-sm font-medium text-gray-700">Job</label>
            <input type="text" name="job" id="job" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
            <label for="study_program" class="block text-sm font-medium text-gray-700">Study Program</label>
            <input type="text" name="study_program" id="study_program" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
            <label for="force" class="block text-sm font-medium text-gray-700">Force</label>
            <input type="text" name="force" id="force" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
            <label for="headline" class="block text-sm font-medium text-gray-700">Headline</label>
            <input type="text" name="headline" id="headline" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
            <label for="video_link" class="block text-sm font-medium text-gray-700">Video Link</label>
            <input type="url" name="video_link" id="video_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="flex justify-end">
            <button type="button" class="mr-4 text-gray-500" onclick="toggleTestimoniForm(event)">Cancel</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
            </form>
            </div>
        </div>

        <script>
            function toggleTestimoniForm(event) {
            event.preventDefault();
            const testimoniForm = document.getElementById('testimoniForm');
            testimoniForm.classList.toggle('hidden');
            }
        </script>
        @endif
    </div>
</body>
@endsection
