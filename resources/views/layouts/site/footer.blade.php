<footer class="mb-4 px-6 py-4 rounded-lg shadow-sm bg-white border border-dark/20 text-primary">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a
                href="{{ route('home') }}"
                class="font-semibold text-lg"
            >
                {{ config('app.name') ?? 'LUS' }}
            </a>
        </div>

        <!-- Navigation -->
        <nav class="flex items-center space-x-6 text-sm">
            <!-- Terms of Use -->
            <a
                target="_blank"
                href="{{ route('terms') }}"
                class="hover:underline"
            >
                Terms of Use
            </a>

            <!-- Privacy Policy -->
            <a
                target="_blank"
                href="{{ route('privacy') }}"
                class="hover:underline"
            >
                Privacy Policy
            </a>

            <!-- Contact -->
            <a
                href="{{ route('contact.index') }}"
                class="hover:underline"
            >
                Contact
            </a>
        </nav>
    </div>
</footer>
