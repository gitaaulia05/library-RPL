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
<body class="font-inter">

   

    <section class="main-content-aside">
       <div class="grid grid-rows-3 grid-flow-col ">

        <div class="aside-main row-span-3  ">
          <aside
        class="z-20 hidden w-64 overflow-y-auto bg-[#F7F7F7] md:block flex-shrink-0 min-h-screen"
      >
        <div class="py-4 text-gray-500 ">
          <a
            class="ml-6 text-lg font-bold text-gray-800 "
            href="#"
          >
            Perpustakaan
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3 rounded-r-lg w-2/3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 "
                href="/buku"
              >
                <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"  viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>
        </svg>

                <span class="ml-4">Buku</span>
              </a>
            </li>
          </ul>
          <ul>
           
            
            <li class="relative px-6 py-3 bg-slate-200 rounded-r-lg w-2/3 ">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 "
                href="/anggota"
              >
              <svg class="w-[31px] h-[31px] text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple2" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="1.8" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
</svg>

                <span class="ml-4">Anggota</span>
              </a>
            </li>
           
         
          </ul>
      
        </div>
      </aside>
        </div>

         <div class="main-section col-span-2 ">
         
                <div class="lg:absolute lg:left-[180px] bg-white w-fit min-h-screen rounded-l-3xl shadow-sm">

                <div class="pt-5  lg:px-56 px-10 cursor-pointer" id="header">
     <div class=" nav-header grid grid-cols-2 px-16x">
        <div class="Halaman-header"><h1>Halaman / {{$Header }}</h1></div>

        <div class="Halaman-header-logo">
          <div class="Halaman-header-logos grid grid-cols-2 gap-1">

                <div class="flex flex-row gap-3 ">
               <i class="fa-regular fa-user pt-1 border rounded-full px-2 py-2  bg-purple1 border-[#DFD6FF] text-white">
               </i>
             {{-- <p>{{$test['username']}}</p> --}}
                </div>
               
                <div class="Halaman-logout  transition duration-1000 decoration-[#FFE9E9] ease-in-out hover:underline hover:underline-offset-8 hover:decoration-[#FFE9E9]">
                <form action ="/logout" method="POST">
                @csrf
                @method('DELETE')
                 <button type="submit" class="text-sm  pt-1 ">LOGOUT</button>
                </form>

                </div>

          </div>
        </div>

   </div>
    </div>

                  @yield('container')
              </div>
        </div>
       
      </div>

    </section>

    

    {{-- <footer class="absolute bottom-0 ">
    <div class="bg-slate-300 w-full rounded-t-xl">
    <p>COPYRIGHT</p>
    </div>
    </footer> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>