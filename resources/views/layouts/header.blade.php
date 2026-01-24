<header class="bg-light text-dark border-b border-dark/10 shadow-sm">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div>
                <a
                    href="{{ route('home') }}"
                    class="text-primary"
                >
                    <h1 class="text-xl font-semibold">{{ config('app.name') ?? 'LUS' }}</h1>
                </a>
            </div>
            <!-- Navigation -->
            <nav>
                <a
                    href="{{ route('home') }}"
                    class="bg-primary text-light font-semibold p-2 rounded-sm hover:bg-primary/90 transition-colors duration-200"
                >
                    Get Started
                </a>
            </nav>
        </div>
    </div>
</header>
