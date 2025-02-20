@extends('template.aside')

        @section('container')

                    @if(session()->has('message-error'))
    <div class="message-error bg-red1 w-2/3 rounded-md mx-auto mt-8 mb-3" id="badge-dismiss-default">
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
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nama') is-invalid @enderror" placeholder="Riley"  value="{{old('nama')}}" required />

                    @error('nama')
                      <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                      
                    @enderror

                     <label for="email" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Email </label>
                 <input type="email" id="email" name="email" 
       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
              focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
              @error('email') is-invalid @enderror"
       placeholder="Riley@gmail.com" required />
                         @error('email')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
               <label for="gambar_anggota" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Upload Gambar </label>
                     <input type="file" id="gambar_anggota" name="gambar_anggota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   @error('gambar_anggota') is-invalid @enderror"required/>
                      @error('gambar_anggota')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
         
            </div>
        </div>

          <div class="w-full max-w-full px-3 pt-5 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
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