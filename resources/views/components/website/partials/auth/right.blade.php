@props(['title', 'description'])

<div class="w-full lg:w-1/2 p-8 flex flex-col justify-center items-center space-y-6 sm:space-y-8">
    <!-- Logo -->
    <div class="block lg:hidden">
        <a
            href="{{ route('website.pages.home') }}"
            class="flex items-center space-x-1 font-medium text-3xl text-primary"
        >
            <!-- Icon -->
            <i
                data-lucide="link"
                class="w-10 h-10"
            ></i>

            <!-- Text -->
            <span>
                {{ config('app.name') ?? 'LUS' }}
            </span>
        </a>
    </div>

    <!-- Title & Description -->
    <div class="flex flex-col justify-center items-center space-y-2 text-center">
        <!-- Title -->
        <h1 class="font-medium text-2xl text-dark">
            {{ $title }}
        </h1>

        <!-- Description -->
        <p class="text-normal text-sm text-dark/90">
            {{ $description }}
        </p>
    </div>

    {{ $slot }}
</div>
