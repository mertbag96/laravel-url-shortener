@extends('app')

@section('content')
    <div class="flex flex-col justify-center items-center">
        <h1 class="font-semibold text-2xl lg:text-4xl text-primary text-center mb-4">Contact Us</h1>

        <p class="mb-6 text-center">
            Have a question, feedback, or issue? Feel free to contact us using the form below.
        </p>

        <form
            action="#"
            method="POST"
            class="w-full lg:w-[85%] space-y-4 bg-white border border-dark/10 p-6 rounded-sm shadow-sm"
        >
            @csrf

            <div class="text-sm">
                <label
                    for="name"
                    class="block font-medium mb-2"
                >
                    Name
                    <small class="text-primary">*</small>
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 focus:outline-none focus:border-primary"
                    placeholder="Enter your name"
                    required
                >
            </div>

            <div class="text-sm">
                <label
                    for="email"
                    class="block font-medium mb-2"
                >
                    Email
                    <small class="text-primary">*</small>
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 focus:outline-none focus:border-primary"
                    placeholder="Enter your email"
                    required
                >
            </div>

            <div class="text-sm">
                <label
                    for="message"
                    class="block font-medium mb-2"
                >
                    Message
                    <small class="text-primary">*</small>
                </label>

                <textarea
                    rows="6"
                    id="message"
                    name="message"
                    class="w-full border-2 border-dark/10 rounded-md py-2 px-3 resize-none focus:outline-none focus:border-primary"
                    placeholder="Enter your message"
                    required
                ></textarea>
            </div>

            <button
                type="submit"
                class="bg-primary font-semibold text-light px-4 py-2 rounded-sm hover:bg-primary/90 cursor-pointer transition-colors duration-200"
            >
                Send Message
            </button>
        </form>
    </div>
@endsection
