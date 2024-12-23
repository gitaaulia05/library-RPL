@extends('template.aside')

@section('container')

    <div class="mx-14 my-14 bg-white rounded-xl shadow-md">
            <h1 class="ms-3 mt-3 font-semibold text-2xl ">Tambah Buku</h1>
<form  action="simpan-tambah-buku" method="POST" enctype="multipart/form-data">

    @csrf
        <div class="grid grid-cols-2">

        <div class="input-field py-8 px-5">
    <div class="nama_buku">
  <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Buku</label>
    <input type="text" id="nama_buku" name="nama_buku"  placeholder="nama_buku" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3 form-control @error('nama_buku')
                        is-invalid
                    @enderror" required>
       @error('nama_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                    </div>

  <div class="nama_penulis pt-4" >
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama penulis</label>
    <input type="text" id="nama_penulis"  name="nama_penulis" placeholder="nama_penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('nama_penulis')
                        is-invalid
                    @enderror" required>
                      @error('nama_penulis')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="nama_penerbit pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Penerbit</label>
    <input type="text" id="nama_penerbit"  name="nama_penerbit" placeholder="nama_penerbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('nama_penerbit')
                        is-invalid
                    @enderror" required >
      @error('nama_penerbit')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                           </div>
  <div class="jumlah_buku pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Buku</label>
    <input type="text" id="jumlah_buku"   name="jumlah_buku" placeholder="jumlah_buku"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('jumlah_buku')
                        is-invalid
                    @enderror" required>
     @error('jumlah_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="buku_tersedia pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Buku Tersedia</label>
    <input type="text" id="buku_tersedia"  name="buku_tersedia" placeholder="buku_tersedia"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3 form-control @error('buku_tersedia')
                        is-invalid
                    @enderror" required>
     @error('buku_tersedia')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="tanggal_masuk_buku pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Masuk Buku</label>
    <input type="date" id="tanggal_masuk_buku"  name="tanggal_masuk_buku" placeholder="tanggal_masuk_buku" value={{date('Y-m-d')}}  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('tanggal_masuk_buku')
                        is-invalid
                    @enderror" required>
     @error('tanggal_masuk_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
                           </div>

  <div class="update_terakhir pt-4">
    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Update Terakhir</label>
    <input type="date" id="update_terakhir"  name="update_terakhir" placeholder="update terakhir" value={{date('Y-m-d')}} class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-2/3  form-control @error('update terakhir')
                        is-invalid
                    @enderror" required>
     @error('update terakhir')
                 <div class="invalid-feedback">
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
                    @enderror" required>
                     @error('gambar_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror
       </div>
           <button class="bg-blueNav rounded-lg px-4 py-2 text-white mt-3 " type="submit">simpan data</button>
        </div>

        </div>

         


</form>
</div>

@endsection