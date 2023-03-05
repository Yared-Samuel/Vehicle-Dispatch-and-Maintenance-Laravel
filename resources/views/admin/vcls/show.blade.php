<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    @foreach ($vcl_detail as $vcl)
    

      <a href="#" class="flex items-center min-h-screen bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        
        <img class="w-1/2 rounded-lg h-full md:w-1/2 md:rounded-none md:rounded-l-lg" src={{ Storage::url($vcl->image) }} alt="">
        <div class="flex flex-col justify-between w-1/2 p-4 leading-normal">
          <ul class="list-disc font-bold p-6 bg-slate-300">
            <li> {{ $vcl->plate_city }} - 0{{ $vcl->plate_code }} <b>-</b> {{ $vcl->plate_id }} </li>
            <li> Purchased in  {{ $vcl->purchase_date }} </li>
           
          </ul>
            
        </div>
    </a>
    @endforeach
    

        
    
</x-admin-layout>