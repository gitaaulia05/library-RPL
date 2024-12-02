<div>
      <div class="container w-10/12 mx-auto bg-slate-300 mt-10">
        
              <div class="container pinjam-card grid lg:grid-cols-2 gap-4 pt-3">
                    <div class="pinjam-card-buku ">
                          <img src="{{asset('img/books1.jpg')}}" class="w-44 mx-auto py-2">
                          <div class="grid lg:grid-cols-2 pt-2 gap-4 px-3 text-center">
                            <div class="bg-yellow-300 rounded-xl w-fit">
                              <a href="/detail-buku" class= "my-5 px-5">Kembali</a>
                            </div>
                         <div class="bg-yellow-300 rounded-xl w-fit">
                              <a href="/detail-buku" class= "my-5 px-5">Pinjam Buku</a>
                            </div>
                          </div>
                    </div>
                    <div class="pinjam-card-detail">
                   
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buku</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block  p-2.5 w-1/2" placeholder="John" required readonly />

    <form class="pt-2 pb-2">
        
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block  p-4 ps-10 w-1/2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari nama Pembeli " required />
           
        </div>
    </form>

            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Dipinjam </label>
            <input type="date" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block  p-2.5 w-1/2" placeholder="John" required value="{{date('Y-m-d')}}" />

        <div>
                    </div>
        </div>

        </div>
</div>
