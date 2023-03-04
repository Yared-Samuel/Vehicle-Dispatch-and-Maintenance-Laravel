<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    
        
       


    {{-- <div class="relative mt-2 max-h-full h-full bg-slate-100 px-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-1 items-center">
            <div class="text-xl font-bold">
            </div>  
        </div>


            

        
        
                   
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No.
                            </th>
                            
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                cost Date
                                
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
                        
                                    
                        
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                            </th>                   
                            <td class="py-1 px-2 border-r">
                                {{ $cost->cost_date }}
                            </td>      
                           
                            <td class="py-1 px-2 border-r">
                                {{ $cost->spare_cost_desc }}
                            </td>
                            <td class="py-1 px-2 border-r font-extrabold underline">                                
                            </td> 
                                       
                           

                            
                           
                           
                            
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
                
                
    </div>  --}}

    @foreach ($cost as $key=>$costs)
    <div class="min-h-screen mt-4 bg-gray-50 py-6 flex flex-col justify-center  overflow-hidden sm:py-12">
        <div class="bg-white shadow-xl ring-1 ring-gray-900/5 sm:max-w-lg sm:mx-auto sm:rounded-lg">
          <div class="bg-blue-700 py-4 px-8 w-full rounded-t-md">
            <h1 class="font-bold text-4xl text-gray-100">Vehicle Maintenance Cost</h1>
            <p class="mt-4 underline text-gray-300">Request Description</p>
            <p class="mt-4 text-gray-300">{{ $costs->cost_blgto_rqsts->description }}</p>
            <div class="flex flex-wrap justify-center gap-5 my-5">
                
                <button
                class="bg-blue-300 bg-opacity-40 hover:bg-blue-400 py-3 px-6 font-semibold text-white inline-flex items-center rounded">
                <small>REQUESTED BY</small> -   {{ $costs->cost_blgto_rqsts->request_by }}
                </button>
              
              
            </div>
          </div>
          <div class="max-w-md mx-auto px-2">
            <div class="divide-y divide-gray-300/50">
              <div class="py-8 text-base leading-7 space-y-10 text-gray-600">
                <div class="text-center py-3 px-1 font-medium text-gray-600 bg-gray-300 rounded-xl">
                  <p>Maintenance Duration From {{ $costs->cost_blgto_rqsts->start_date }} To {{ $costs->cost_blgto_rqsts->end_date }} Millage {{ $costs->cost_blgto_rqsts->kilometer }} <small>KM</small></p>
                </div>
                <ul class="space-y-8 pb-4">
                  <li class="flex justify-between items-center">
                    <div class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                          
                        {{ $costs->spare_qty }} pice
                        {{ $costs->spare_cost_desc }}
                    </div>
                    <div class="font-semibold text-2xl text-blue-600">{{ $spare = $costs->spare_qty *  $costs->spare_cost}} </div>
                  </li>
                  <li class="flex justify-between items-center">
                    <div class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                          
                        {{ $costs->mech_cost_desc }}
                    </div>
                    <div class="font-semibold text-2xl text-blue-600">{{ $costs->mech_cost }}</div>
                  </li>
                  <li class="flex justify-between items-center">
                    <div class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                          
                      {{ $costs->other_cost_desc }}
                    </div>
                    <div class="font-semibold text-2xl text-blue-600">{{ $costs->other_cost }}</div>
                  </li>
                  <hr>
                  <li class="flex justify-between items-center">
                    <div class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                          </svg>
                          
                      Total Cost
                    </div>
                    <div class="font-semibold text-2xl text-blue-600">{{ $costs->mech_cost + $spare + $costs->other_cost }}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div
@endforeach
        
    </div>
</x-admin-layout>