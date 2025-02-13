    @extends('template.aside')

    @section('container')

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
                      <p class="mb-1">Tahun terbit : {{$data['nama_penerbit']}}</p>
                      <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
                       Stok Buku:  {{$data['jumlah_buku']}}
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                    <div class="h-full">
                      <img src="../assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                      <div class="relative flex items-center justify-center h-full">
                         @if($data ['gambar_buku'] != null)
                              <img src="{{$urlBase. ("storage/" . $data['gambar_buku'])}}" class="w-44 mx-auto pt-2">
                        @else 
                              <img src="{{asset('img/book-open-thin-svgrepo-com.png')}}" class="w-44 mx-auto pt-2">
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          

      <div class="button-detail-buku flex lg:flex-wrap flex-row  -mx-3 pt-3 ">

      <div class="lg:w-full lg:max-w-full w-1/3 px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <form method="post" action="/detail-buku/{{$data ['slug']}}">
      @csrf
      @method('DELETE')
      <button type="submit">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 mx-3 font-sans font-semibold leading-normal text-sm">Hapus buku</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/4">
                    <div class="inline-block w-9 h-9 lg:w-12 lg:h-12 text-center rounded-lg bg-gradient-to-tl from-red2 to-red1">
                   <i class="fa-solid fa-trash pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </button>
      </form>
          </div>


 <div class="lg:w-full lg:max-w-full w-1/3 ms-4 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="/ubah-data-buku/{{$data ['slug']}}">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Edit Buku</p>
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


           <div class="lg:w-full lg:max-w-full w-1/3 px-3 mb-6 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="/pinjam-buku/{{$data ['slug']}}">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Pinjam Buku</p>
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

          

    @endsection

