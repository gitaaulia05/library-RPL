@extends('template.aside')

@section('container')

<div class="mx-14 my-14">

    @if(session()->has('message-fail'))
        <div class="message-fail bg-red w-2/3 rounded-md mx-auto mt-8 mb-6" id="badge-dismiss-default">
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

    <form action="{{ route('update.buku', $data['slug']) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-2">

            <div class="input-field">
                <div class="nama_buku">
                    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Buku</label>
                    <input type="text" id="nama_buku" name="nama_buku" placeholder="Nama Buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('nama_buku') is-invalid @enderror" value="{{ old('nama_buku', $data['nama_buku']) }}" required>
                    @error('nama_buku')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="nama_penulis pt-4">
                    <label for="nama_penulis" class="block mb-2 text-sm font-medium text-gray-900">Nama Penulis</label>
                    <input type="text" id="nama_penulis" name="nama_penulis" placeholder="Nama Penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('nama_penulis') is-invalid @enderror" value="{{ old('nama_penulis', $data['nama_penulis']) }}" required>
                    @error('nama_penulis')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="nama_penerbit pt-4">
                    <label for="nama_penerbit" class="block mb-2 text-sm font-medium text-gray-900">Nama Penerbit</label>
                    <input type="text" id="nama_penerbit" name="nama_penerbit" placeholder="Nama Penerbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('nama_penerbit') is-invalid @enderror" value="{{ old('nama_penerbit', $data['nama_penerbit']) }}" required>
                    @error('nama_penerbit')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="jumlah_buku pt-4">
                    <label for="jumlah_buku" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Buku</label>
                    <input type="text" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('jumlah_buku') is-invalid @enderror" value="{{ old('jumlah_buku', $data['jumlah_buku']) }}" required>
                    @error('jumlah_buku')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="buku_tersedia pt-4">
                    <label for="buku_tersedia" class="block mb-2 text-sm font-medium text-gray-900">Buku Tersedia</label>
                    <input type="text" id="buku_tersedia" name="buku_tersedia" placeholder="Buku Tersedia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('buku_tersedia') is-invalid @enderror" value="{{ old('buku_tersedia', $data['buku_tersedia']) }}" required>
                    @error('buku_tersedia')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="tanggal_masuk_buku pt-4">
                    <label for="tanggal_masuk_buku" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Masuk Buku</label>
                    <input type="date" id="tanggal_masuk_buku" name="tanggal_masuk_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('tanggal_masuk_buku') is-invalid @enderror" value="{{ old('tanggal_masuk_buku', $data['created_at']) }}" required>
                    @error('tanggal_masuk_buku')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="update_terakhir pt-4">
                    <label for="update_terakhir" class="block mb-2 text-sm font-medium text-gray-900">Update Terakhir</label>
                    <input type="date" id="update_terakhir" name="update_terakhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('update_terakhir') is-invalid @enderror" value="{{ old('update_terakhir', $data['updated_at']) }}" required>
                    @error('update_terakhir')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="field-gambar">
                <div class="gambar_buku pt-4">
                    <label for="gambar_buku" class="block mb-2 text-sm font-medium text-gray-900">Gambar Buku</label>
                    <input type="file" id="gambar_buku" name="gambar_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-1/2 form-control @error('gambar_buku') is-invalid @enderror" value="{{ old('gambar_buku', $data['gambar_buku']) }}" required>
                    @error('gambar_buku')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button class="bg-blueNav rounded-lg px-4 py-2 text-white mt-3" type="submit">Simpan Data</button>
            </div>

        </div>

    </form>

</div>

@endsection
