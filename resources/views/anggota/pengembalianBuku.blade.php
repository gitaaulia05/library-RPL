@extends('template.aside')

@section('container')

<div class="data-anggota pb-4">
      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <img src="{{asset('assets/img/bruce-mars.jpg')}}">
            </div>
          </div>

          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">

                <div class="flex lg:flex-wrap  -mx-3">
                 <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Buku </label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="JXiao xaio" readonly />
                     <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Nama Peminjam </label>
                     <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required/>
                    </div>
                  </div>
                   <div class="w-full max-w-full  lg:w-5/12 lg:flex-none">
                      <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-1">Tanggal Dipinjam</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ date('Y-M-D')}}"  readonly />
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-3">Tanggal Dikembalikan</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ date('Y-M-D')}}"  readonly />
                    </div>

                </div>
                   <div class="message-success bg-red1 w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
                      <div class="flex justify-between py-3">
                          <h1 class="text-md font-semibold ms-10">Kredit Skor Berkurang 10 poin </h1>
                      </div>
                   </div>
              </div>
            </div>
          </div>
        
        </div>
    </div>

  <div class="flex flex-wrap">

  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Ubah Data</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green2 to-greem">
                      <i class="fa-solid fa-pen-to-square pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </a>
          </div>
  </div>

@endsection