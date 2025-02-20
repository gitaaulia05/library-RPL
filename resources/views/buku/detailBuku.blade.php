    @extends('template.aside')

    @section('container')

  @if (session()->has('message-error') || $data['buku_tersedia'] == 0 )
      <div class="message-error bg-red1 w-2/3 rounded-md mx-auto mt-8 mb-3" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
        <h1 class="text-md font-semibold ms-10">{{session('message-error') ?? 'Buku Sedang Kosong Peminjaman Tidak Dapat Dilakukan !'}}
        </h1>
         <button type="button" class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-greenDark hover:text-blue-900 " data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Remove badge</span>
        </button>
            </div>
      </div>
      @endif
      
      <div class="card-detail-buku flex justify-center">
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <h5 class="font-bold">{{$data['nama_buku']}}</h5>
                      <p class="mb-1">Penulis : {{$data['nama_penulis']}}</p>
                      <p class="mb-1">Penerbit : {{$data['nama_penerbit']}}</p>
                      <p class="mb-1">Tahun terbit : {{$data['tahun_terbit']}}</p>
                      <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
                       Stok Buku:  {{$data['jumlah_buku']}}
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center flex justify-center lg:mt-0 lg:w-5/12 lg:flex-none">
                    <div class="h-full w-full  ">
                      <img src="../assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                      <div class=" flex flex-wrap flex-col items-center  h-full lg:grid lg:grid-cols-2 md:grid-cols-2   gap-2">
                         @if($data ['gambar_buku'] != null)
                              <img src="{{$urlBase. ("storage/" . $data['gambar_buku'])}}" class="w-44 flex justify-center pt-2">
                        @else 
                              <img src="{{asset('img/book-open-thin-svgrepo-com.png')}}" class="w-44 mx-auto pt-2">
                        @endif

                           <img src="{{asset('img/book-open-thin-svgrepo-com.png')}}" class="w-52 mx-auto pt-2">
                      </div>

                   
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          

      <div class="button-detail-buku flex lg:flex-wrap md:flex-wrap lg:flex-row  md:flex-row flex-col -mx-3 pt-3 ">

      <div class="lg:w-full lg:max-w-full w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
     
       <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <button  data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" >
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 mx-3 font-sans font-semibold leading-normal lg:text-sm text-lg">Hapus buku</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/4">
                    <div class="inline-block w-9 h-9 lg:w-12 lg:h-12 text-center rounded-lg bg-gradient-to-tl from-red2 to-red1">
                   <i class="fa-solid fa-trash pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            
      </button>
      </div>
   
          </div>


 <div class="lg:w-full lg:max-w-full w-full lg:ms-4 lg:px-0 px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="/ubah-data-buku/{{$data ['slug']}}">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal lg:text-sm text-lg text-center">Edit Buku</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/4">
                    <div class="inline-block w-9 h-9 lg:w-12 lg:h-12 text-center rounded-lg bg-gradient-to-tl from-yellow2 to-yellow">
                 <i class="fa-solid fa-pen-to-square  pt-3 px-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </a>
          </div>


           <div class="lg:w-full lg:max-w-full w-full px-3 mb-6 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="{{$data['buku_tersedia'] != 0 ? '/pinjam-buku/'.$data['slug'] : '#' }}">
{{-- <a href="/pinjam-buku/{{$data['slug']}}"> --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal lg:text-sm  text-lg text-center">Pinjam Buku</p>
                    </div>
                  </div>
                  <div class="lg:px-3 text-right basis-1/4">
                    <div class="inline-block w-9 h-9 lg:w-12 lg:h-12 text-center rounded-lg bg-gradient-to-tl from-green to-green2">
                 <i class="fa-solid fa-book  pt-3 px-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>

          </div>

          

<div id="popup-modal" tabindex="-1" class="default-modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Anda Yakin Ingin Menghapus Buku {{$data['nama_buku']}}</h3>
               
               <div class="delete grid grid-cols-2">
                <form action="/detail-buku/{{$data['slug']}}" method="POST">
                @csrf
                @method('DELETE')
                 <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>
       
                </form>
                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Tidak, Batalkan</button>
               </div>
            
            </div>
        </div>
    </div>
</div>

    @endsection

