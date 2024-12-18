@extends('layouts.default')

@section('title', 'system')

@section('content')
<main class="min-h-screen">
<style>
.search-form-container {
    max-width: 640px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.search-form-container form {
    width: 100%;
    position: relative;
}

.search-input {
    width: 100%;
    padding: 10px 16px;
    font-size: 16px;
    color: #333;
    border: 1px solid #bac1cf; /* Warna biru */
    border-radius: 25px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.search-input:focus {
    outline: none;
    border-color: #0D63F3; /* Warna biru lebih terang */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
}

.search-button {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    background-color: #0D63F3;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.search-button:hover {
    background-color: #0056b3;
}

.search-button:active {
    background-color: #004080;
}</style>
    <!-- Best Alumnis -->
    <section class="mt-4 lg:mt-16">
        {{-- form pencarian --}}
        <div class="container mx-auto mt-4 lg:mt-8">
            <div class="search-form-container">
                <form action="{{ route('category.system3') }}" method="GET">
                    <input
                        type="text"
                        name="search"
                        class="search-input"
                        placeholder="Cari..."
                        value="{{ request('search') }}">
                    {{-- <button type="submit" class="search-button">Cari</button> --}}
                </form>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
            <h1 class="text-[#1E2B4F] text-4xl font-semibold">Perancang UI/UX</h1>

                <!-- Alumni Cards -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">
                    @foreach($users as $user)
                        @if($user['photo']) <!-- Check if the user has a photo -->
                            <a href="{{ route('connected.index', ['userId' => $user['id']])}}" class="group">
                                <!-- Card Container -->
                                <div class="relative w-full rounded-2xl overflow-hidden mt-5" style="background-color: rgba(82, 95, 225, 0.1);">
                                    <!-- Image Section -->
                                    <div class="relative w-full h-[350px]">
                                        <img src="{{ asset('storage/' . $user['photo']) }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="{{ $user['name'] }}">
                                        <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                            <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                                        </div>
                                    </div>
                                    <!-- Name and Job Section -->
                                    <div class="p-6 mt-5 mb-5">
                                        <div class="text-black text-lg font-semibold pl-4">{{ $user['name'] }}</div>
                                        <div class="text-[#AFAEC3] mt-1 pl-4">{{ $user['job'] }}</div>
                                        <div class="text-[#AFAEC3] mt-1 pl-4">{{" "}}</div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
        </div>
        
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
                {{-- tambahkan Copyright --}}
                <div class="flex justify-center mt-10">
                    <p class="text-[#1E2B4F] mt-2">Copyright © ConnectAlumni. inc.</p>
                     </div>
                </div>
            </div>
        </section>
        
        <!-- End Social Media -->

    </section>
    <!-- End Best Alumnis -->
</main>
@endsection
