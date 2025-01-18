<div>


    <div class="header container grid lg:grid-cols-2 pt-3 px-1">

<div class="search-button lg:w-2/3  px-10 pt-4">

      <div class="relative mt-1 lg:w-80">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" wire:model.live="search" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5"  wire:input="UpdateSearchBuku" placeholder="Cari Buku">
          </div>

</div>

   <div class="container grid grid-cols-3 pt-3 gap-4 px-10 lg:px-0">

        <a href="/tambah-buku" class="Stok-buku bg-[#E9FCFF] grid grid-cols-4 py-1  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
      <p class="col-span-3 text-md lg:text-base ps-3  lg:pt-1"> Tambah Data </p>
      <i class="fa-solid fa-file-circle-plus text-[#00B1FF] lg:pt-1 pt-3  border-2 border-[#D2F5FF] rounded-full w-fit lg:px-2 lg:py-1  px-[0.20rem]  " ></i>
    </a>

    <div  wire:click="ToogleBukuStokHabis" wire.model="buku_tersedia" class="Menipis-buku bg-[#FFE9E9] grid grid-cols-4 py-1  rounded-md cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
      <p class="col-span-3 text-md lg:text-base ps-2 pt-2 lg:pt-1"> Stok Habis</p>
      <i class="fa-solid fa-xmark lg:pt-1 pt-3 text-[#FF6264] border-2 border-[#FFDCDC] rounded-full w-fit lg:px-2 lg:py-2 lg:ms-1 px-[0.40rem]"></i>
    </div>

          <!-- Modal toggle -->
      <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" onClick="hideAside()">
        Scan Barcode Buku
      </button>

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


       @elseif (session()->has('message-habis'))

      <div class="message-habis bg-red1 w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
            <div class="text-center py-3">
        <h1 class="text-md font-semibold ms-10 text-center">{{session('message-habis')}}</h1>
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
                       <div class="buku-card-image bg-white rounded-lg ">
                         <div class="buku-card-judul grid lg:grid-cols-2 grid-cols-3 lg:py-2 px-4 pt-5">
                          <div class="judul-buku-card">
                           <p class="text-start  lg:text-md lg:col-span-2  px-2">{{$d ['nama_buku']}}</p> 
                          </div>

                          <div class="button-buku-card ">
                            <div class="grid lg:grid-cols-3  grid-cols-2 px-4 py-2 lg:px-1 lg:py-2 bg-blueNav rounded-md hover:opacity-80 w-fit ">
                              <p class="lg:col-span-2 text-xs lg:ms-1 text-white">Detail Buku</p>
                              <i class="fa-solid fa-circle-info mx-2 text-white hover:text-[#F0E8D5]"></i>
                            </div>
                          </div>
                      </div>

                <div class=" Sisa-buku-card flex justify-between gap-4 w-10/12 mx-7 pt-5 lg:pt-1">
                            <div class="sisa-buku-card w-1/2 bg-blue  rounded-xl">
                            <p class="lg:text-sm py-2 px-2 ">Sisa Buku : {{$d ['jumlah_buku']}}</p>
                            </div>
                            @if($d['buku_tersedia'] == 0)
                                <div class="sisa-buku-card  bg-red1 rounded-xl">
                                <p class="lg:text-xs py-2 px-2 ">Stok Buku Kosong</p>
                                </div>
                            @endif
                          </div>

                      @if($d ['gambar_buku'] != null)
                    
                    <img src=" {{$baseUrll . ('storage/' . $d['gambar_buku']) }} " class="w-1/4 mx-auto pt-2 pb-7 ">
                    <h1>{{$baseUrll . ('storage/' . $d['gambar_buku']) }}</h1>
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



      <!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Scanner Barcode Buku
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div id="reader"></div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
            </div>
        </div>
    </div>
</div>


</div>
