@extends('layouts.marketplaceLayout')

@include('layouts.loader')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Library</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans">

  <!-- Banner Section -->
  <section class="relative mt-8">
    <div class="bg-blue-400 w-full h-72"></div>
    <div class="bg-pink-300 w-[60%] h-56 absolute left-1/2 -translate-x-1/2 -bottom-24"></div>
  </section>

  <!-- Grid Section (Zigzag Pattern) -->
  <section class="px-8 mt-32 grid gap-4">
    <div class="flex space-x-4">
      <div class="bg-pink-200 w-1/2 h-40"></div>
      <div class="bg-blue-200 w-1/2 h-40"></div>
    </div>
    <div class="flex space-x-4">
      <div class="bg-blue-200 w-1/2 h-40"></div>
      <div class="bg-pink-200 w-1/2 h-40"></div>
    </div>
    <div class="flex space-x-4">
      <div class="bg-pink-200 w-1/2 h-40"></div>
      <div class="bg-blue-200 w-1/2 h-40"></div>
    </div>
  </section>

  <!-- Footer Icons -->
  <footer class="flex justify-around px-12 mt-12 mb-16">
    <div class="bg-gray-300 rounded-full w-24 h-24"></div>
    <div class="bg-gray-300 rounded-full w-24 h-24"></div>
    <div class="bg-gray-300 rounded-full w-24 h-24"></div>
  </footer>
  
</body>
</html>
@endsection