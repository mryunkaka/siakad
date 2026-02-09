@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 py-8">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                🎉 Flowbite + Laravel 12 + Tailwind v4
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Full Local Installation - Tanpa CDN!
            </p>
        </div>

        {{-- Component Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

            {{-- Test Card 1: Buttons --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Buttons
                </h5>
                <div class="flex flex-wrap gap-2">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Primary
                    </button>
                    <button type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Alternative
                    </button>
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Success
                    </button>
                </div>
            </div>

            {{-- Test Card 2: Alert --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Alerts
                </h5>
                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Info alert!</span> Flowbite is working locally.
                    </div>
                </div>
                <div class="flex items-center p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Success</span>
                    <div>
                        <span class="font-medium">Success!</span> No CDN used.
                    </div>
                </div>
            </div>

            {{-- Test Card 3: Badge --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Badges
                </h5>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Default</span>
                    <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Dark</span>
                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Red</span>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Green</span>
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Yellow</span>
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">Indigo</span>
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Purple</span>
                    <span class="bg-pink-100 text-pink-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300">Pink</span>
                </div>
            </div>

            {{-- Test Card 4: Input Forms --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Form Input
                </h5>
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="name@flowbite.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                </form>
            </div>

            {{-- Test Card 5: Progress Bar --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Progress
                </h5>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mb-4">
                    <div class="bg-blue-600 h-4 rounded-full" style="width: 45%"></div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mb-4">
                    <div class="bg-green-600 h-4 rounded-full" style="width: 70%"></div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                    <div class="bg-purple-600 h-4 rounded-full" style="width: 90%"></div>
                </div>
            </div>

            {{-- Test Card 6: Avatar & Dropdown style --}}
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Avatar
                </h5>
                <div class="flex flex-wrap gap-4">
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="relative w-12 h-12 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-14 h-14 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="relative">
                            <div class="w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full dark:border-gray-800"></div>
                        </div>
                        <div class="font-medium text-gray-900 dark:text-white">
                            <div>Jese Leos</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Joined in August 2024</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Dark Mode Toggle Card --}}
        <div class="max-w-4xl mx-auto p-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h2 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">
                Dark Mode Test
            </h2>
            <p class="mb-6 text-gray-600 dark:text-gray-400">
                Try toggling dark mode to see Flowbite components adapt. All components are fully responsive and support dark mode out of the box!
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laravel 12</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Latest version with Tailwind v4 integrated by default.</p>
                </a>
                <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Flowbite 4.x</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Modern UI components, fully local, no CDN needed.</p>
                </a>
            </div>
        </div>

        {{-- Footer Info --}}
        <div class="mt-12 text-center text-sm text-gray-600 dark:text-gray-400">
            <p class="mb-2">
                <strong>✅ Full Local Installation:</strong> All assets loaded from node_modules via Vite
            </p>
            <p>
                <strong>📦 Stack:</strong> Laravel 12.50.0 + Tailwind CSS v4.0.0 + Flowbite 4.x
            </p>
        </div>
    </div>
</div>
@endsection
