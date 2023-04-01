<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    @php
                $a = 0;
                $one = 0;
                $two = 0;
                $lit = 0;
            @endphp
            @foreach ($fuels as $fuel)   
    <form action="{{ route('admin.fuel.show', $fuel->id) }}" method="GET" role="search"  class="flex justify-end bg-slate-200">
  
        <div class="relative">    
          <input name="start" type="date" value="{{ request()->input('start') }}" class="bg-white border border-gray-400 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
        </div>
        <span class="mx-4 mt-2  text-gray-500">to</span>
        <div class="relative mr-3">
          
          <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
      </div>
      
      <select name="vcl"  id="underline_select" class="block py-0.5 px-4 w-1/5 text-sm font-semibold text-black bg-white border-1 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
          <option disabled selected> Select Vehicle Plate</option>    
          @foreach ($fuel_vcls as $vcler)   
    <option value="{{ $vcler->id  }}">{{ $vcler->plate_city}} - 0{{ $vcler->plate_code }} - <b> {{ $vcler->plate_id }}</option>
    @endforeach
          
      </select>
              <a href="{{ route('admin.fuel.show', $fuel->id) }}">
                  <button type="submit" class="text-white mr-3 font-bold bg-gradient-to-r from-teal-800 to-cyan-400  border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                  >Filter Cost</button>
              </a>
      </form>


                
            


    <div class="relative mt-2 max-h-full h-full bg-slate-100 px-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-1 items-center">
            <div class="text-xl font-bold">
            {{ $fuel->plate_city}}-0{{ $fuel->plate_code }}-<b> {{ $fuel->plate_id }} </b>
            </div>  
            <div>     
                {{-- <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a> --}}
                <a href="{{ route('admin.fuel.index') }}" class="text-gray-200 bg-gray-600 font-bold px-6 py-2  hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Back</a>
            </div>
        </div>


            

        
        
                   
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No.
                            </th>
                            
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Previous Data 
                                
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Latest Data
                               
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Diference
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                KM / Liter
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                                    
                        @foreach ($fuel->vcl_hasmny_fuels->chunk(2) as $key=>$kms)
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                            </th>
                            <td class="py-1 px-2 border-r">
                                
                                <b> {{ $distance =  $km->kilometre }}</b> <small class="text-yellow-300">KM</small> 
                                <br><hr>
                                
                                
                            </td>      
                            
                            <td class="py-1 px-2 border-r">
                               
                            </td>
                            <td class="py-1 px-2 border-r font-extrabold underline">
                                
                                <small class="text-yellow-300">KM/L</small>
                            </td>                       
                        </tr>
                    </tbody>
                </table>
                @endforeach
                
    </div> 

        
    
</x-admin-layout>