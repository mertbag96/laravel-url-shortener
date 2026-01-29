<header class="mt-4 px-6 py-4 rounded-lg shadow-md bg-white border border-dark/20 text-primary z-50">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a
                href="{{ route('home') }}"
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
                href="{{ route('contact.index') }}"
                class="hover:underline"
            >
                Contact
            </a>

            <!-- Login -->
            <a
                href="{{ route('home') }}"
                class="hover:underline"
            >
                Login
            </a>

            <!-- Register -->
            <a
                href="{{ route('home') }}"
                class="hover:underline"
            >
                Register
            </a>
        </nav>
    </div>
</header>
