@extends('website.layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="px-4 py-8 bg-white border border-dark/20 rounded-lg shadow-sm flex flex-col justify-center items-center">
        <!-- Title -->
        <h1 class="font-semibold text-xl lg:text-2xl text-primary text-center mb-4">Contact Us</h1>

        <!-- Description -->
        <p class="mb-6 font-normal text-sm text-center">
            Have a question, feedback, or issue? Feel free to contact us using the form below.
        </p>

        <!-- Form -->
        <form
            method="POST"
            action="{{ route('website.contact.store') }}"
            class="relative overflow-hidden w-full lg:w-[85%] space-y-4 bg-white border border-dark/20 p-6 rounded-lg shadow-sm"
        >
            @csrf

            <!-- Decorations -->
            <div class="pointer-events-none absolute inset-0">
                <div
                    class="absolute -top-24 -left-24 w-20 h-20 md:w-32 md:h-32 bg-linear-to-br from-primary/20 to-red-300/20 rounded-full blur-3xl">
                </div>

                <div
                    class="absolute -bottom-24 -right-24 w-20 h-20 md:w-32 md:h-32 bg-linear-to-tr from-red-200/20 to-primary/20 rounded-full blur-3xl">
                </div>

                <div
                    class="absolute top-1/3 right-1/4 w-16 h-16 md:w-32 md:h-32 bg-primary/15 sm:bg-primary/10 rounded-full blur-2xl">
                </div>
            </div>

            <!-- Name -->
            <div class="text-sm">
                <!-- Label -->
                <label
                    for="name"
                    class="block font-medium mb-2"
                >
                    Name
                    <small class="text-primary">*</small>
                </label>

                <!-- Input -->
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 focus:outline-none focus:border-primary"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                >

                <div class="mt-1 ml-1">
                    @error('name')
                        <small class="font-medium text-xs text-primary">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div class="text-sm">
                <!-- Label -->
                <label
                    for="email"
                    class="block font-medium mb-2"
                >
                    Email
                    <small class="text-primary">*</small>
                </label>

                <!-- Input -->
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 focus:outline-none focus:border-primary"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >

                <div class="mt-1 ml-1">
                    @error('email')
                        <small class="font-medium text-xs text-primary">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <!-- Message -->
            <div class="text-sm">
                <!-- Label -->
                <label
                    for="message"
                    class="block font-medium mb-2"
                >
                    Message
                    <small class="text-primary">*</small>
                </label>

                <!-- Textarea -->
                <textarea
                    rows="6"
                    id="message"
                    name="message"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 resize-none focus:outline-none focus:border-primary"
                    placeholder="Enter your message"
                    required
                >{{ old('message') }}</textarea>

                <div class="mt-1 ml-1">
                    @error('message')
                        <small class="font-medium text-xs text-primary">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="bg-primary font-semibold text-light px-4 py-2 rounded-sm hover:bg-primary/90 cursor-pointer transition-colors duration-200"
            >
                Send Message
            </button>

            @if (session('success'))
                <div class="w-full bg-green-100 border border-green-200 rounded-sm shadow-xs p-4 mt-2.5 text-green-700 text-center">
                    {{ session('success') }}
                </div>
            @endif
        </form>
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
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                What is LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                LUS (short for Laravel URL Shortener) is a fast, simple, and free online tool that helps you turn long,
                hard-to-share
                web addresses into clean, compact links. Whether you’re posting on social media, sending messages, or adding
                links to
                marketing emails, LUS makes your URLs more manageable, easier to remember, and more professional looking.
            </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                How does it work?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Using LUS is intentionally simple. You start by pasting any long URL into the input field on the homepage
                and clicking
                the Shorten URL button. In just a moment, LUS generates a unique short link that points to your original
                address.
            </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Is LUS free to use?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Yes, LUS is completely free to use. You can shorten as many links as you want without paying anything or
                creating an
                account. There are no hidden fees, subscriptions, or surprise limitations. Our goal is to make link sharing
                fast,
                accessible, and effortless for everyone.
            </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Do shortened links expire?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                No. Links created with LUS do not expire. Once a short URL is generated, it will continue to work
                indefinitely unless it
                violates our usage policies. This makes LUS ideal for long-term sharing, bookmarks, and permanent
                references.
            </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Can I track my link's activity?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Yes. LUS automatically tracks basic click statistics for each shortened URL. This allows you to see how
                often your link
                is being accessed, which can be helpful for understanding engagement and reach without needing complex
                analytics tools.
            </div>
        </div>

        <!-- Item 6 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Is it safe to use LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Absolutely. LUS is built with security in mind and follows modern web standards to ensure safe redirection
                and data
                handling. We actively prevent abusive or malicious use to keep the platform reliable and trustworthy for
                everyone.
            </div>
        </div>

        <!-- Item 7 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Do I need to create an account?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                No account is required. LUS is designed for instant use — simply paste your URL, shorten it, and share. This
                keeps the
                experience fast and hassle-free, especially for users who just need a quick solution.
            </div>
        </div>

        <!-- Item 8 -->
        <div class="faq-item bg-white border border-dark/10 rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button type="button"
                class="faq-question w-full flex justify-between items-center p-4 font-medium text-left text-primary cursor-pointer">
                Why should I use LUS?
                <span class="text-xl">+</span>
            </button>

            <!-- Answer -->
            <div class="faq-answer hidden p-4 border-t border-t-dark/15 text-sm text-dark/80">
                Short links look cleaner, are easier to share, and are less likely to break when sent through messaging apps
                or social
                platforms. With LUS, your links are more readable, more professional, and easier for people to trust and
                click.
            </div>
        </div>
    </div>
@endsection
