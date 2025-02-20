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



    <div class="input-form w-1/2 flex items-center justify-center">

        <form action="/login-auth" method="POST" class="w-2/3">
            @csrf
            @if(session()->has('message-error'))
    <div class="message-error bg-red1 w-2/3 rounded-md mx-auto mt-8 mb-3" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
            <h1 class="text-md font-semibold ms-10">{{session('message-error')}}</h1>
            <button type="button" class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-greenDark hover:text-blue-900 " data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Remove badge</span>
            </button>
         </div>
      </div>
      @endif

            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="mb-6 bg-[#006EFF] rounded-xl w-full text-center hover:bg-opacity-80 hover:scale-95 transition duration-700">
                <button type="submit" class="my-2 text-white">LOGIN</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>