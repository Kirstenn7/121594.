<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Prediction System', 'Prediction System') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #006400; /* Dark green color */
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white; /* Set text color to white or any contrasting */
        }

        .container {
            width: 100%;
            max-width: 400px; /* Adjust as needed */
            padding: 20px;
            background-color: #fff; /* Set the background color of the content container */
            border-radius: 8px; /* Optional: Add rounded corners to the content container */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
        }

        .container img {
            width: 100%; /* Make the image fill the container */
            border-radius: 8px; /* Optional: Add rounded corners to the image */
        }
    </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container">
        <img src="{{ asset('images/2.png') }}" alt="Description of the image">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
