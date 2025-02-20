@extends('template.aside')

@section('container')

    <div class="mx-14 my-14 bg-white rounded-xl shadow-md">
            <h1 class="ms-3 mt-3 font-semibold text-2xl ">Tambah Buku</h1>

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

<form  action="simpan-tambah-buku" method="POST" enctype="multipart/form-data">

    @csrf
        <div class="grid lg:grid-cols-2">

        <div class="input-field py-8 px-5">
    <div class="nama_buku">
  <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Buku</label>
    <input type="text" id="nama_buku" name="nama_buku" placeholder="Laskar Pelangi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3 form-control @error('nama_buku')
                        is-invalid
                    @enderror" value="{{old('nama_buku')}}" required>
       @error('nama_buku')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
                    </div>

  <div class="nama_penulis pt-4" >
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama penulis</label>
    <input type="text" id="nama_penulis"  name="nama_penulis" placeholder="Andrea Hirata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('nama_penulis')
                        is-invalid
                    @enderror" value="{{old('nama_penulis')}}" required>
                      @error('nama_penulis')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="nama_penerbit pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Penerbit</label>
    <input type="text" id="nama_penerbit"  name="nama_penerbit" placeholder="HarperCollins Canada" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('nama_penerbit')
                        is-invalid
                    @enderror" value="{{old('nama_penerbit')}}" required >
      @error('nama_penerbit')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
                           </div>

      <div class="tahun_terbit pt-4">
    <label for="tahun_terbit" class="block mb-2 text-sm font-medium text-gray-900">Tahun Terbit</label>
    <input type="number" id="tahun_terbit"  name="tahun_terbit" placeholder="2013" value={{date('Y')}} class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('tahun_terbit') value="{{old('tahun_terbit')}}"
                        is-invalid
                    @enderror" required>
     @error('tahun_terbit')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
       </div>

  <div class="jumlah_buku pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Buku</label>
    <input type="number" id="jumlah_buku"  name="jumlah_buku" placeholder="jumlah_buku"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('jumlah_buku')
                        is-invalid
                    @enderror" value="{{old('jumlah_buku')}}" required>
     @error('jumlah_buku')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="buku_tersedia pt-4">
    <label for="default" class="block mb-2 text-sm font-medium text-gray-900 ">Buku Tersedia</label>
                    <select id="default" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3" name="buku_tersedia">
                        <option value="1" {{old('buku_tersedia') == 1 ? 'selected' : ''}}>Tersedia</option>
                        <option value="0" {{old('buku_tersedia') == 0 ? 'selected' : ''}}>Tidak Tersedia</option>
                    </select>
                           </div>

  <div class="created_at pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Masuk Buku</label>
    <input type="date" id="created_at"  name="created_at" placeholder="created_at" value="{{date('Y-m-d')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('created_at')
                        is-invalid
                    @enderror" required>
     @error('created_at')
                 <div class="invalid-feedback text-red2">
                {{$message}}
                </div>
                    @enderror
                           </div>


        </div>

        <div class="field-gambar pt-5">
            <div class="gambar_buku pt-4">
                <label for="gambar_buku" class="block mb-2 text-sm font-medium text-gray-900">Gambar Buku</label>
                <input type="file" id="gambar_buku"  name="gambar_buku" placeholder="gambar_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-1/2  form-control @error('gambar_buku')
                                    is-invalid
                                @enderror"  required>

                                 <!-- Menampilkan gambar sebelumnya jika ada -->
        @if(isset($buku) && $buku->gambar_buku)
            <div class="mt-3">
                <p class="text-sm text-gray-700">Gambar saat ini:</p>
                <img src="{{ $baseUrll . ( asset('storage/'.$buku->gambar_buku) )}}" 
                     class="h-32 w-auto rounded-lg shadow-md" alt="Gambar Buku">
            </div>
        @endif

                        @error('gambar_buku')
                    <div class="invalid-feedback text-red2">
                    {{$message}}
                    </div>
                        @enderror
       </div>
           <button class="bg-blueNav rounded-lg px-4 py-2 text-white mt-3 mx-auto" type="submit">simpan data</button>
        </div>

        </div>

         


</form>
</div>

@endsection