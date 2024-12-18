@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <div class="min-h-screen">
        <div class="grid lg:grid-cols-2">
            <!-- Form-->
            <div class="px-4 lg:px-[91px] pt-10">

                <!-- Logo Brand -->
                <a href="{{ route('index') }}" class="flex-shrink-0 inline-flex items-center">
                    <img
                        class="h-12 lg:h-16"
                        src="{{ asset('/assets/frontsite/images/logo.png') }}"
                        alt="Connect Alumni Logo"
                    />
                </a>

                <div class="flex flex-col justify-center py-14 h-screen lg:min-h-screen">
                    <h2 class="text-[#1E2B4F] text-4xl font-semibold leading-normal">
                        Share Testimoni <br />
                        Like Expert
                    </h2>

                    <div class="mt-12">

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Form input -->
                        <form method="POST" action="{{ route('post.login') }}" class="grid gap-6">

                            {{-- token here --}}
                            @csrf

                            <label class="block">
                                <input
                                    for="email" type="email" id="email" name="email"
                                    class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                    placeholder="Email Address" value="{{ old('email', Cookie::get('email')) }}" required autofocus
                                />

                                @if ($errors->has('email'))
                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                                @endif
                            </label>

                            <label class="block">
                                <input
                                    for="password" type="password" id="password" name="password"
                                    class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                    placeholder="Password" value="{{ old('password', Cookie::get('password')) }}"
                                />

                                @if ($errors->has('password'))
                                    <p class="text-red mb-3 text-sm">{{ $errors->first('password') }}</p>
                                @endif
                            </label>

                            <div class="block mt-4">
                                <label for="remember" class="flex items-center">
                                    <input id="remember" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                                </label>
                            </div>
                                

                            <div class="mt-2 grid gap-6"> <!-- Ubah mt-3 menjadi mt-2 untuk mendekatkan jarak -->
                                <button class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full">
                                    Sign In
                                </button>
                                <a href="{{ route('register') }}" class="text-center text-lg text-[#1E2B4F] font-medium bg-[#F2F6FE] px-10 py-4 rounded-full">
                                    Sign Up
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- End Form -->

            <!-- Qoute -->
            <div class="hidden sm:block bg-[#F9FBFC]">
                <div class="flex flex-col justify-center h-full px-24 pt-10 pb-20">
                    <div class="relative">
                        <div class="relative top-0 -left-5 mb-7">
                            <img
                                src="{{ asset('/assets/frontsite/images/blockqoutation.svg') }}"
                                class="h-[30px]"
                                alt=""
                            />
                        </div>

                        <p class="text-2xl leading-loose">
                            ConnectAlumni telah membantu saya 
                            dapat terhubung dengan mahasiswa yang
                            penasaran dengan dunia kerja.
                        </p>

                        <div class="flex-shrink-0 group block mt-7">
                            <div class="flex items-center">
                                <div class="ring-1 ring-[#0D63F3] ring-offset-4 rounded-full">
                                    <img
                                        class="inline-block h-14 w-14 rounded-full"
                                        src="{{ asset('/assets/frontsite/images/foto4.png') }}"
                                        alt=""
                                    />
                                </div>
                                <div class="ml-5">
                                    <p class="font-medium text-[#1E2B4F]">Suprinto</p>
                                    <p class="text-sm text-[#AFAEC3]">Programmer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Qoute -->
        </div>
    </div>

@endsection
