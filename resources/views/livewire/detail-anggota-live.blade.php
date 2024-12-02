<div>
@extends('template.anggotaNav')

@section('container')
  
    <div class="data-anggota-header">
    <h1 class="text-center font-semibold text-xl">DATA ANGGOTA</h1>

        <div class="grid lg:grid-cols-2 grid-cols-1">

                <div class="data-anggota-gambar">
                <h1>hm</h1>
                </div>

                <div  class="data-anggota-data">
            <h1>hm</h1>
        </div>

    </div>

   <div class="Table-data-anggota">
           <form class="w-1/2 lg:w-fit">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg outline-none bg-gray-50 focus:ring-[#F0E8D5] focus:border-[#F0E8D5] " placeholder="Masukkan Judul Buku" required />
       
    </div>
</form>

    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                   Nama Buku
                </th>
                <th scope="col" class="px-6 py-3">
                  Status Peminjaman
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
              
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Apple MacBook Pro 17"
                </th>
                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Apple MacBook Pro 17"
                </th>
                  <th scope="row" class="px-6 py-4 font-medium text-red-600 whitespace-nowrap ">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                <div class="bg-green-300 w-fit rounded-md text-gray-900 cursor-default transition duration-700 hover:scale-105  hover:shadow-md">
                 <a href="/detail-anggota" class="px-4 py-1" >Detail</a>
                </div>
                </td>
            </tr>
           
           
        </tbody>
    </table>
</div>

    </div>

@endsection
</div>
