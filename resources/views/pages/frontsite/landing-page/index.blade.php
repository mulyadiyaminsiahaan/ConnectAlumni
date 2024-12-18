@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <!-- Content -->
    <main class="min-h-screen">

        {{-- @if(Auth::check())
            <script>
                window.location.href = "{{ route('index') }}";
            </script>
        @endif --}}

        <!-- Hero -->
        <section class="relative mt-12">
            <!-- Hero Image -->
            <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0"
            aria-hidden="true">
                <img src="{{ asset('/assets/frontsite/images/hero-image1.png') }}" class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="Heroz Image"/>
                <div class="text-center absolute bottom-0 -left-20 -translate-y-14 bg-white px-7 py-5 rounded-xl shadow-2xl">
                    <h5 class="font-medium text-[#1E2B4F]">Johannes</h5>
                    <p class="text-xs text-[#AFAEC3] mt-1">Alumni Del yang mengabdi menjadi Dosen</p>
                    {{-- <a  class="block text-xs text-[#1E2B4F] font-medium bg-[#F2F6FE] px-4 py-2 rounded-full text-center mt-7">Connected</a> --}}
                </div>
            </div>

            <!-- Hero Description -->
            <!-- Bubble Animation -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-1/4 w-32 h-32 bg-blue-300 rounded-full opacity-50 animate-bounce"></div>
                <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-blue-400 rounded-full opacity-50 animate-bounce delay-200"></div>
                <div class="absolute bottom-0 right-1/4 w-40 h-40 bg-blue-500 rounded-full opacity-50 animate-bounce delay-400"></div>
            </div>
            <!-- End Bubble Animation -->
            <div class="relative mx-auto max-w-7xl px-4 lg:px-14 lg:py-16">
                <div class="lg:grid lg:grid-cols-12 lg:gap-12 mt-32">
                    <div class="lg:col-span-6">

                        <!-- Label New -->
                        <h1>
                            {{-- <div class="flex items-center">
                                <span class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">New</span>
                                <span class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4">Emergency call feature updated</span>
                            </div> --}}

                            <span class="mt-6 block text-4xl font-semibold sm:text-5xl">
                                <span class="block text-[#1E2B4F] leading-normal font-poppins">Connect to Your Alumni. <br /> </span>
                            </span>
                        </h1>
                        <!-- End Label New -->

                        <!-- Text -->
                        <div class="flex flex-wrap gap-16 mt-8">
                            {{-- <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon"/>
                                </div> --}}
                                {{-- <div>
                                    <h5 class="text-[#1E2B4F] text-lg font-medium">Best Recipe</h5>
                                    <p class="text-[#AFAEC3]">for your medicine</p>
                                </div> --}}
                            </div>
                            {{-- <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon"/>
                                </div> --}}
                                <div>
                                    {{-- <h5 class="text-[#1E2B4F] text-lg font-medium">Free Consultation</h5>
                                    <p class="text-[#AFAEC3]">as we promised</p> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Text -->

                        <!-- CTA Button -->
                        <div class="grid lg:flex flex-wrap mt-4 gap-5">
                            @if(Auth::check())
                                <span class="text-lg font-medium text-center text-[#0D63F3] italic">Bantu masyarakat dengan membuat testimoni</span>
                            @else
                                <a href="{{ route('register') }}" class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3">Sign Up</a>
                            @endif
                        </div>
                        <!-- CTA Button -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <!-- Popular Categories -->
        <section class="mt-32" style="background-color: rgba(82, 95, 225, 0.1);">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h3 class="text-2xl font-semibold">Kategori Populer</h3>
                <p class="text-[#A7B0B5] mt-2">Cara cepat untuk mendapatkan pengalaman pertama Anda</p>
        
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    <!-- Cards without database data -->
                    <a href="{{ route('category.index', ['search' => 'System Analyst']) }}" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Sistem Analis</h5>
                        <p class="text-[#AFAEC3] mt-1">{{ $Kategori1 }} alumni</p>
                    </a>
        
                    <a href="{{ route('category.index', ['search' => 'Programmer']) }}" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Programmer</h5>
                        <p class="text-[#AFAEC3] mt-1">{{ $Kategori2 }} alumni</p>
                    </a>

                    {{-- add more cards without database --}}
                    <a href="{{ route('category.index', ['search' => 'UI/UX Designer']) }}" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">UI/UX Designer</h5>
                        <p class="text-[#AFAEC3] mt-1">{{ $Kategori3 }} alumni</p>
                    </a>

                    <a href="{{ route('category.index', ['search' => 'Data Analyst']) }}" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Data Analis</h5>
                        <p class="text-[#AFAEC3] mt-1">{{ $Kategori4 }} alumni</p>
                    </a>

                    <a href="{{ route('category.index', ['search' => 'Network Engineer']) }}" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Network Engginer</h5>
                        <p class="text-[#AFAEC3] mt-1">{{ $Kategori5 }} alumni</p>
                    </a>
        
                    <!-- Add more static categories as needed -->
                </div>
            </div>
        </section>
        
        <!-- End Popular Categories -->

        <!-- Best Alumnis -->
        <section class="mt-4 lg:mt-16">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Ahli IT Terbaik</h3>
                <p class="text-[#A7B0B5] mt-2">Bantu rencanamu menjadi lebih baik</p>

                <!-- Alumni Cards -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">
                    @php
                        $users = $users->shuffle()->take(4); // Shuffle and take only 4 users
                    @endphp
                    @foreach($users as $user)
                        @if($user->photo) <!-- Check if the user has a photo -->
                            <a href="{{ route('connected.index', ['userId' => $user->id]) }}" class="group">
                                <!-- Card Container -->
                                <div class="relative w-full rounded-2xl overflow-hidden mt-5" style="background-color: rgba(82, 95, 225, 0.1);">
                                    <!-- Image Section -->
                                    <div class="relative w-full h-[350px]">
                                        <img src="{{ asset('storage/' . $user->photo) }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="{{ $user->name }}">
                                        <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                            <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                                        </div>
                                    </div>
                                    <!-- Name and Job Section -->
                                    <div class="p-6 mt-5 mb-5">
                                        <div class="text-black text-lg font-semibold pl-4">{{ $user->name }}</div>
                                        <div class="text-[#AFAEC3] mt-1 pl-4">{{ $user->job }}</div>
                                        <div class="text-[#AFAEC3] mt-1 pl-4">{{" "}}</div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
        </section>
        <!-- End Best Alumnis -->

        <!-- Social Media -->
        <section class="mt-4 lg:mt-16" style="background-color: rgba(255, 164, 27, 0.35);">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Ikuti Kami di Media Sosial</h3>
                <p class="text-[#A7B0B5] mt-2">Tetap terhubung dengan kami</p>
        
                <div class="flex justify-center mt-10">
                    <!-- Menambahkan gambar di tengah -->
                    <img src="{{ asset('/assets/frontsite/images/logo.png') }}" alt="Social Media" class="mx-auto mb-10 w-48 h-auto">
            </div>
        
                <div class="flex justify-center space-x-8 mt-10"> <!-- Added mt-10 for top margin -->
                    <a href="https://web.facebook.com/iadelofc">
                        <img src="{{ asset('/assets/frontsite/images/facebook.svg') }}" alt="Facebook" class="w-8 h-8 mx-4">
                    </a>
                    <a href="iadelofc@gmail.com">
                        <img src="{{ asset('/assets/frontsite/images/envelope-at-fill.svg') }}" alt="Email" class="w-8 h-8 mx-4">
                    </a>
                    <a href="https://www.instagram.com/iadelofc/?igsh=bHNoMDQ1eHlrODJz">
                        <img src="{{ asset('/assets/frontsite/images/instagram.svg') }}" alt="Instagram" class="w-8 h-8 mx-4">
                    </a>
                    <a href="#">
                        <img src="{{ asset('/assets/frontsite/images/whatsapp.svg') }}" alt="WhatsApp" class="w-8 h-8 mx-4">
                    </a>
                </div>
                {{-- tambahkan Copyright --}}
                <div class="flex justify-center mt-10">
                    <p class="text-[#1E2B4F] mt-2">Copyright © ConnectAlumni. inc.</p>
                     </div>
                </div>
            </div>
        </section>
        
        <!-- End Social Media -->

    </main>
    <!-- End Content -->

@endsection
