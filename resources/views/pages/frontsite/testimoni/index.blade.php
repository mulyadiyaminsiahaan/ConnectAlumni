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
    </div>
</body>
@endsection
