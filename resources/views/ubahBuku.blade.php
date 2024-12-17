@extends('template.aside')

@section('container')

    <div class="mx-14 my-14">

      @if(session()->has('message-fail'))

    <div class="message-fail bg-red w-2/3 rounded-md mx-auto mt-8 mb-6" id="badge-dismiss-default">
            <div class="flex justify-between py-3">
        <h1 class="text-md font-semibold ms-10">{{session('message-fail')}}</h1>
         <button type="button" class="inline-flex items-center p-1 ms-2 mr-10 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-redDark hover:text-blue-900 " data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
        <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Remove badge</span>
        </button>
            </div>
      </div>

      @endif

      

<form  action="{{ route('update.buku' , $data ['slug']) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" id="nama_buku" name="nama_buku"  placeholder="nama_buku" class="form-control @error('nama_buku')
                        is-invalid
                    @enderror" value="{{old ('nama_buku' , $data ['nama_buku'])}}" required>
       @error('nama_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="file" id="gambar_buku"  name="gambar_buku" placeholder="gambar_buku" class="form-control @error('gambar_buku')
                        is-invalid
                    @enderror" value="{{old ('gambar_buku' , $data ['gambar_buku'])}}" required>
                     @error('gambar_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="nama_penulis"  name="nama_penulis" placeholder="nama_penulis" class="form-control @error('nama_penulis')
                        is-invalid
                    @enderror" required value="{{old ('nama_penulis' , $data ['nama_penulis'])}}">
                      @error('nama_penulis')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="nama_penerbit"  name="nama_penerbit" placeholder="nama_penerbit" class="form-control @error('nama_penerbit')
                        is-invalid
                    @enderror" required  value="{{old ('nama_penerbit' , $data ['nama_penerbit'])}}">
      @error('nama_penerbit')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="jumlah_buku"   name="jumlah_buku" placeholder="jumlah_buku"  class="form-control @error('jumlah_buku')
                        is-invalid
                    @enderror" required value="{{old ('jumlah_buku' , $data ['jumlah_buku'])}}">
     @error('jumlah_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="text" id="buku_tersedia"  name="buku_tersedia" placeholder="buku_tersedia"  class="form-control @error('buku_tersedia')
                        is-invalid
                    @enderror" required value="{{old ('buku_tersedia' , $data ['buku_tersedia'])}}">
     @error('buku_tersedia')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="date" id="tanggal_masuk_buku"  name="tanggal_masuk_buku" placeholder="tanggal_masuk_buku"   class="form-control @error('tanggal_masuk_buku')
                        is-invalid
                    @enderror" required value="{{old ('tanggal_masuk_buku' , $data ['tanggal_masuk_buku'])}}">
     @error('tanggal_masuk_buku')
                 <div class="invalid-feedback">
                {{$message}}
                </div>
                    @enderror

    <input type="date" id="update terakhir"  name="update_terakhir" placeholder="update terakhir" value={{date('Y-m-d')}} class="form-control @error('update terakhir')
                        is-invalid
                    @enderror" required value="{{old ('update_terakhir' , $data ['update_terakhir'])}}">
     @error('update terakhir')
                 <div class="invalid-feedback"   >
                {{$message}}
                </div>
                    @enderror

    <button type="submit">simpan data</button>
</form>
</div>

@endsection