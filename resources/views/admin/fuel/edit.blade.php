<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>          
<div>
    <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
        <div class="text-xl font-bold">
                Latest Fueling
        </div>  
        <div>     
            
            <a href="{{ route('admin.fuel.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
            >Back</a>
        </div>
    </div>
    <div class="flex justify-around space-x-4">
        
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-1 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Vehicle plate</span>
            <h1 class="text-2xl font-bold">{{ $vcl_plate->plate_id }}</h1>
          </div>
          <div>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="h-8 w-8 text-indigo-600" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm14.25 6a.75.75 0 01-.22.53l-2.25 2.25a.75.75 0 11-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 111.06-1.06l2.25 2.25c.141.14.22.331.22.53zm-10.28-.53a.75.75 0 000 1.06l2.25 2.25a.75.75 0 101.06-1.06L8.56 12l1.72-1.72a.75.75 0 10-1.06-1.06l-2.25 2.25z" clip-rule="evenodd" />
            </svg>
            
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-1 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Average Consumption</span>
            <h1 class="text-2xl font-bold">{{ $avg_fuel }}</h1>
          </div>
          <div>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg> --}}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 text-indigo-600">
              <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0112 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 011.541 1.836v1.044a3 3 0 01-.879 2.121l-6.182 6.182a1.5 1.5 0 00-.439 1.061v2.927a3 3 0 01-1.658 2.684l-1.757.878A.75.75 0 019.75 21v-5.818a1.5 1.5 0 00-.44-1.06L3.13 7.938a3 3 0 01-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836z" clip-rule="evenodd" />
            </svg>
            
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-1 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Fuel Type</span>
            <h1 class="text-2xl font-bold">{{ $vcl_type[0] }}</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
            </svg>
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-1 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Total Cost</span>
            <h1 class="text-2xl font-bold">{{ $total_cash }}</h1>
          </div>
          <div>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
            </svg> --}}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-indigo-600">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
          </div>
        </div>
      </div>
    
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No.
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Date
                            </th>
                            
                            
                            
                            
                            
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Cash 
                            </th>

                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Consumed Liter 
                            </th>

                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Previous Reading
                               
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Odometer Reading 
                                
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                                    
                        @foreach ($view_fuel as $key=>$view)
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                            </th>
                            <td class="py-1 px-2 border-r">                                
                                <b> {{ $view->fuel_date }}</b> 
                            </td>
                            <td class="py-1 px-2 border-r">                                
                                <b> {{ $view->cash }}</b> <small class="text-green-800">Birr</small>
                            </td>

                            <td class="py-1 px-2 border-r">                                
                                <b> {{ $view->litre }}</b> <small class="text-teal-800">Litter</small>
                            </td>

                            <td class="py-1 px-2 border-r">                                
                                <small><b> {{ $view->prev_km }}</b></small> <small class="text-yellow-800">KM</small>
                            </td>
                            <td class="py-1 px-2 border-r">                                
                                <b> {{ $view->kilometre }}</b> <small class="text-yellow-800">KM</small>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
    </div> 

        
    
</x-admin-layout>