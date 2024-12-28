@extends('template.aside')
    @section('container')
        @livewire('pinjam-buku-live' , [
            'slug' => $slug
        ])
    @endsection