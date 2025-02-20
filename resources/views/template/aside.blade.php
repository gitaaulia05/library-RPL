<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    
    <!-- Main Styling -->
    <link href="{{asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />


    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>
 @vite('resources/css/app.css')
<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

    <aside class="max-w-62.5 ease-nav-brand fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent" id="aside">

      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
          <img src="{{asset('img/3dicons-notebook-front-color.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Nest Library</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full hover:scale-105 transition duration-700">
            <a class="py-2.7 {{Request::is('buku') || Request::is('detail-buku*')  || Request::is('ubah-data-buku*') || Request::is('tambah-buku*')  ||  Request::is('pinjam-buku*')  ? 'active' : ''}} text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"  href="/buku">
              <div class="navDiv {{Request::is('buku') || Request::is('detail-buku*')  || Request::is('ubah-data-buku*') || Request::is('tambah-buku*') ||  Request::is('pinjam-buku*')  ? 'active' : ''}} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <i class="fa-solid fa-book {{Request::is('buku') || Request::is('detail-buku*') || Request::is('ubah-data-buku*') || Request::is('tambah-buku*') || Request::is('pinjam-buku*')  ? 'active' : ''}}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Buku</span>
            </a>
          </li>

          <li class="mt-0.5 w-full   hover:scale-105 transition duration-700 ">
            <a class="py-2.7 {{Request::is('anggota') || Request::is('akun') || Request::is('detail-anggota*') || Request::is('pengembalian-buku*') || Request::is('daftar-anggota')  ? 'active' : ''}}  text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/anggota">
              <div class=" navDiv {{Request::is('anggota') || Request::is('akun') || Request::is('detail-anggota*') || Request::is('pengembalian-buku*') || Request::is('daftar-anggota')  ? 'active' : ''}} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <i class="fa-solid fa-user {{Request::is('anggota') || Request::is('akun') || Request::is('detail-anggota*') || Request::is('pengembalian-buku*') || Request::is('daftar-anggota')  ? 'active' : ''}}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Anggota</span>
            </a>
          </li>

        </ul>
      </div>

    </aside>

        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200 ">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-[200%] backdrop-blur-[30px] bg-[hsla(0,0%,100%,0.8)] shadow-blur" navbar-main navbar-scroll="true" id="navMain">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Halaman </a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">{{$Header}}</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">{{$Header}}</h6>
          </nav>

         
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
     
           <li class="flex items-center">
                <a href="/akun" class="petugas  px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500 hover:text-slate-800 {{Request::is('akun') ? 'actives' : '' }}">
     
                  <span class="hidden sm:inline mr-8  ">{{$petugas}}</span>
                </a>
              </li>

              <li class="flex items-center">
                <form method="POST" action="/logout" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500 cursor-pointer hover:text-slate-800">
                @csrf
                @method('DELETE')
                  <button type="submit" class="hidden sm:inline">Logout</button>
                </form>
              </li>

              <li class="flex items-center pl-4 xl:hidden" id="ham-menu">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500">
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
             

       
            </ul>
          </div>
        </div>
      </nav>


      <div class="w-full px-6 py-6 mx-auto">
        <!-- content -->

          @if(Request::is('anggota'))

          <div class="container grid grid-cols-2 pt-3 gap-4 px-10 pb-3 lg:px-0">
              

            <a href="/daftar-anggota" class="daftar-anggota bg-[#E9FCFF] grid grid-cols-4 py-2  w-1/2 rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
            <p class="col-span-3 text-md lg:text-base ps-3  lg:pt-1"> Tambah Data </p>
            <i class="fa-solid fa-user-plus text-[#00B1FF] lg:pt-1 pt-3  border-2 border-[#D2F5FF] rounded-full w-fit lg:px-2 lg:py-2  px-[0.20rem]"></i>
          
          </a>
    </div>

          @endif
        @yield('container')

      
      </div>
  <footer class="pt-4">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                 
                  <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Nest Library</a>
                 
                </div>
              </div>
              <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="https://gita-profile.vercel.app/" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Me </a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </footer>

    </main>

    



</body>

     <!-- plugin for charts  -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}" async></script>
  <!-- plugin for scrollbar  -->
 
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->

  <script src="{{asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5')}}" async></script>
  <script src="{{asset('js/ham.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

  {{-- <script src="{{asset('assets/js/ham.js')}}"></script> --}}



<script src="{{ asset('assets/html5-qrcode/html5-qrcode.min.js') }}"></script>
<script>
  let html5QRCodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps : 10,
      qrbox : {
        width : 200,
        height: 200,
      },
    }
  );

  function onScanSuccess(decodedText, decodedResult){
    window.location.href = decodedResult.decodedText;

    html5QRCodeScanner.clear();
  }

  html5QRCodeScanner.render(onScanSuccess);

</script>

<script>

  const asides = document.getElementById('aside');
  asides.classList.add("actives");

document.addEventListener("DOMContentLoaded", function () {
  const modals = document.querySelectorAll(".default-modal");
    const asides = document.getElementById('aside');
    const navbars = document.getElementById('navMain');

    // Pantau perubahan atribut class pada modal
      modals.forEach(modal => {   


  const observer = new MutationObserver(() => {
        if (modal.classList.contains("hidden")) {
             asides.classList.add("actives");
            console.log("Modal Tertutup");
        } else {
              asides.classList.remove("actives");
            navbars.classList.remove("z-[110]");
            console.log("Modal Terbuka");
        }
    });
    observer.observe(modal, { attributes: true, attributeFilter: ["class"] });
       });

});
</script>


<script>
    window.addEventListener('popstate', function (event) {
        alert("Anda tidak bisa kembali ke halaman sebelumnya!");
        history.pushState(null, "", window.location.href);
    });

    // Tambahkan state baru agar pengguna tetap di halaman ini
    history.pushState(null, "", window.location.href);
</script>

</html>