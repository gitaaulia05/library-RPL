@extends('template.aside')

@section('container')

<div class="mx-14 my-14">

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

    <form action="{{ route('update.buku', $data['slug']) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-2">

            <div class="input-field">
                <div class="nama_buku">
                    <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900">Nama Buku</label>
                    <input type="text" id="nama_buku" name="nama_buku" placeholder="Nama Buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('nama_buku') is-invalid @enderror" value="{{ old('nama_buku', $data['nama_buku']) }}" required>
                    @error('nama_buku')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

             <div class="nama_penulis pt-4">
    <label for="nama_penulis" class="block mb-2 text-sm font-medium text-gray-900">Nama Penulis</label>
    <input type="text" id="nama_penulis" name="nama_penulis"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 
           @error('nama_penulis') border-red-500 @enderror"
           value="{{ old('nama_penulis', $data['nama_penulis']) }}" required>

    @error('nama_penulis')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>


                <div class="nama_penerbit pt-4">
                    <label for="nama_penerbit" class="block mb-2 text-sm font-medium text-gray-900">Nama Penerbit</label>
                    <input type="text" id="nama_penerbit" name="nama_penerbit" placeholder="Nama Penerbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('nama_penerbit') is-invalid @enderror" value="{{ old('nama_penerbit', $data['nama_penerbit']) }}" required>
                    @error('nama_penerbit')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

                <div class="jumlah_buku pt-4">
                    <label for="jumlah_buku" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Buku</label>
                    <input type="text" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('jumlah_buku') is-invalid @enderror" value="{{ old('jumlah_buku', $data['jumlah_buku']) }}" required>
                    @error('jumlah_buku')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

                <div class="buku_tersedia pt-4">
                  
                    <label for="default" class="block mb-2 text-sm font-medium text-gray-900 ">Buku Tersedia</label>
                    <select id="default" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3" name="buku_tersedia">
                        <option selected value="{{ $data['buku_tersedia']}}">{{old('buku_tersedia', $data['buku_tersedia'] == 1 ? 'Tersedia' : 'Tidak Tersedia')}}</option>

                         <option value="{{ $data['buku_tersedia'] == 1 ? 0 : 1}}">{{old('buku_tersedia', $data['buku_tersedia'] == 1 ? 'Tidak Tersedia' : 'Tersedia')}}</option>

                    </select>

                      @error('buku_tersedia')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

                <div class="created_at pt-4">
                    <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Masuk Buku</label>
                    <input type="date" id="created_at" name="created_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-2/3 form-control @error('created_at') is-invalid @enderror" value="{{ old('created_at', $data['created_at']) }}" required>
                    @error('created_at')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

            </div>

            <div class="field-gambar">
                <div class="gambar_buku pt-4">
                    <label for="gambar_buku" class="block mb-2 text-sm font-medium text-gray-900">Gambar Buku</label>
                    <input type="file" id="gambar_buku" name="gambar_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-1/2 form-control @error('gambar_buku') is-invalid @enderror" >
                     @if($data['gambar_buku'])
                <img src="{{ $urlBase .('storage/' . $data['gambar_buku']) }}" alt="{{ $data['nama_buku'] }}" style="width: 100px; height: auto; margin-top: 10px;">
                

                      {{-- Input hidden untuk menyimpan gambar lama --}}
        <input type="hidden" name="gambar_lama" value="{{ $data['gambar_buku'] }}">

                @elseif(isset($data['gambar_buku']) && $data['gambar_buku'])
    <img src="{{ $urlBase . ('storage/' . $data['gambar_buku']) }}" 
         alt="{{ $data['nama_buku'] }}" 
         style="width: 100px; height: auto; margin-top: 10px;">

            @endif
                    @error('gambar_buku')
                        <div class="invalid-feedback text-red2">{{$message}}</div>
                    @enderror
                </div>

                <button class="bg-blueNav rounded-lg px-4 py-2 text-white mt-3" type="submit">Simpan Data</button>
            </div>

        </div>

    </form>

</div>

@endsection
