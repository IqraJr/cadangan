<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Pastikan ini diperlukan --}}
</head>

<body class="bg-dark">
<div class="container mx-auto text-center text-white">
           <h1><a href="{{ route('home') }}" class="text-5xl font-bold mb-4">ON-RENT</a> </h1><br>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="text-white hover:underline">Home</a>
                <a href="{{ route('cars.index') }}" class="text-white hover:underline">List Mobil</a>
                <a href="{{ route('rentals.index') }}" class="text-white hover:underline">Order</a>
            </nav>
        </div>

    <div class="container mx-auto mt-8">
        @yield('content') 
    </div>
</body>

</html>
