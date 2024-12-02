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
</head>
<body class="font-inter">

 <div class="container grid lg:grid-cols-2 pt-3 px-10">

    <form class="max-w-md mx-auto pt-4">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg outline-none bg-gray-50 focus:ring-[#F0E8D5] focus:border-[#F0E8D5] " placeholder="Cari Buku" required />
       
    </div>
</form>

       <div class="container grid grid-cols-3 pt-3 gap-4">

        <a href="/anggota" class="Stok-buku bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
         {{-- <div class="Stok-buku bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default"> --}}
      <p class="col-span-3 text-md lg:text-base ps-3 lg:pt-1"> Tambah Data </p>
      <i class="fa-solid fa-file-circle-plus text-[#00B1FF] lg:pt-1 pt-3  border-2 border-[#D2F5FF] rounded-full w-fit lg:px-2 lg:py-2 lg:ms-2 px-[0.40rem] " ></i>
    {{-- </div> --}}
    </a>

    <a href="/anggota" class="Stok-buku bg-[#FFEDAC] grid grid-cols-4 py-2  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
     {{-- <div class="Stok-buku bg-[#FFEDAC] grid grid-cols-4 py-2  rounded-md cursor-default"> --}}
      <p class="col-span-3 text-md lg:text-base ps-3 lg:pt-1"> Stok Menipis</p>
      <i class="fa-solid fa-arrow-down-long lg:pt-1 pt-3 text-[#FFB423] border-2 border-[#FFDCDC] rounded-full w-fit lg:px-2 lg:py-1 lg:ms-2 px-[0.40rem]" ></i>
    {{-- </div> --}}
    </a>

  <a href="/anggota" class="Menipis-buku bg-[#FFE9E9] grid grid-cols-4 py-2   rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
    {{-- <div class="Menipis-buku bg-[#FFE9E9] grid grid-cols-4 py-2   rounded-md cursor-default"> --}}
      <p class="col-span-3 text-md lg:text-base ps-2 pt-2 lg:pt-1"> Stok Habis</p>
      <i class="fa-solid fa-xmark lg:pt-1 pt-3 text-[#FF6264] border-2 border-[#FFDCDC] rounded-full w-fit lg:px-2 lg:py-2 lg:ms-2 px-[0.40rem]" ></i>
    {{-- </div> --}}
    </a>

    </div>

    </div>


    <section class="main-content">
      @yield('container')
    </section>

    

    <footer class="absolute bottom-0 ">
    <div class="bg-slate-300 w-full rounded-t-xl">
    <p>COPYRIGHT</p>
    </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>