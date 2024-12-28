@extends('template.aside')

        @section('container')
            <form action="daftar-anggota" method="POST"  enctype="multipart/form-data">

       @csrf
          
            <div class="flex flex-wrap mt-6 -mx-3">
  
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama  </label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="JXiao xaio" required />

                     <label for="email" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Email </label>
                     <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required/>
         
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
               <label for="gambar_anggota" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Upload Gambar </label>
                     <input type="file" id="gambar_anggota" name="gambar_anggota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required/>
         
            </div>
        </div>

          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <button type="submit">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div
               class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Simpan Data</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green2 to-green">
                      <i class="fa-solid fa-backward pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </button>
          </div>
          </div>


    </div>
           </form>
        @endsection