@props(['title', 'description'])

<div class="w-1/2 p-4 hidden lg:block">
    <!-- Box -->
    <div class="bg-auth w-full h-full px-20 rounded-lg shadow-sm flex flex-col justify-center space-y-8 lg:space-y-12">
        <!-- Logo -->
        <div>
            <a
                href="{{ route('website.pages.home') }}"
                class="flex items-center space-x-1 font-medium text-2xl text-white"
            >
                <!-- Icon -->
                <i
                    data-lucide="link"
                    class="w-8 h-8"
                ></i>

                <!-- Text -->
                <span>
                    {{ config('app.name') ?? 'LUS' }}
                </span>
            </a>
        </div>

        <!-- Title & Description -->
        <div class="flex flex-col space-y-4">
            <!-- Title -->
            <h1 class="font-medium text-3xl text-white">
                {{ $title }}
            </h1>

            <!-- Description -->
            <p class="text-light">
                {{ $description }}
            </p>
        </div>

        <!-- Information -->
        <div class="flex flex-col space-y-8">
            <!-- Information 1 -->
            <div class="flex items-start space-x-2">
                <!-- Icon -->
                <div class="bg-white p-2 rounded-lg">
                    <i
                        data-lucide="smile"
                        class="w-6 h-6 text-primary"
                    ></i>
                </div>

                <!-- Title & Description -->
                <div class="flex flex-col space-y-1">
                    <!-- Title -->
                    <h2 class="text-md text-white">
                        Easy to Use
                    </h2>

                    <!-- Description -->
                    <p class="text-xs text-light">
                        An intuitive interface makes creating, managing, and tracking links simple, clear, and
                        effortless for everyone.
                    </p>
                </div>
            </div>

            <!-- Information 2 -->
            <div class="flex items-start space-x-2">
                <!-- Icon -->
                <div class="bg-white p-2 rounded-lg">
                    <i
                        data-lucide="zap"
                        class="w-6 h-6 text-primary"
                    ></i>
                </div>

                <!-- Title & Description -->
                <div class="flex flex-col space-y-1">
                    <!-- Title -->
                    <h2 class="text-md text-white">
                        Fast
                    </h2>

                    <!-- Description -->
                    <p class="text-xs text-light">
                        Built for speed, delivering instant link creation and lightning-fast redirects without delays or
                        performance
                        bottlenecks.
                    </p>
                </div>
            </div>

            <!-- Information 3 -->
            <div class="flex items-start space-x-2">
                <!-- Icon -->
                <div class="bg-white p-2 rounded-lg">
                    <i
                        data-lucide="zap"
                        class="w-6 h-6 text-primary"
                    ></i>
                </div>

                <!-- Title & Description -->
                <div class="flex flex-col space-y-1">
                    <!-- Title -->
                    <h2 class="text-md text-white">
                        Secure
                    </h2>

                    <!-- Description -->
                    <p class="text-xs text-light">
                        Security measures protect your data, prevent misuse, and ensure reliable, trustworthy link
                        management.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
