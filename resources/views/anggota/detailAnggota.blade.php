@extends('template.aside')
@section('container')
   @livewire('detail-anggota-live' , [
      'slug' => $anggota
   ])
@endsection