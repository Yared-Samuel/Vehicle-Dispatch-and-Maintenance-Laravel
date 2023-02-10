<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    
        <div class="flex justify-between sticky top-0 bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
              Fuel Report
            </div>  
            {{-- <div>     
                <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a>
                <a href="{{ route('admin.fuel.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div> --}}
            <form action="{{ route('admin.reports.fuel') }}" method="GET" role="search"  class="flex justify-end ">
              @csrf
              <div class="relative">    
                <input name="start" type="date" value="{{ request()->input('start') }}" class="bg-white border border-gray-400 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
              </div>
              <span class="mx-4 mt-2  text-gray-500">to</span>
              <div class="relative mr-3">
                
                <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
            </div>
            
            <select name="vcl"  id="underline_select" class="block mx-10 px-4 w-1/5 text-sm font-semibold text-black bg-white border-1 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer rounded-md">
                <option disabled selected> Select Vehicle Plate</option>    
                @foreach ($fuel_vcls as $vcler)   
          <option value="{{ $vcler->id  }}">{{ $vcler->plate_city}} - 0{{ $vcler->plate_code }} - <b> {{ $vcler->plate_id }}</option>
          @endforeach
                
            </select>
                    <a href="{{ route('admin.reports.fuel') }}">
                        <button type="submit" class="text-white mr-3 font-bold bg-gradient-to-r from-teal-800 to-cyan-400  border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Filter Cost</button>
                    </a>
            </form>
        </div>
        
          
          
            
          
          <div class="w-full rounded-lg shadow-lg px-12 text-xs mb-8 pb-4 mx-4 sm:mx-0 bg-white">
             @foreach ($fuels as $fueler)            
              
              <div class="border-black  border-t-2">
                
                <div class="flex flex-col">
                  <h1 class="bg-slate-100 text-gray-800 text-xl font-medium">{{ $fueler->plate_city}} - 0{{ $fueler->plate_code }} - <b> {{ $fueler->plate_id }}</h1>
                  
                </div>
                <hr class="my-4">
                 
                <div>
                  
                  <div class="flex justify-between items-center">
                    <span class="font-medium text-base">Date</span><span class="text-base font-medium">Mileage</span><span class="font-medium text-base">Fuel Volume</span><span class="text-base font-medium">Amount</span>
                  </div>
                  @foreach ($fueler->vcl_hasmny_fuels as $fuel)
                  <div class="mb-1 flex justify-between items-center">
                    <span class="">{{ $fuel->fuel_date }}</span><span class="">{{ $fuel->kilometre }} <small>KM</small></span><span class="">{{ $fuel->litre }}<small>Liter</small></span><span class="">{{ $fuel->cash }}<small>Birr</small></span>
                  </div>
                  @endforeach
                  <hr class="my-4">
                  <div class="flex justify-between items-center">
                    <span class="text-lg font-medium">Total</span><span class="text-lg font-medium">{{ $fueler->vcl_hasmny_fuels->sum('cash') }}<small>Birr</small></span>
                  </div>
                </div>
                
              </div>
            @endforeach
            
          </div>
          
      
   

    
    
    
</x-admin-layout>