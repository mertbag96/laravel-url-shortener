@extends('app')

@section('content')
    <div class="text-center">
        <!-- Title -->
        <h1 class="text-2xl md:text-4xl font-semibold text-primary">
            Welcome to {{ config('app.name') ?? 'LUS' }}
        </h1>

        <!-- Description -->
        <p class="mt-4 mb-8 text-md md:text-lg text-dark">
            With {{ config('app.name') ?? 'LUS' }}, shorten your links in seconds for free.
        </p>

        <!-- Form -->
        <div class="w-full bg-white border border-dark/10 p-6 mb-20 rounded-sm shadow-sm">
            <!-- Title -->
            <h2 class="font-semibold text-dark text-xl md:text-2xl mb-4">Shorten your URLs easily</h2>

            <!-- Form -->
            <form
                method="POST"
                action="{{ route('shorten-url') }}"
                class="w-full flex flex-col space-y-4"
            >
                @csrf

                <!-- Input -->
                <input
                    type="text"
                    name="url"
                    class="w-full border-2 border-dark/10 rounded-sm shadow-sm text-dark p-4 focus:border-primary focus:outline-none"
                    placeholder="Enter the URL to be shortened"
                    value="{{ old('url') }}"
                    required
                />

                @error('url')
                    <small class="font-medium text-sm text-primary text-left">
                        {{ $message }}
                    </small>
                @enderror

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full p-4 bg-primary border-2 border-primary rounded-sm shadow-sm font-semibold text-lg text-light hover:bg-primary/90 transition-colors duration-200 cursor-pointer"
                >
                    Shorten URL
                </button>

                @if (session('short_url'))
                    <div class="bg-green-100 border border-green-200 rounded-sm shadow-xs flex flex-col lg:flex-row justify-center items-center gap-2 p-4 text-green-700">
                        <span class="font-semibold">Shortened URL:</span>
                        <a
                            href="{{ session('short_url') }}"
                            target="_blank"
                            class="font-medium underline"
                        >
                            {{ session('short_url') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>

        <!-- Cards -->
        <div class="px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Card 1 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="smile" class="w-12 h-12 text-dark/50"></i>

                <!-- Title -->
                <h3 class="font-semibold text-dark text-xl">Easy</h3>

                <!-- Description -->
                <p>Shorten your links instantly with a smooth, hassle-free experience built for everyone</p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="link" class="w-12 h-12 text-dark/50"></i>

                <!-- Title -->
                <h3 class="font-semibold text-dark text-xl">Shortened</h3>

                <!-- Description -->
                <p>Transform long URLs into sleek, powerful links that look great and share even better</p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="shield-check" class="w-12 h-12 text-dark/50"></i>

                <!-- Title -->
                <h3 class="font-semibold text-dark text-xl">Secure</h3>

                <!-- Description -->
                <p>Share with confidence — your links are protected by trusted, modern security standards</p>
            </div>
        </div>
    </div>
@endsection
