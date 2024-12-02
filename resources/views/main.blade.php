@extends('template.aside')

@section('container')
          <div class="list-buku mx-10 my-10  ">
          <div class="buku grid lg:grid-cols-4  lg:gap-4 ">
          <a href="/detail-buku">
                  <div class="buku-card transition mt-5 duration-700 ease-in-out lg:hover:scale-105 ">
                       <div class="buku-card-image bg-[#F3F3F3] rounded-lg ">
                         <div class="buku-card-judul grid lg:grid-cols-2 grid-cols-2 lg:py-2 px-4 pt-5">
                          <div class="judul-buku-card">
                           <p class="text-start  lg:text-lg  px-2">hello hello</p>  
                          <div class="sisa-buku-card bg-slate-200 w-fit rounded-xl">
                           <p class="lg:text-sm py-2 px-2 ">Sisa Buku :</p>
                          </div>
                          </div>

                          <div class="button-buku-card ">
                            <div class="grid lg:grid-cols-3  grid-cols-2 px-4 py-2 lg:px-1 lg:py-2 bg-[#FDCC56] rounded-md hover:opacity-80 w-fit ">
                              
                              <p class="lg:col-span-2 text-xs lg:ms-2">Detail Buku</p>
                              <i class="fa-solid fa-circle-info mx-5 text-white hover:text-[#F0E8D5]"></i>
               
                            </div>
                          </div>

                      </div>
                    <img src="{{asset('img/books1.jpg')}}" class="w-1/4 mx-auto pt-2 pb-7 ">
                 
                  </div>
                  </div>
                  </a>

          </div>
      </div>

@endsection