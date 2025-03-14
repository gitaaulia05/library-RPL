<div>

@if(session()->has('message-fail'))
        <div class="message-fail bg-red1 w-2/3 rounded-md mx-auto mt-8 mb-6" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
                <h1 class="text-md font-semibold ms-10">{{session('message-fail')}}</h1>
                <button type="button" class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-redDark hover:text-blue-900" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
                    <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Remove badge</span>
                </button>
            </div>
        </div>
    @endif


    <form action="/pinjam-buku-simpan" method="POST">
    @csrf
       <div class="data-anggota pb-4">
      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
              <div class="relative">
                <img src="{{$baseUrl . ('storage/'. $data['gambar_buku'])}}">
              </div>
            </div>
          </div>
        
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                
                    <label for="id_buku" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Buku </label>
                    <input type="text" id="id_buku" name="id_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$data['nama_buku']}}"   readonly />
                    
                    <div class="nama-peminjam-live">
                        <label for="nama_anggota" class="block mb-2 text-sm font-medium text-gray-900 pt-5">Nama Peminjam </label>

                        <input type="text" wire:model.live="search" wire:input="FindAnggota" id="nama_anggota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Cari Nama Anggota" value=""  required {{$anggotaCheck && array_filter($anggotaCheck) ? 'readonly' : ''}}/>
                      
                      @if(!empty($hasil) && !empty($search) )
                      
                          {{-- @else --}}
                        <ul wire:mode="listAnggota" class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg mt-2"> 
                         @foreach ($hasil as $sa)  
                            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600" >
                                <div class="flex items-center ps-3">
                                    <input id="id_anggota" type="checkbox" value="{{$sa['id_anggota']}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 " wire:model="anggotaCheck.{{$sa['id_anggota']}}" wire:click="anggotaCheckbox" {{$anggotaCheck && array_filter($anggotaCheck) && !$anggotaCheck[$sa['id_anggota']]  ? 'disabled' : ''}} {{ $sa['onUp'] == 2 ? 'disabled' : ''}} >
                               <label for="nama_peminjam" class="w-full py-3 ms-2 text-sm font-medium text-slate-800 ">{{$sa['nama']}}</label>
                               
                                </div> 
                                 @if($sa['onUp'] == 2 )
                                  <p class="text-sm text-red1 text-center">Credit Skor Anggota Kurang</p>
                                @endif      
                            </li>  
                                     @endforeach             
                        </ul>
        @endif  

                    </div>
                  
                    </div>
                  </div>
                   <div class="w-full max-w-full  lg:w-5/12 lg:flexx-none">
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 pt-1">Tanggal Peminjam</label>
                     <input type="date" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ date('Y-m-d')}}"  required />
                     </div>

                </div>
              </div>
            </div>
          </div>
        
        </div>
    </div>

  <div class="flex flex-wrap">

  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">
      <a href="/detail-buku/{{$data['slug']}}">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Kembali</p>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-yellow2 to-yellow">
                      <i class="fa-solid fa-backward pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </a>
          </div>


          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4 transition duration-700 hover:scale-105">

      <button type="submit" wire:click="checkOnup" {{ empty($anggota['onUp']) || $anggota['onUp'] == 2  ? 'disabled' : ''}} >
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                     <p class="lg:mb-0 mt-2 font-sans font-semibold leading-normal text-sm">Pinjam Buku</p>
                    </div>
                    
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green to-green2">
                    <i class="fa-solid fa-book pt-3 mx-3 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </button>
     </div>
        @if(session()->has('message-error'))
     <div class="message-error bg-red1 w-2/3 rounded-md mx-auto mt-8" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
        <h1 class="text-md font-semibold ms-10">{{session('message-error')}}</h1>
         <button  x-bind:type="isSubmit ? 'submit' : 'button'"  class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blueNav bg-transparent rounded-sm hover:bg-red2 hover:text-red3 " data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Remove badge</span>
        </button>
            </div>
      @endif
  </div>

</form>

</div>
