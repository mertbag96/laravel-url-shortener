<footer class="mb-4 px-6 py-4 rounded-lg shadow-sm bg-white border border-dark/20 text-primary">
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
            <!-- Terms of Use -->
            <a
                target="_blank"
                href="{{ route('website.pages.terms') }}"
                class="hover:underline"
            >
                Terms of Use
            </a>

            <!-- Privacy Policy -->
            <a
                target="_blank"
                href="{{ route('website.pages.privacy') }}"
                class="hover:underline"
            >
                Privacy Policy
            </a>

            <!-- Contact -->
            <a
                href="{{ route('website.contact.show') }}"
                class="hover:underline"
            >
                Contact
            </a>
        </nav>
    </div>
</footer>
