<!-- resources/views/admin/movies/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Movies') }}
            </h2>
            <div class="flex space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                <a href="{{ route('admin.manage-users') }}" class="text-sm text-gray-700 underline">Manage Users</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Add Movie</h1>
                    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Form fields for movie creation -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="poster" class="block text-sm font-medium text-gray-700">Poster</label>
                            <input type="file" name="poster" id="poster" class="mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 block w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="date_showing" class="block text-sm font-medium text-gray-700">Date Showing</label>
                            <input type="date" name="date_showing" id="date_showing" class="mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                            <input type="number" name="amount" id="amount" class="mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="seats_available" class="block text-sm font-medium text-gray-700">Seats Available</label>
                            <input type="number" name="seats_available" id="seats_available" class="mt-1 block w-full">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary">Add Movie</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
