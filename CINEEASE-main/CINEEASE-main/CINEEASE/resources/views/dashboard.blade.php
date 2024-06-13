<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center mt-6">
                        <h1 class="text-2xl font-bold text-white">List of Movies</h1>
                    </div>
                    <div class="mt-4 text-white">
                        <!-- Movie list content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
