<div>

<div class="header container grid lg:grid-cols-2 pt-3 px-1">

<div class="search-button lg:w-2/3  px-10 pt-4">

   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="text" wire:model.live="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg outline-none bg-gray-50 focus:ring-[#F0E8D5] focus:border-[#F0E8D5] " wire:input="UpdateSearchBuku" placeholder="Cari Buku" required />
       
    </div>

</div>

   <div class="container grid grid-cols-3 pt-3 gap-4 px-10 lg:px-0">

        <a href="/tambah-buku" class="Stok-buku bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
         {{-- <div class="Stok-buku bg-[#E9FCFF] grid grid-cols-4 py-2  rounded-md cursor-default"> --}}
      <p class="col-span-3 text-md lg:text-base ps-3  lg:pt-1"> Tambah Data </p>
      <i class="fa-solid fa-file-circle-plus text-[#00B1FF] lg:pt-1 pt-3  border-2 border-[#D2F5FF] rounded-full w-fit lg:px-2 lg:py-2  px-[0.20rem]  " ></i>
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


  @if(session()->has('message-success'))

       <div class="message-success bg-green w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
        <h1 class="text-md font-semibold ms-10">{{session('message-success')}}</h1>
         <button type="button" class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-greenDark hover:text-blue-900 " data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Remove badge</span>
        </button>
            </div>
        

      </div>

      @elseif (session()->has('message-error'))

      <div class="message-error bg-red w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
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

  
      @if(empty($data))
          
       <div class="message-success bg-green w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
            <div class=" py-3">
        <h1 class="text-md font-semibold  text-center">Belum Ada Buku yang Ditambahkan !</h1>
        
            </div>
    @else

          <div class="list-buku mx-10 my-10  ">
          <div class="buku grid lg:grid-cols-3  lg:gap-4 h-1/2 ">
            @foreach ($data as $d)
          <a href="/detail-buku/{{$d ['slug']}}">
                  <div class="buku-card transition mt-5 duration-700 ease-in-out lg:hover:scale-105 ">
                       <div class="buku-card-image bg-[#F3F3F3] rounded-lg ">
                         <div class="buku-card-judul grid lg:grid-cols-2 grid-cols-3 lg:py-2 px-4 pt-5">
                          <div class="judul-buku-card">
                           <p class="text-start  lg:text-md lg:col-span-2  px-2">{{$d ['nama_buku']}}</p>  
                          <div class="sisa-buku-card bg-slate-200 w-fit rounded-xl">
                           <p class="lg:text-sm py-2 px-2 ">Sisa Buku : {{$d ['jumlah_buku']}}</p>
                          </div>
                          </div>

                          <div class="button-buku-card ">
                            <div class="grid lg:grid-cols-3  grid-cols-2 px-4 py-2 lg:px-1 lg:py-2 bg-[#FDCC56] rounded-md hover:opacity-80 w-fit ">
                              
                              <p class="lg:col-span-2 text-xs lg:ms-1">Detail Buku</p>
                              <i class="fa-solid fa-circle-info mx-2 text-white hover:text-[#F0E8D5]"></i>
               
                            </div>
                          </div>

                      </div>

                      @if($d ['gambar_buku'] != null)
                    <img src=" {{$baseUrll . ('storage/' . $d['gambar_buku']) }} " class="w-1/4 mx-auto pt-2 pb-7 ">
                    @else
                      <img src="{{asset('img/book-open-thin-svgrepo-com.png')}}" class="w-1/4 mx-auto pt-2 pb-7 ">
                      @endif
               
                  </div>
                  </div>
                  </a>
                      @endforeach
          </div>
    @endif

      </div>
</div>
