<div>
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
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Anggota </label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />

                     <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Email Anggota</label>
                     <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
         
                    </div>
                  </div>
                   <div class="w-full max-w-full  lg:w-5/12 lg:flex-none">
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-1">Credit Anggota</label>
                     <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
                     </div>

                </div>
              </div>
            </div>
          </div>
        
        </div>
    </div>

  
    <div class="relative mt-1 mb-4 lg:w-80">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" wire:model.live="search" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5"  wire:input="UpdateSearchBuku" placeholder="Masukkan Judul Buku">
          </div>

    <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-11/12 md:flex-none lg:w-full lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0   rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6>Projects</h6>
                  </div>
           
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nama Peminjam</th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nama Buku</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Status Peminjaman</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Aksi</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-xd.svg" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 leading-normal text-sm">Soft UI XD Version</h6>
                            </div>
                          </div>
                        </td>

                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                               h
                        </td>
                         <td class="p-2 align-middle bg-transparent flex flex-wrap border-b whitespace-nowrap">
                                <button class="leading-pro ease-soft-in text-xs bg-150 w-6.35 h-6.35 p-1.2 rounded-3.5xl tracking-tight-soft bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-red-600 border-transparent bg-transparent text-center align-middle font-bold uppercase text-red-600 transition-all hover:opacity-75"><i class="fas fa-arrow-down text-3xs"></i></button>

                                 <button class="leading-pro ease-soft-in text-xs bg-150 w-6.35 h-6.35 p-1.2 rounded-3.5xl tracking-tight-soft bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-lime-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-lime-500 transition-all hover:opacity-75"><i class="fas fa-arrow-up text-3xs"></i></button>
                                 
                                Belum Dikembalikan
                        </td>
                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                                <a href="/pengembalian-buku" class=" rounded-md px-3 py-1  bg-gradient-to-tl from-yellow2 to-yellow hover:opacity-90">Ubah Data</a>
                        </td>
                       
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection
</div>
