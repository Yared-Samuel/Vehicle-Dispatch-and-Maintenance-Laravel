<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="py-2">
        <div class="flex justify-between rounded-md py-4 mx-4 bg-slate-300">
        <div class="text-xl pl-3 font-bold">
            Maintenance Complition
    </div>  
        <div class=" p-2">
            <a href="{{ route('admin.maintenance.index') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back To Index</a>
        </div>
    </div>
            <div class="max-w-7xl sm:mx-auto bg-gray-50 shadow-lg py-4 mx-4 sm:px-6 lg:px-8">
            
                <form method="POST" action="{{ route('admin.maintenance.index') }}">
                    @csrf
                    {{-- {{  dd($rqsts) }} --}}
                    <div class="flex justify-around">
                        <div class="relative z-0 mb-10 w-1/5 group">                                
                            <select name="request_id" id="request_id" class="block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" >
                                <option disabled selected> Select Plate number </option>
                                @foreach ($rqsts as $rqst)
                                
                                <option class="text-white bg-slate-600" value="{{ $rqst->id }}">{{ $rqst->rqst_blgto_vcls->plate_city }}  0{{$rqst->rqst_blgto_vcls->plate_code}} - {{ $rqst->rqst_blgto_vcls->plate_id   }}</option>
                                @endforeach
                            </select>
                            <label for="request_id" class="sr-only">Vehicle Plate Number</label>
                        </div> 
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="number" name="Kilometer" id="Kilometer" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                            <label for="Kilometer" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Odometer Reading</label>
                        </div>
                        <div class="relative z-0 mb-10 w-1/5 group">                                
                            <select name="request_id" id="request_id" class="block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" >
                                <option disabled selected> Spare Part From Store </option>
                                @foreach ($mtn_costs as $mtn_costs)
                                <option class="text-white bg-slate-600" value="{{ $rqst->id }}">{{ $mtn_cost}} </option>
                                @endforeach
                            </select>
                            <label for="request_id" class="sr-only">Vehicle Plate Number</label>
                        </div> 
                            
                        
                    </div>    
                        <div class="flex justify-around">
                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="date" name="start_date" id="start_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required placeholder=" "/>
                                <label for="start_date" class="peer-focus:font-medium absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Garage Entry date</label>
                            </div>      
                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="date" name="end_date" id="end_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" "/>
                                <label for="end_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Complition Date</label>
                            </div>      
                             <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="text" name="mech_work_desc" id="mech_work_desc" class="dynamic block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-200 peer" placeholder=" " required />
                                <label for="mech_work_desc" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Mechanic's Description</label>
                            </div>
                             
                            
                                
                    </div>
                    <div class="flex justify-around">

                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="number" name="mech_cost" id="mech_cost" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="mech_cost" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Mechanic's Cost(Price)</label>
                            </div>
                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="text" name="spare_desc" id="spare_desc" class="dynamic block py-2.5 px-0 font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="spare_desc" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Purchased Spareparts</label>
                            </div>
                                                  
                    </div>
                        <div class="flex justify-around">
                            
                        
                            
                        </div>
                        
                            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Save</button>
                </form>
  
            
            

        </div>
    {{-- </div> --}}
</x-admin-layout>