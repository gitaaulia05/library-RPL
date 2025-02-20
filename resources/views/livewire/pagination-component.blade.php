<div>

 <nav aria-label="Page navigation example">
  <ul class="flex items-center -space-x-px h-8 text-sm ">
    @foreach ($data['meta']['links'] as $item)

    <li class="rounded-lg">
      <a href="{{$item['url2']}}" wire:click.prevent="goToPage('{{$item['url2']}}')"  class="{{$item['active'] ?'activePagination' : 'flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700' }}  ">{!! $item['label'] !!}</a>
    </li>
       @endforeach
  
    </ul>
</nav>
  
</div>
