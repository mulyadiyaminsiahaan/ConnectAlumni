@extends('layouts.default')

@section('title', 'Edit Profil')

@section('content')
    <main class="container mx-auto mt-8 flex">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
        <div class="w-1/3 flex flex-col items-center">
            <div class="relative">
                <!-- Display current or default profile picture -->
                <img class="w-48 h-48 rounded-full border-4 border-blue-500" src="{{ asset('storage/' . $user->photo) }}" alt="Profile Photo">
            </div>
        </div>

        <div class="w-2/3 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-gray-500 text-lg">Edit Profile</h2>
            <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4 mt-8">
                    <!-- Full Name Field -->
                    <div>
                        <label for="name" class="block text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Job Field -->
                    <div>
                        <label for="job" class="block text-gray-700">Job</label>
                        <input type="text" name="job" id="job" value="{{ old('job', $user->job) }}" class="w-full px-4 py-2 mt-2 border rounded-md">
                        @error('job') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="contact" class="block text-gray-700">Phone</label>
                        <input type="text" name="contact" id="contact" value="{{ old('contact', $user->contact) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                        @error('contact') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Birth Date Field -->
                    <div>
                        <label for="birth_of_date" class="block text-gray-700">Birth Date</label>
                        <input type="date" name="birth_of_date" id="birth_of_date" value="{{ old('birth_of_date', $user->birth_of_date) }}" class="w-full px-4 py-2 mt-2 border rounded-md">
                        @error('birth_of_date') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Status Field -->
                    <div>
                        <label for="status" class="block text-gray-700">Status</label>
                        <input type="text" name="status" id="status" value="{{ old('status', $user->status) }}" class="w-full px-4 py-2 mt-2 border rounded-md">
                        @error('status') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- About Field -->
                    <div class="col-span-2">
                        <label for="about" class="block text-gray-700">About Me</label>
                        <textarea name="about" id="about" rows="4" class="w-full px-4 py-2 mt-2 border rounded-md">{{ old('about', $user->about) }}</textarea>
                        @error('about') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Profile Photo Field -->
                    <div class="col-span-2">
                        <label for="photo" class="block text-gray-700">Profile Photo</label>
                        <input type="file" name="photo" id="photo" class="w-full px-4 py-2 mt-2 border rounded-md">
                        @error('photo') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-8">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full shadow-lg">Save Changes</button>
                </div>
                @if(session('success'))
                <div id="successNotification" class="fixed top-4 right-4 bg-green-500 text-white p-4 rounded-lg">
                    {{ session('success') }}
                </div>
                @endif
            </form>
        </div>
    </main>
@endsection