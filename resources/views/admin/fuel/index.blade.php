<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="relative overflow-x-auto max-h-full h-96 bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
                    Vehicles Approved
            </div>  
            <div>     
                <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a>
                <a href="{{ route('admin.fuel.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div>
        </div>
        
            
            
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Previous Kilometer & <br>
                                <hr>
                                Fueling date
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Latest Kilometer & <br>
                                <hr>
                                Fueling date
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Diference
                            </th>
                            
                            <th scope="col" class="py-2 px-1 border border-r-gray-300">
                                Detail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fuels as $key=>$fuel)
                                    
                       
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                            </th>
                            <td class="py-1 px-2 border-r">
                                {{ $fuel->plate_id }}
                            </td>
                            @foreach ($fuel->vcl_hasmny_fuels->take(-2) as $km)                               
                            
                            <td class="py-1 px-2 border-r">
                                
                                {{ $km->kilometre }}
                                <br><hr>
                                {{ $km->fuel_date }}
                            </td>
                            @endforeach

                            <td class="py-1 px-2 border-r">
                                
                                {{ $fuel->vcl_hasmny_fuels->map(function($km, $value){
                                    foreach ($value as  $value) {
                                        return $kms;
                                    }
                                })}}
                                
                                
                            </td>
                            
                            @endforeach
                            <td class="flex py-1 px-1">
                                <a href="#" class="text-teal-600 "
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </a>
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
                
    </div> 

        
    
</x-admin-layout>