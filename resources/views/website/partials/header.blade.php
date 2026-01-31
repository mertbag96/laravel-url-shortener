<header class="mt-4 px-6 py-4 rounded-lg shadow-md bg-white border border-dark/20 text-primary z-50">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a
                href="{{ route('website.pages.home') }}"
                class="flex items-center space-x-1 font-semibold text-lg"
            >
                <!-- Icon -->
                <i data-lucide="link" class="w-6 h-6 text-primary"></i>

                <!-- Text -->
                <span>
                    {{ config('app.name') ?? 'LUS' }}
                </span>
        </div>

        <!-- Navigation -->
        <nav class="flex items-center space-x-6 text-sm">
            <!-- Contact -->
            <a
                href="{{ route('website.contact.show') }}"
                class="hidden sm:block hover:underline"
            >
                Contact
            </a>

            <!-- Get Started -->
            <a
                href="{{ route('website.pages.home') }}"
                class="bg-primary py-1 px-2 rounded-lg text-white hover:bg-red-600 transition-colors duration-200"
            >
                Get Started
            </a>
        </nav>
    </div>
</header>
