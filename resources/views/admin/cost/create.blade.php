<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    <div class="flex justify-between mx-0 rounded-md shadow-sm" role="group">
        <div class="inline-flex rounded-md  shadow-sm" role="group">
          
            <a href="{{ route('admin.cost.create') }}">
                <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
                  >Cost Form</button>
            </a>
            <a href="{{ route('admin.cost.index') }}">
                <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
                  >Cost List</button>
            </a>
            <a href="{{ route('admin.cost.index') }}">
                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                  >Replenish
                  <span class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-white bg-red-400 rounded-full">
                    2
                  </span>
                </button>
            </a>
            {{-- <a href="">           
                <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900"
                  >Top UP</button>
            </a>       --}}
      </div>
        <div class="text-right font-bold mr-4">Cost Form</div>
      </div> 
    <div class="py-10"> 

        <section class="mb-1 bg-slate-100">
    
            <h3 class="flex items-center my-4">
                <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
                <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
                <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
                <span class="inline-block px-4 py-1 text-md font-bold text-center text-gray-900 bg-teal-200 rounded-full">
                Request Form
              </span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span class="inline-block px-4 py-1 text-md font-bold text-center text-gray-900 bg-teal-200 rounded-full">
              Maintenance Complition
              </span>
              

              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span class="inline-block px-4 py-1 text-md font-bold text-center text-gray-900 bg-teal-200 rounded-full">
                Cost and Spareparts
              </span>
              {{-- <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span> --}}
            </h3>
        </section>
        <div class="bg-slate-200 border rounded-lg shadow-md py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <form method="POST" action="{{ route('admin.cost.store') }}">
                    @csrf
                    <div class="flex justify-around p-2">
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="text" name="spare_cost_desc" id="spare_cost_desc" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="spare_cost" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Sparepart</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="number" name="spare_cost" id="spare_cost" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="spare_cost" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Sparepart Cost per Unit</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="number" name="spare_qty" id="spare_qty" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder="1"  />
                            <label for="spare_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Quantity</label>
                        </div>
                    </div>    
                    <div class="flex justify-around mr-5 py-3">
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="text" name="mech_cost_desc" id="mech_cost_desc" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="spare_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Work Performed</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="number" name="mech_cost" id="mech_cost" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="mech_cost" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Cost</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="text" name="garage_name" id="garage_name" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="spare_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Garage Name</label>
                        </div>
                        
                    </div>  
                    <div class="flex justify-around p-2">
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="text" name="other_cost_desc" id="other_cost_desc" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "  />
                            <label for="spare_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Additional Work performed</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="number" name="other_cost" id="other_cost" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " />
                            <label for="other_cost" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Cost</label>
                        </div>
                        <div class="relative z-0 mb-5 w-1/4 group">
                            <input type="number" name="ref_no" id="ref_no" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                            <label for="ref_no" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >PCPV No.</label>
                        </div>
                    </div>
                    <div class="flex justify-around p-2">      
                   
                    
                                    
                    <div class="relative z-0 mb-5 w-1/4 group">
                        <label for="driver_id" class="multi peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" required
                            >Vehicle's Driver</label>                                
                        <select name="driver_id" id="driver_id" class="block py-2.5 px-0 w-full font-medium text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" required >
                            <option disabled selected> Select Driver </option>
                            @foreach ($drvrs as $drvr)
                            <option class="text-white bg-slate-600" value="{{ $drvr->id }}">
                                {{ $drvr->driver_name }}                                
                            </option>
                                
                                @endforeach
                        </select>
                    </div> 
                    
                    
                    
                    <div class="relative z-0 mb-5 w-1/4 group">
                        <input type="date" name="cost_date" id="cost_date" class="block py-2.5 px-0 w-full absolute text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required placeholder=" "/>
                        <label for="cost_date" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Cost Date</label>
                    </div>
                    @if ( isset($vcls->id))
                    
                        <div class="relative z-0 mb-5 w-1/4 group">
                        <input type="text" name="requester_id" hidden:value="{{ $vcls->id }}" id="requester_id" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500" placeholder="{{ $vcls->rqst_blgto_vcls->plate_city }}  0{{$vcls->rqst_blgto_vcls->plate_code}} - {{ $vcls->rqst_blgto_vcls->plate_id   }} "  disabled/>
                        <label for="spare_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y--10 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Expence For Vehicle</label>
                    </div>
                    @else
                    
                    <div class="relative z-0 mb-5 w-1/4 group">
                        <label for="requester_id" class="multi peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                          >Vehicle</label>                                
                        <select name="requester_id" id="requester_id" class="block py-2.5 px-0 w-full font-medium text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" required >
                            <option disabled selected>Expence For Vehicle </option>
                              @foreach ($vcls as $vcl)
                            <option class="text-white bg-slate-600" value="{{ $vcl->id }}">
                                {{ $vcl->id }} - {{ $vcl->rqst_blgto_vcls->plate_city }}  0{{$vcl->rqst_blgto_vcls->plate_code}} - {{ $vcl->rqst_blgto_vcls->plate_id   }}  => <small>{{ $vcl->mtn_type }}</small> at <small>{{ $vcl->start_date }}</small>                   
                            </option>
                                
                                @endforeach
                        </select>
                    </div> 
                        
                    @endif

                    

                    

                    </div>
                        
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Next / Cost</button>
                                <a href="{{ route('admin.maintenance.index') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back</a>
                </form>
  
            
            

        </div>
    </div>
</x-admin-layout>