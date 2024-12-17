@extends('template.aside')

@section('container')

    <div class="mx-14 my-14">

<form  action="simpan-tambah-buku" method="POST" enctype="multipart/form-data">

    @csrf

    <input type="text"  id="nama_buku_slug" name="nama_buku_slug" class="form-control @error('nama_buku_slug')
                        is-invalid
                    @enderror"  placeholder="nama_buku_slug" required>
                    @error('nama_buku_slug')
                         
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror


    <input type="text" id="nama_buku" name="nama_buku"  placeholder="nama_buku" class="form-control @error('nama_buku')
                        is-invalid
                    @enderror" required>
       @error('nama_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="file" id="gambar_buku"  name="gambar_buku" placeholder="gambar_buku" class="form-control @error('gambar_buku')
                        is-invalid
                    @enderror" required>
                     @error('gambar_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="nama_penulis"  name="nama_penulis" placeholder="nama_penulis" class="form-control @error('nama_penulis')
                        is-invalid
                    @enderror" required>
                      @error('nama_penulis')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="nama_penerbit"  name="nama_penerbit" placeholder="nama_penerbit" class="form-control @error('nama_penerbit')
                        is-invalid
                    @enderror" required >
      @error('nama_penerbit')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="jumlah_buku"   name="jumlah_buku" placeholder="jumlah_buku"  class="form-control @error('jumlah_buku')
                        is-invalid
                    @enderror" required>
     @error('jumlah_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="buku_tersedia"  name="buku_tersedia" placeholder="buku_tersedia"  class="form-control @error('buku_tersedia')
                        is-invalid
                    @enderror" required>
     @error('buku_tersedia')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="date" id="tanggal_masuk_buku"  name="tanggal_masuk_buku" placeholder="tanggal_masuk_buku" value={{date('Y-m-d')}}  class="form-control @error('tanggal_masuk_buku')
                        is-invalid
                    @enderror" required>
     @error('tanggal_masuk_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="date" id="update terakhir"  name="update_terakhir" placeholder="update terakhir" value={{date('Y-m-d')}} class="form-control @error('update terakhir')
                        is-invalid
                    @enderror" required>
     @error('update terakhir')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <button type="submit">simpan data</button>
</form>
</div>

@endsection