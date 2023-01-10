<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
        
            
    <div class="relative overflow-x-auto max-h-full mb-2 h-96 bg-slate-100 border-b-slate-500 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        
        <div class="flex justify-between w-full px-4 py-2 items-center border-b border-gray-300">
            <div class="text-xl font-bold">
              Tires On Vehicle
            </div>
            <a href="{{ route('admin.tires.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Tires</a>
          </div>
          
          <div
            class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:justify-between  w-full px-4 mb-2 mt-4 items-center">
            <div class="flex bg-gray-100 w-full sm:w-2/5 items-center rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
              <input
                class="w-full bg-gray-100 outline-none border-transparent focus:border-transparent focus:ring-0 rounded-lg text-sm"
                type="text" placeholder="Search a product..." />
            </div>
            <div class="flex-row space-x-2 items-center ">
              <select class="border border-gray-300 rounded-md text-gray-600 px-2 pl-2 pr-8 bg-white hover:border-gray-400 focus:outline-none text-xs
                 focus:ring-0">
                <option>Filter by</option>
                <option></option>
                <option></option>
              </select>
              <select class="border border-gray-300 rounded-md text-gray-600 px-2 pl-2 pr-8 bg-white hover:border-gray-400 focus:outline-none text-xs
                focus:ring-0">
                <option>Short by</option>
                <option></option>
                <option></option>
              </select>
              <button class="border border-gray-300 rounded-md text-gray-600 px-3 py-[9px] bg-white hover:border-gray-400 focus:outline-none text-xs
              focus:ring-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                </svg>
              </button>
            </div>
          </div>
    
            <table id="table_one" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2">
                                #
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Serial Number
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Brand
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Price
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Starting date
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Vehicle
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Witnnes Driver
                            </th>
                            <th scope="col" class="py-2 px-2">
                              Status
                          </th>
                            
                            <th scope="col" class="py-2 px-2 ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tires_vcl as $tire)
                                                               
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            
                            <td class="py-1 px-2">
                                
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->serial_num }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->tire_type }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->tire_price }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->start}}
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->tire_blgto_vcls->plate_id }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $tire->tire_blgto_drvrs->driver_name}}
                            </td>
                            {{-- <td class="py-1 px-2">
                             @if ($tire->status === 1)
                               {{ "On Vehicle" }}
                              @else
                              {{ "In Store" }}
                             @endif 
                             
                          </td> --}}
                           
                            
                            <td class="py-1 px-2">
                                <a href="{{ route('admin.tires.edit', $tire->id) }}" class="text-red-500 hover:text-white border border-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                  >Dispose Tire</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            

        
    

            <div class="relative overflow-x-auto pb-4 max-h-full mb-5 h-96  p-4 md:max-h-screen shadow-md sm:rounded-lg">
            <div class="flex justify-between w-full px-4 py-2 items-center border-b border-gray-300 mb-4">
              <div class="text-xl font-bold">
                Tires In Store
              </div>
              <a href="{{ route('admin.tires.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                  >Add Tires</a>
            </div>
  
          <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="py-2 px-2">
                              #
                          </th>
                          <th scope="col" class="py-2 px-2">
                              Serial Number
                          </th>
                          <th scope="col" class="py-2 px-2">
                            Brand
                        </th>
                        <th scope="col" class="py-2 px-2">
                            Price
                        </th>
                          
                        {{-- <th scope="col" class="py-2 px-2">
                            Status
                        </th> --}}
                          
                          <th scope="col" class="py-2 px-2 text-left">
                              Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($tires_in_stores as $tire)
                                                             
                      <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                          
                          <td class="py-1 px-2">
                              
                          </td>
                          <td class="py-1 px-2">
                              {{ $tire->serial_num }}
                          </td>
                          <td class="py-1 px-2">
                              {{ $tire->tire_type }}
                          </td>
                          <td class="py-1 px-2">
                              {{ $tire->tire_price }}
                          </td>
                          
                          
                          {{-- <td class="py-1 px-2">
                           @if ($tire->status === 1)
                             {{ "On Vehicle" }}
                            @else
                            {{ "In Store" }}
                           @endif 
                        </td> --}}
                         
                          
                          <td class="py-1 px-2">
                            <a href="{{ route('admin.tires.edit', $tire->id) }}" class="text-green-500 hover:text-white border border-green-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                              >Install On Vehicle</a>

                            
                              
                          </td>
                      </tr>
                      @endforeach
                      
                  </tbody>
              </table>
          </div>
          

      
  </div>
    
          

      
  </div>
</x-admin-layout>