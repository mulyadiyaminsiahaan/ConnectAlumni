@extends('layouts.default')

@section('title', 'Testimoni')

@section('content')

<main class="min-h-screen mt-12">
    <section class="relative px-4 lg:px-14 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">

            <!-- Video Card -->
            <div class="relative bg-gray-100 rounded-lg h-56 flex items-center justify-center">
                <svg xmlns="{{ asset('/assets/frontsite/images/Video.svg') }}" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.197 3.773A1 1 0 017 14.07V9.931a1 1 0 011.555-.832l6.197 3.773a1 1 0 010 1.664z" />
                </svg>
            </div>

            <!-- Article Card -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" alt="Anne Hulli" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-lg font-medium text-[#1E2B4F]">Lulusan IT Del Sukses Raih Karir di Perusahaan Teknologi Global</h4>
                        <p class="text-sm text-[#AFAEC3]">Anne Hulli - FrontEnd Mandiri, Information System 2016</p>
                    </div>
                </div>
            </div>

            <!-- Article Card -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" alt="Anne Hulli" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-lg font-medium text-[#1E2B4F]">IT Del, Pondasi Karir Sukses di Bidang Data Science</h4>
                        <p class="text-sm text-[#AFAEC3]">Anne Hulli - FrontEnd Mandiri, Information System 2016</p>
                    </div>
                </div>
            </div>

            <!-- Video Card -->
            <div class="relative bg-gray-100 rounded-lg h-56 flex items-center justify-center">
                <svg xmlns="{{ asset('/assets/frontsite/images/Video.svg') }}" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.197 3.773A1 1 0 017 14.07V9.931a1 1 0 011.555-.832l6.197 3.773a1 1 0 010 1.664z" />
                </svg>
            </div>

        </div>
    </section>
</main>

@endsection
