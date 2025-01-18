<div>
    <div class="data-anggota pb-4">
      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
            @if($DataAnggota ['gambar_anggota'] != null)
                <img src="{{$baseUrll. ('storage/' . $DataAnggota['gambar_anggota'])}}">

                @else 
                <img src="{{asset('img/3dicons-girl-front-color.png')}}">
                @endif
            </div>
          </div>

        

          <div class="w-full px-3 lg:pt-0 pt-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Anggota </label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$DataAnggota['nama']}}" readonly />

                     <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Email Anggota</label>
                     <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$DataAnggota['email']}}" readonly />
         
                    </div>
                  </div>

                   <div class="w-full max-w-full  lg:w-5/12 lg:flex-none">
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 lg:pt-1 lg:ms-0 ms-4 pt-3">Credit Anggota</label>
                     <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring--500 focus:border-blue-500 block lg:w-full p-2.5 lg:ms-0 ms-2 w-2/4" value="{{$DataAnggota['credit_anggota']}}" readonly />
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
            <input type="text" wire:model.live="search" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5"  wire:input="SearchNamaBuku" placeholder="Masukkan Judul Buku">
          </div>

  @if(session()->has('message-success'))
             <div class="message-success bg-green w-2/3 rounded-md mx-auto mt-8 mb-8" id="badge-dismiss-default">
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
@endif

    <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-11/12 md:flex-none lg:w-full lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0   rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6>List Buku Dipinjam</h6>
                  </div>
           
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Gambar Buku</th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nama Buku</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Status Peminjaman</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Aksi</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $d)
                        
                    
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                           
                              <img src="{{$baseUrll .('storage/' . $d['detail_order'][0]['gambar_buku'])}}" class=" mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-11 w-11 rounded-xl ms-10" alt="xd" />
                          
                        </td>

                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                               {{$d['detail_order'][0]  ['nama_buku']}}
                        </td>
                         <td class="p-2 align-middle bg-transparent flex pt-8 pb-5 border-b whitespace-nowrap">
                                <button class="leading-pro ease-soft-in text-xs bg-150 w-6.35 h-6.35 p-1.2 rounded-3.5xl tracking-tight-soft bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid  {{$d['detail_order'][0]  ['buku_dikembalikan'] == 1 ? 'border-lime-500 text-lime-500' : 'border-red-600 text-red-600'}}  border-transparent bg-transparent text-center align-middle font-bold uppercase  transition-all hover:opacity-75"><i class=" fas {{$d['detail_order'][0]  ['buku_dikembalikan'] == 1 ?'fa-arrow-up' : 'fa-arrow-down' }} text-3xs"></i></button>
                               {{$d['detail_order'][0]  ['buku_dikembalikan'] == 1 ? 'Dikembalikan' : 'Belum Dikembalikan'}}
                           
                        </td>
                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">

                              <div class="flex flex-wrap gap-3">
                              
                            
                                <a href="/pengembalian-buku/{{$d['id_order']}}" class=" rounded-md px-3 py-1  bg-gradient-to-tl from-yellow2 to-yellow hover:opacity-90" >Ubah Data</a>

                              @if ( $d['detail_order'][0]['is_telat'])          


                      <!-- Modal toggle -->
                      <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                       Keterangan
                      </button>
                        </div>

      <!-- Main modal -->
      <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Terms of Service
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Credit Akan Dikembalikan Pada {{$d['']}}
                      </p>
                    
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">tutup</button>
                     
                  </div>
              </div>
          </div>
      </div>


                                  
                              @endif
                        </td>
                       
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

</div>
