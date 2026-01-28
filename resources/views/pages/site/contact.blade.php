@extends('app')

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
            action="{{ route('contact.store') }}"
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
@endsection
