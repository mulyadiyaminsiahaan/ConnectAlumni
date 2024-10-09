@extends('layouts.default')

@section('title', 'Category')

@section('content')
<main class="min-h-screen">
<div class="px-4 py-8">
    <form method="GET" action="#" class="items-start w-full max-w-sm hidden lg:ml-10 lg:flex lg:items-center ml-auto"> <!-- Menambahkan ml-auto -->
        <select name="filter" class="bg-white h-10 px-16 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
            <option value="">Select Filter....</option>
            <option value="popular">Most Popular</option>
            <option value="recent">Most Recent</option>
        </select>
        <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded">Apply</button>
    </form>
</div>

        <!-- Popular Categories -->
        <section class="mt-6" style="background-color: rgba(82, 95, 225, 0.1);">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h3 class="text-2xl font-semibold">Popular Categories</h3>
                <p class="text-[#A7B0B5] mt-2">Quick way to get your first experience</p>
        
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    <!-- Cards without database data -->
                    <a href="#" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">System Analyst</h5>
                        <p class="text-[#AFAEC3] mt-1">143 alumni</p>
                    </a>
        
                    <a href="#" class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Programmer</h5>
                        <p class="text-[#AFAEC3] mt-1">50 alumni</p>
                    </a>
        
                    <!-- Add more static categories as needed -->
                </div>
            </div>
        </section>
        

        <!-- Best Alumnis -->
        <section class="mt-4 lg:mt-16">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Best IT Expert</h3>
                <p class="text-[#A7B0B5] mt-2">Help your plan much better</p>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">

                    <a href="#" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor Name">
                            <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Sahala</div>
                                <div class="text-[#AFAEC3] mt-1">Programmer</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                {{-- <img src="{{ asset('/assets/frontsite/images/star.svg') }}"> --}}
                                {{-- <span class="block text-[#1E2B4F] font-medium">4.5</span> --}}
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor Name">
                            <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Sahala</div>
                                <div class="text-[#AFAEC3] mt-1">Programmer</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                {{-- <img src="{{ asset('/assets/frontsite/images/star.svg') }}"> --}}
                                {{-- <span class="block text-[#1E2B4F] font-medium">4.5</span> --}}
                            </div>
                        </div>
                    </a>

                    <a href="#" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor Name">
                            <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Sahala</div>
                                <div class="text-[#AFAEC3] mt-1">Programmer</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                {{-- <img src="{{ asset('/assets/frontsite/images/star.svg') }}"> --}}
                                {{-- <span class="block text-[#1E2B4F] font-medium">4.5</span> --}}
                            </div>
                        </div>
                    </a>

                    <a href="#" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('/assets/frontsite/images/doctor-1.jpeg') }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor Name">
                            <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Sahala</div>
                                <div class="text-[#AFAEC3] mt-1">Programmer</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                {{-- <img src="{{ asset('/assets/frontsite/images/star.svg') }}"> --}}
                                {{-- <span class="block text-[#1E2B4F] font-medium">4.5</span> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Card -->
            </div>
        </section>


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

    </main>
    <!-- End Content -->

@endsection

