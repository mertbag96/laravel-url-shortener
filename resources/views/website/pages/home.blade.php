<x-website.layouts.app title="Shorten your URLs in seconds for free">
    <!-- Hero -->
    <div class="px-4 py-12 bg-white border border-dark/20 rounded-lg shadow-sm flex flex-col justify-center items-center text-center space-y-4">
        <!-- Welcome -->
        <div class="flex flex-col justify-center items-center space-y-4">
            <!-- Title -->
            <h1 class="text-xl md:text-3xl text-primary">
                Welcome to {{ config('app.name') ?? 'LUS' }}
            </h1>

            <!-- Description -->
            <p class="w-full xs:w-[90%] sm:w-3/4 xl:w-full text-dark text-center">
                With {{ config('app.name') ?? 'LUS' }} -
                Laravel URL Shortener, shorten your links in seconds for free.
            </p>
        </div>

        <!-- Form -->
        <form
            method="POST"
            action="{{ route('website.url.shorten') }}"
            class="w-full md:w-[90%] xl:w-2/3 flex flex-col space-y-4"
        >
            @csrf

            <!-- Input -->
            <input
                type="text"
                name="url"
                class="w-full p-4 border border-dark/10 rounded-md shadow-sm text-dark text-xs md:text-sm focus:ring focus:ring-dark/90 focus:outline-none"
                placeholder="Enter the URL to be shortened"
                value="{{ old('url') }}"
                required
            />

            @error('url')
                <small class="text-xs text-primary text-left animate-fade-in">
                    {{ $message }}
                </small>
            @enderror

            <!-- Button -->
            <button
                type="submit"
                class="w-full p-3 bg-primary border border-dark/10 rounded-lg shadow-sm text-md text-white hover:bg-red-600 transition-colors duration-300 cursor-pointer"
            >
                Shorten URL
            </button>

            @if (session('short_url'))
                <div class="border-2 border-green-300 bg-green-200 shadow-xs rounded-lg flex flex-col lg:flex-row justify-center items-center gap-2 p-4 text-green-700">
                    <span>Shortened URL:</span>

                    <a
                        target="_blank"
                        href="{{ session('short_url') }}"
                        class="font-medium underline"
                    >
                        {{ session('short_url') }}
                    </a>
                </div>
            @endif
        </form>
    </div>

    <!-- Cards -->
    <div class="px-4 py-12">
        <!-- Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Card 1 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="smile"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Easy</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Shorten your links instantly with a smooth, hassle-free experience built for everyone
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="link"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Shortened</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Transform long URLs into sleek, powerful links that look great and share even better
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="shield-check"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Secure</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Share with confidence — your links are protected by trusted, modern security standards
                </p>
            </div>

            <!-- Card 4 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="chart-no-axes-combined"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Statistics</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Check the number of clicks that your shortened URLs received with other details
                </p>
            </div>

            <!-- Card 5 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="gauge"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Fast</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Paste, click, done — your short URL is ready in miliseconds - before you blink
                </p>
            </div>

            <!-- Card 6 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i
                    data-lucide="monitor-smartphone"
                    class="w-12 h-12 text-primary/75"
                ></i>

                <!-- Title -->
                <h3 class="text-primary text-xl">Devices</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    User friendly and compatible with smartphones, tablets and desktop
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <x-website.partials.faq />
</x-website.layouts.app>
