@extends('layouts.default')

@section('title', 'Category')

@section('content')
<main class="min-h-screen">
    <div class="px-4 py-8">
        <form method="GET" action="#" class="items-start w-full max-w-sm hidden lg:ml-10 lg:flex lg:items-center ml-auto">
            <select name="filter" class="bg-white h-10 px-16 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                <option value="">Select Filter....</option>
                <option value="popular" @if(request('filter') == 'popular') selected @endif>Most Popular</option>
                <option value="recent" @if(request('filter') == 'recent') selected @endif>Most Recent</option>
            </select>
            <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded">Apply</button>
        </form>
    </div>

    <!-- Best Alumnis -->
    <section class="mt-4 lg:mt-16">
        <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
            <h3 class="text-[#1E2B4F] text-2xl font-semibold">Best IT Expert</h3>
            <p class="text-[#A7B0B5] mt-2">Help your plan much better</p>

            <!-- Alumni Cards -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">
                @foreach($users as $user)
                    @if($user->photo) <!-- Check if the user has a photo -->
                        <a href="{{ route('connected.index') }}" class="group">
                            <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                                <img src="{{ asset('storage/' . $user->photo) }}" class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="{{ $user->name }}">
                                <div class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                    <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Connected</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mt-5">
                                <div>
                                    <div class="text-[#1E2B4F] text-lg font-semibold">{{ $user->name }}</div>
                                    <div class="text-[#AFAEC3] mt-1">{{ $user->job }}</div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    {{-- You can add a rating or any other feature here --}}
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Best Alumnis -->
</main>
@endsection

