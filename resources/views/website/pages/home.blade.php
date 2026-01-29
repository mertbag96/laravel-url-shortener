@extends('website.layouts.app')

@section('title', 'Shorten your URLs in seconds for free')

@section('content')
    <!-- Hero -->
    <div class="relative overflow-hidden px-4 py-8 bg-white border border-dark/20 rounded-lg shadow-sm flex flex-col justify-center items-center text-center space-y-4">
        <!-- Decorations -->
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute -top-24 -left-24 w-40 h-40 md:w-50 md:h-50 bg-linear-to-br from-primary/20 to-red-300/20 rounded-full blur-3xl"></div>

            <div class="absolute -bottom-24 -right-24 w-24 h-24 md:w-50 md:h-50 bg-linear-to-tr from-red-200/20 to-primary/20 rounded-full blur-3xl"></div>

            <div class="absolute top-1/3 right-1/4 w-32 h-32 md:w-48 md:h-48 bg-primary/15 sm:bg-primary/10 rounded-full blur-2xl"></div>
        </div>

        <!-- Welcome -->
        <div class="flex flex-col justify-center items-center space-y-4">
            <!-- Title -->
            <h1 class="text-xl md:text-3xl font-semibold text-primary">
                Welcome to {{ config('app.name') ?? 'LUS' }}
            </h1>

            <!-- Description -->
            <p class="w-full xs:w-[90%] sm:w-3/4 xl:w-full text-dark text-center">
                With {{ config('app.name') ?? 'LUS' }}
                (Laravel URL Shortener), shorten your links
                in seconds — completely free.
            </p>
        </div>

        <!-- Form -->
        <form
            method="POST"
            action="{{ route('shorten-url') }}"
            class="w-full md:w-[90%] xl:w-2/3 flex flex-col space-y-4"
        >
            @csrf

            <!-- Input -->
            <input
                type="text"
                name="url"
                class="w-full p-4 border border-dark/10 rounded-md shadow-sm text-dark text-xs md:text-sm focus:ring-2 focus:ring-dark/25 focus:outline-none"
                placeholder="Enter the URL to be shortened"
                value="{{ old('url') }}"
                required
            />

            @error('url')
                <small class="font-medium text-xs text-primary text-left animate-fade-in">
                    {{ $message }}
                </small>
            @enderror

            <!-- Button -->
            <button
                type="submit"
                class="w-full p-3 bg-primary border border-dark/10 rounded-lg shadow-sm font-semibold text-md text-white hover:bg-red-600 transition-colors duration-300 cursor-pointer"
            >
                Shorten URL
            </button>

            @if (session('short_url'))
                <div class="border-2 border-green-300 bg-green-200 shadow-xs rounded-lg flex flex-col lg:flex-row justify-center items-center gap-2 p-4 text-green-700">
                    <span class="font-semibold">Shortened URL:</span>

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

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Statistic 1 -->
        <div class="relative overflow-hidden px-4 py-12 bg-white border-2 border-primary/75 rounded-2xl shadow-sm flex justify-center items-center">
            <!-- Icon -->
            <i data-lucide="link" class="absolute left-8 top-8 w-24 h-24 text-primary/75"></i>

            <!-- Value -->
            <span
                data-target="1000"
                class="pl-24 font-bold text-5xl text-primary/75 text-center counter"
            >
                0
            </span>
        </div>

        <!-- Statistic 2 -->
        <div class="relative overflow-hidden px-4 py-12 bg-white border-2 border-primary/75 rounded-2xl shadow-sm flex justify-center items-center">
            <!-- Icon -->
            <i data-lucide="mouse-pointer-click" class="absolute left-8 top-8 w-24 h-24 text-primary/75"></i>

            <!-- Value -->
            <span
                data-target="15000"
                class="pl-24 font-bold text-5xl text-primary/75 text-center counter"
            >
                0
            </span>
        </div>

        <!-- Statistic 3 -->
        <div class="relative overflow-hidden px-4 py-12 bg-white border-2 border-primary/75 rounded-2xl shadow-sm flex justify-center items-center">
            <!-- Icon -->
            <i data-lucide="users" class="absolute left-8 top-8 w-24 h-24 text-primary/75"></i>

            <!-- Value -->
            <span
                data-target="250"
                class="pl-24 font-bold text-5xl text-primary/75 text-center counter"
            >
                0
            </span>
        </div>
    </div>

    <!-- Cards -->
    <div class="px-4 py-8 bg-white border border-dark/20 rounded-lg shadow-sm">
        <!-- Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="smile" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Easy</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Shorten your links instantly with a smooth, hassle-free experience built for everyone
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="link" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Shortened</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Transform long URLs into sleek, powerful links that look great and share even better
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="shield-check" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Secure</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Share with confidence — your links are protected by trusted, modern security standards
                </p>
            </div>

            <!-- Card 4 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="chart-no-axes-combined" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Statistics</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Check the number of clicks that your shortened URLs received with other details
                </p>
            </div>

            <!-- Card 5 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="gauge" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Fast</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    Paste, click, done — your short URL is ready in miliseconds - before you blink
                </p>
            </div>

            <!-- Card 6 -->
            <div class="flex flex-col justify-center items-center space-y-2 text-center">
                <!-- Icon -->
                <i data-lucide="monitor-smartphone" class="w-12 h-12 text-primary/75"></i>

                <!-- Title -->
                <h3 class="font-medium text-primary text-xl">Devices</h3>

                <!-- Description -->
                <p class="px-4 text-sm text-dark/85">
                    User friendly and compatible with smartphones, tablets and desktop
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="px-4 py-8 bg-white border border-dark/20 rounded-lg shadow-sm space-y-4">
        <!-- Title -->
        <h1 class="font-semibold text-primary text-lg text-center">
            Frequently Asked Questions
        </h1>

        <!-- Item 1 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                What is LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                LUS (short for Laravel URL Shortener) is a fast, simple, and free online tool that helps you turn long, hard-to-share
                web addresses into clean, compact links. Whether you’re posting on social media, sending messages, or adding links to
                marketing emails, LUS makes your URLs more manageable, easier to remember, and more professional looking.
            </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                How does it work?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Using LUS is intentionally simple. You start by pasting any long URL into the input field on the homepage and clicking
                the Shorten URL button. In just a moment, LUS generates a unique short link that points to your original address.
            </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Is LUS free to use?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Yes, LUS is completely free to use. You can shorten as many links as you want without paying anything or creating an
                account. There are no hidden fees, subscriptions, or surprise limitations. Our goal is to make link sharing fast,
                accessible, and effortless for everyone.
            </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Do shortened links expire?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                No. Links created with LUS do not expire. Once a short URL is generated, it will continue to work indefinitely unless it
                violates our usage policies. This makes LUS ideal for long-term sharing, bookmarks, and permanent references.
            </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Can I track my link's activity?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Yes. LUS automatically tracks basic click statistics for each shortened URL. This allows you to see how often your link
                is being accessed, which can be helpful for understanding engagement and reach without needing complex analytics tools.
            </div>
        </div>

        <!-- Item 6 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Is it safe to use LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Absolutely. LUS is built with security in mind and follows modern web standards to ensure safe redirection and data
                handling. We actively prevent abusive or malicious use to keep the platform reliable and trustworthy for everyone.
            </div>
        </div>

        <!-- Item 7 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Do I need to create an account?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                No account is required. LUS is designed for instant use — simply paste your URL, shorten it, and share. This keeps the
                experience fast and hassle-free, especially for users who just need a quick solution.
            </div>
        </div>

        <!-- Item 8 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button
                type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer"
            >
                Why should I use LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Short links look cleaner, are easier to share, and are less likely to break when sent through messaging apps or social
                platforms. With LUS, your links are more readable, more professional, and easier for people to trust and click.
            </div>
        </div>
    </div>
@endsection
