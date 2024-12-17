<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

   <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

      {{-- LINKS GOOGLE FONT LORA --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

       {{-- LINKS GOOGLE FONT INTER --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')
  <title>{{$title}}</title>
</head>
<body class="font-inter ">
<div class="container flex w-full h-screen">
    <!-- Kolom Gambar -->
    <div class="image w-1/2 h-full">
        <img src="{{asset('img/login.png')}}" class="w-full h-full object-cover">
    </div>

    <!-- Kolom Form Input -->


    <div class="input-form w-1/2 flex items-center justify-center">
  
        <form action="/login-auth" method="POST" class="w-2/3">
            @csrf

            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6 bg-[#006EFF] rounded-xl w-full text-center hover:bg-opacity-80 hover:scale-95 transition duration-700">
                <button type="submit" class="my-2 text-white">LOGIN</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>