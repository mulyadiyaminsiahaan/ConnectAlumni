@extends('layouts.default')

@section('title', 'Campus')

@section('content')

    <!-- Content -->
    <div class="relative w-full h-full">
        <img src="{{ asset('/assets/frontsite/images/IT_Del_Drone2.jpg') }}" 
            class="w-full h-full object-cover max-h-[580px]" 
            alt="Hero Image"/>
        <!-- Konten teks yang berada di atas gambar -->
        <div class="absolute inset-0 flex flex-col justify-center items-start text-white p-6 px-4 lg:px-14 py-16">
            <h1 class="mt-6 text-4xl text-lg font-semibold sm:text-5xl leading-normal font-poppins">
                Institut Teknologi Del
            </h1>
            <p class="text-2xl">Dinamika Kampus</p>
        </div>
    </div>

    <!-- Prodi -->
    <section style="background-color: rgba(82, 95, 225, 0.1);">
        <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
            <h3 class="text-3xl font-semibold">Program Study Institut Teknologi Del</h3>
            <p class="text-[#A7B0B5] mt-2">Informasi Lebih Lanjut Terkait Program Study Institut Teknologi Del</p>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                <!-- Cards without database data -->
                <a href="https://s1si.del.ac.id/" class="bg-white py-10 px-8 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/SIItdel.png') }}" alt="Sistem Informasi" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 500</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold mt-2">S1 Sistem Informasi</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                </a>

                <a href="https://www.instagram.com/hme_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/TEItdel.jpeg') }}" alt="Teknik Elektro" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 350</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Elektro</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                </a>

                <a href="https://himasti.delcom.org/" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/IFItdel.png') }}" alt="Informatika" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 450</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Informatika</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                </a>

                <a href="https://www.instagram.com/himatera_del/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/trpl.jpeg') }}" alt="Teknologi Rekayasa Perangkat Lunak" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 300</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">D4 Teknologi Rekayasa Perangkat Lunak</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                </a>

                <a href="https://www.instagram.com/himatif.itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/TIItdel.jpeg') }}" alt="Teknologi Informasi" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 380</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">D3 Teknologi Informasi</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                </a>

                <a href="https://www.instagram.com/himatek.itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/NM.jpeg') }}" alt="Teknologi Komputer" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 220</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">D3 Teknologi Komputer</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                </a>

                <a href="https://www.instagram.com/himator_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/BP2.jpg') }}" alt="" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 150</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Bioproses</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Bioteknologi</p>
                </a>

                <a href="https://www.instagram.com/himamera_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/MRItdel.jpg') }}" alt="Manajemen Rekayasa" class="w-full object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 300</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Manajemen Rekayasa</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Teknologi Industri</p>
                </a>

                <a href="https://www.instagram.com/metalurgidel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/metal3.png') }}" alt="" class="w-full h-64 object-contain rounded-t-2xl">
                    <div class="text-center mt-4">
                        <p class="text-[#A7B0B5]">Jumlah Mahasiswa: 120</p>
                    </div>
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Metalurgi</h5>
                    <p class="text-[#AFAEC3] mt-1">Fakultas Teknologi Industri</p>
                </a>     
            </div>
        </div>
    </section>
    <!-- End Prodi -->

    <!-- Berita -->
    <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
        <h2 class="text-3xl font-semibold " style="color: rgb(248, 111, 3); font-size: 40px;">Berita</h2>
        <p class="text-[#A7B0B5] mt-2">Selengkapnya Tentang Institut Teknologi Del</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
            <!-- Cards without database data -->
            <a href="https://www.del.ac.id/?p=15895" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                <img alt="Graduation ceremony with a large group of students" class="w-full h-46 object-cover" height="300" src="{{ asset('/assets/frontsite/images/e.jpeg') }}" width="400"/>
                <h5 class="text-[#1E2B4F] text-lg font-semibold">Mahasiswa IT Del Melaju ke Tingkat Nasional pada Kompetisi Debat Mahasiswa Indonesia (KDMI) 2024</h5>
                <p class="text-[#AFAEC3] mt-1">18 juli 2024</p>
            </a>

            <a href="https://www.del.ac.id/?p=15536" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                <img alt="Graduation ceremony with a large group of students" class="w-full h-48 object-cover" height="300" src="{{ asset('/assets/frontsite/images/j.jpg') }}" width="400"/>
                <h5 class="text-[#1E2B4F] text-lg font-semibold">Mahasiswa Teknik Elektro IT Del Berhasil Meraih Medali Emas Pada IDEA FEST 2024 Kategori Teknologi Pertanian</h5>
                <p class="text-[#AFAEC3] mt-1">14 maret 2024</p>
            </a>

            <a href="https://www.del.ac.id/?p=15043" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                <img alt="Graduation ceremony with a large group of students" class="w-full h-48 object-cover" height="300" src="{{ asset('/assets/frontsite/images/l.jpg') }}" width="400"/>
                <h5 class="text-[#1E2B4F] text-lg font-semibold">Wisuda 398 Lulusan Institut Teknologi Del</h5>
                <p class="text-[#AFAEC3] mt-1">25 september 2023</p>
            </a>
        
            <!-- Add more static categories as needed -->
        </div>
        <div class="bg-opacity-70 flex justify-center items-center">
            <a href="https://www.del.ac.id/?page_id=1006" target="_blank" class="block text-xs text-black font-medium px-4 py-2 rounded-full text-center mt-7" style="background-color: rgb(255, 164, 27);">Informasi lebih lanjut</a>
        </div>
    </div>
    </section>
    <!-- End Popular Categories -->

@endsection
