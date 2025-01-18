<div>

<div class="relative mt-1 lg:w-80 pb-5">
            <div class="flex absolute inset-y-0 mb-5 left-0 items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" wire:model.live="search" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5"  wire:input="UpdateSearchAnggota" placeholder="Cari anggota">
          </div>

            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-11/12 md:flex-none lg:w-full lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6>Daftar Anggota </h6>
                  </div>
           
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nama Anggota</th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Total Pinjam Buku</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Aksi</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($anggota as $ag)                   
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>

                              <img src="{{ $baseUrll . 'storage/' . $ag['gambar_anggota'] }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />

                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 leading-normal text-sm">{{$ag['nama']}}</h6>
                            </div>
                          </div>
                        </td>
                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">                               
                        </td>
                         <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                                <a href="/detail-anggota/{{$ag['slug']}}" class=" rounded-md px-3 py-1  bg-gradient-to-tl from-yellow2 to-yellow hover:opacity-90">Detail</a>
                        </td>
                      </tr>
                    </tbody>
                    
                       @endforeach
                  </table>
                </div>
              
              </div>
            </div>
          </div>

</div>
