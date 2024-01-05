<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 flex items-center justify-center h-screen">

<div class="max-w-2xl p-8 bg-white rounded-lg shadow-lg">
    <div class="text-center mb-6">
        <img src="{{ asset('logo.jpg') }}" alt="Company Logo" class="w-16 h-16 mx-auto mb-4 rounded-full">
        <h1 class="text-2xl font-bold">TDD Basic (Pest)</h1>
        <p class="text-gray-600">Welcome to our Basic TDD Course</p>
    </div>

    <form class="mb-4">
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-600">Image URL:</label>
            <input type="file" id="image" name="image" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
            <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-600">Description:</label>
            <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Product</button>
        </div>
    </form>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product title
                </th>
                <th scope="col" class="px-6 py-3">
                    Product description
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center space-x-1">
                    <img class="w-16 h-auto rounded" src="{{ asset('product.jpg') }}" alt="">
                    <h3 class="font-semibold">Apple MacBook Pro 17"</h3>
                </th>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </td>
                <td class="px-6 py-4 flex items-center space-x-3">
                    <button class="text-xs text-blue-500 hover:text-blue-600">Edit</button>
                    <button class="text-xs text-red-500 hover:text-red-600">Delete</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center space-x-1">
                    <img class="w-16 h-auto rounded" src="{{ asset('product.jpg') }}" alt="">
                    <h3 class="font-semibold">Apple MacBook Pro 17"</h3>
                </th>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </td>
                <td class="px-6 py-4 flex items-center space-x-3">
                    <button class="text-xs text-blue-500 hover:text-blue-600">Edit</button>
                    <button class="text-xs text-red-500 hover:text-red-600">Delete</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center space-x-1">
                    <img class="w-16 h-auto rounded" src="{{ asset('product.jpg') }}" alt="">
                    <h3 class="font-semibold">Apple MacBook Pro 17"</h3>
                </th>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </td>
                <td class="px-6 py-4 flex items-center space-x-3">
                    <button class="text-xs text-blue-500 hover:text-blue-600">Edit</button>
                    <button class="text-xs text-red-500 hover:text-red-600">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
