<footer class="bg-primary text-light md:h-[60px] flex justify-between items-center">
    <div class="container mx-auto px-4 py-4 md:py-2">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Logo -->
            <div class="mb-4 md:mb-0">
                <a href="{{ route('home') }}" class="text-light">
                    <h1 class="text-xl font-semibold">Laravel URL Shortener</h1>
                </a>
            </div>
            <!-- Navigation -->
            <nav class="flex items-center space-x-8 font-medium text-sm text-light">
                <a
                    href="{{ route('terms') }}"
                    class="hover:underline"
                >
                    Terms of Use
                </a>

                <a
                    href="{{ route('privacy') }}"
                    class="hover:underline"
                >
                    Privacy Policy
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="hover:underline"
                >
                    Contact
                </a>
            </nav>
        </div>
    </div>
</footer>
