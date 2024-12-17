@extends('template.aside')

@section('container')

{{$petugas}}
      @livewire('search-buku' , [
             'petugas' => $petugas
      ]);

    
@endsection