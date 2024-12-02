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

 <div class="container flex justify-around   lg:flex-row gap-4 pt-10 px-10 ">

    <form class="w-1/2 lg:w-fit">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg outline-none bg-gray-50 focus:ring-[#F0E8D5] focus:border-[#F0E8D5] " placeholder="Cari Nama Anggota" required />
       
    </div>
</form>

               <a href="/daftar-anggota" class="daftarAnggota w-1/2 lg:w-fit bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
         {{-- <div class="daftarAnggota w-1/2 lg:w-fit bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default"> --}}
      
      <p class="col-span-3 text-md lg:text-base ps-3 lg:pt-1 pt-1"> Daftar Anggota </p>
      <i class="fa-solid fa-user-plus text-[#00B1FF] lg:pt-1 py-2  border-2 border-[#D2F5FF] rounded-full w-fit lg:px-2 lg:py-2 lg:ms-2 px-[0.40rem]" ></i>
    
    {{-- </div> --}}
      </a>




    </div>


    <section class="main-content px-10 py-10">
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