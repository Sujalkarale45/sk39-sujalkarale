@php
    $categoryKey = Route::current()->parameter('category');
    $categoryList = config('info.navlinks');
    if (!$categoryKey) {
        $categoryKey = 'contact'; // Default category for contact
    }
    $column = array_column($categoryList, 'id');
    $categoryId = array_search($categoryKey, $column);
    if ($categoryId === false) {
        $categoryId = 0; // Default to the first category if not found
    }
    $category = $categoryList[$categoryId];
@endphp

<x-layout>
    <x-slot:title>Contact</x-slot>
    
    <!-- Category Header -->
    <section class="bg-gray-50 dark:bg-gray-700 py-12 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-xl px-4 sm:px-12 md:max-w-3xl lg:max-w-screen-xl lg:px-8">
            <div class="flex w-full flex-col items-center md:flex-row md:justify-between">
                <div class="order-2 mt-8 flex flex-col items-center md:order-1 md:mt-0 md:flex-row">
                    <div class="flex-shrink-0">
                        <div class="relative h-[100px] w-[100px] rounded-2xl bg-gray-100">
                            <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}"
                                 class="h-full w-full rounded-2xl object-cover object-center" />
                            <span class="absolute inset-0 rounded-2xl shadow-inner" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="mt-6 text-center md:ms-5 md:mt-0 md:text-left">
                        <p class="text-xs uppercase tracking-widest text-red-700 dark:text-red-300">
                            {{ __('Get in Touch') }}
                        </p>
                        <h1 class="mt-1.5 text-3xl font-medium tracking-normal text-gray-900 dark:text-gray-50 sm:text-4xl md:tracking-tight lg:text-5xl lg:leading-tight">
                            {{ __($category['name']) }}
                        </h1>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <nav aria-label="breadcrumb" class="flex items-center space-x-1.5 text-[15px] sm:space-x-4">
                        <span>
                            <a href="{{ url('/') }}" class="group flex items-center text-gray-500 no-underline transition duration-300 ease-in-out hover:text-gray-900 hover:no-underline">
                                <x-icons.home />
                                {{ __(config('info.sitename')) }}
                            </a>
                        </span>

                        <span class="text-gray-400">
                            <x-icons.chevron-right />
                        </span>

                        <span class="text-red-700 dark:text-red-300">{{ __($category['name']) }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="relative mx-auto max-w-xl px-5 py-12 sm:px-12 sm:py-16 md:max-w-3xl lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="w-full">
            <h2 class="text-2xl font-bold mb-4 dark:text-red-300">{{ __('Contact Us') }}</h2>
            <form action="{{ config('info.contact_form_url') }}" method="POST" class="mt-4">
                @csrf <!-- CSRF Token -->
                
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-red-300">Name</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-red-300">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-red-300">Message</label>
                    <textarea id="message" name="message" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>
                
                <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded">Send Message</button>
            </form>
        </div>

        <!-- Additional Information -->
        <div class="mt-8">
            <h3 class="text-xl font-bold dark:text-red-300">{{ __('Follow Us') }}</h3>
            <div class="mt-4">
                @foreach (config('info.sociallinks') as $link)
                    <a href="{{ url($link['url']) }}" class="text-red-600 hover:text-red-500 transition duration-300">
                        <x-dynamic-component :component="$link['name']" />
                        <span>{{ $link['title'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
