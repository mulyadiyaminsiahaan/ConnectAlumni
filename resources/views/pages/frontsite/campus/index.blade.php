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
                <p class="text-2xl">Campus Life</p>
            </div>
        </div>


         <!--  Ptodi -->
         <section style="background-color: rgba(82, 95, 225, 0.1);">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h3 class="text-3xl font-semibold">Program Studi</h3>
                <p class="text-[#A7B0B5] mt-2">Institut Teknologi Del</p>
        
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    <!-- Cards without database data -->
                    <a href="https://s1si.del.ac.id/" class="bg-white py-10 px-8 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/SIItdel.png') }}" alt="Sistem Informasi" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Sistem Informasi</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                    </a>
        
                    <a href="https://www.instagram.com/hme_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/TEItdel.jpeg') }}" alt="Teknik Elektro" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Elektro</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                    </a>

                    {{-- add more cards without database --}}
                    <a href="https://himasti.delcom.org/" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <img src="{{ asset('/assets/frontsite/images/IFItdel.png') }}" alt="Informatika" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Informatika</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Informatika & Teknik Elektro</p>
                    </a>

                    <a href="https://www.instagram.com/himatera_del/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/trpl.jpeg') }}" alt="Teknologi Rekayasa Perangkat Lunak" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">D4 Teknologi Rekayasa Perangkat Lunak</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                    </a>

                    <a href="https://www.instagram.com/himatif.itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/TIItdel.jpeg') }}" alt="Teknologi Informasi" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">D3 Teknologi Informasi</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                    </a>

                    <a href="https://www.instagram.com/himatek.itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/NM.jpeg') }}" alt="Teknologi Komputer" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">D3 Teknologi Komputer</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Vokasi</p>
                    </a>

                    <a href="https://www.instagram.com/himator_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/BP2.jpg') }}" alt="" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Bioproses</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Bioteknologi</p>
                    </a>

                    <a href="https://www.instagram.com/himamera_itdel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/MRItdel.jpg') }}" alt="Manajemen Rekayasa" class="w-full object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Manajemen Rekayasa</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Teknologi Industri</p>
                    </a>

                    <a href="https://www.instagram.com/metalurgidel/?hl=en" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img src="{{ asset('/assets/frontsite/images/metal3.png') }}" alt="" class="w-full h-64 object-contain rounded-t-2xl">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">S1 Teknik Metalurgi</h5>
                        <p class="text-[#AFAEC3] mt-1">Fakultas Teknologi Industri</p>
                    </a>
        

                </div>
            </div>
        </section>


            </section>
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h2 class="text-3xl font-semibold " style="color: rgb(248, 111, 3); font-size: 40px;">News</h2>
                <p class="text-[#A7B0B5] mt-2">Institut Teknologi Del</p>
        
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    <!-- Cards without database data -->
                    <a href="#" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <img alt="Graduation ceremony with a large group of students" class="w-full h-46 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/dB321FMoOUY2Odz3YFuKoTkBUQJCoMpgSD7eO5tXDFVF1ekTA.jpg" width="400"/>
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Wisuda 398 Lulusan Institut Teknologi Del</h5>
                        <p class="text-[#AFAEC3] mt-1">3 Oktober 2024</p>
                    </a>
        
                    <a href="#" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img alt="Graduation ceremony with a large group of students" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/dB321FMoOUY2Odz3YFuKoTkBUQJCoMpgSD7eO5tXDFVF1ekTA.jpg" width="400"/>
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Wisuda 398 Lulusan Institut Teknologi Del</h5>
                        <p class="text-[#AFAEC3] mt-1">3 Oktober 2024</p>
                    </a>

                    <a href="#" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                    <img alt="Graduation ceremony with a large group of students" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/dB321FMoOUY2Odz3YFuKoTkBUQJCoMpgSD7eO5tXDFVF1ekTA.jpg" width="400"/>
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Wisuda 398 Lulusan Institut Teknologi Del</h5>
                        <p class="text-[#AFAEC3] mt-1">3 Oktober 2024</p>
                    </a>
        
                    <!-- Add more static categories as needed -->
                </div>
                <div class="bg-opacity-70 flex justify-center items-center">
                    <a href="https://www.del.ac.id/?page_id=1006" target="_blank" class="block text-xs text-black font-medium px-4 py-2 rounded-full text-center mt-7" style="background-color: rgb(255, 164, 27);">More Info</a>
                </div>
            </div>
        </section>
        
        <!-- End Popular Categories -->


                <!-- Static Alumni Cards without database data -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">

                    <a href="#" class="group">
                        
                    </a>

                </div>
                <!-- End Card -->
            </div>
        </section>
        <!-- End Best Alumnis -->

        <!-- Social Media -->
        <section class="mt-4 lg:mt-16" style="background-color: rgba(255, 164, 27, 0.35);">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Follow Us on Social Media</h3>
                <p class="text-[#A7B0B5] mt-2">Stay connected with us</p>
        
                <div class="flex justify-center mt-10">
                    <!-- Menambahkan gambar di tengah -->
                    <img src="{{ asset('/assets/frontsite/images/logo.png') }}" alt="Social Media" class="mx-auto mb-10 w-48 h-auto">
                </div>
        
                <div class="flex justify-center space-x-8 mt-10"> <!-- Added mt-10 for top margin -->
                    <a href="#">
                        <img src="{{ asset('/assets/frontsite/images/facebook.svg') }}" alt="Facebook" class="w-8 h-8 mx-4">
                    </a>
                    <a href="iadelofc@gmail.com">
                        <img src="{{ asset('/assets/frontsite/images/envelope-at-fill.svg') }}" alt="Email" class="w-8 h-8 mx-4">
                    </a>
                    <a href="https://www.instagram.com/iadelofc/profilecard/?igsh=bHNoMDQ1eHlrODJz">
                        <img src="{{ asset('/assets/frontsite/images/instagram.svg') }}" alt="Instagram" class="w-8 h-8 mx-4">
                    </a>
                    <a href="#">
                        <img src="{{ asset('/assets/frontsite/images/whatsapp.svg') }}" alt="WhatsApp" class="w-8 h-8 mx-4">
                    </a>
                </div>
                </div>
            </div>
        </section>
        
        <!-- End Social Media -->

    </main>
    <!-- End Content -->

@endsection
