@extends('app')

@section('content')
    <div class="flex flex-col justify-center items-center">
        <!-- Title -->
        <h1 class="font-semibold text-2xl lg:text-4xl text-primary text-center mb-4">Contact Us</h1>

        <!-- Description -->
        <p class="mb-6 text-center">
            Have a question, feedback, or issue? Feel free to contact us using the form below.
        </p>

        <!-- Form -->
        <form
            method="POST"
            action="{{ route('contact.store') }}"
            class="w-full lg:w-[85%] space-y-4 bg-white border border-dark/10 p-6 rounded-sm shadow-sm"
        >
            @csrf

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
