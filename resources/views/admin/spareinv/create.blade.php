<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="py-2">
        <div class="flex justify-between rounded-md py-4 mx-4 bg-slate-300">
        <div class="text-xl pl-3 font-bold">
            Deliver Spare Part
    </div>  
        <div class=" p-2">
            <a href="{{ route('admin.spareinv.index') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back To Index</a>
        </div>
    </div>
            <div class="max-w-7xl mt-3 md:mx-auto bg-gray-50 shadow-lg py-4 mx-4 sm:px-6 lg:px-8">
            
                <form method="POST" action="{{ route('admin.spareinv.store') }}">
                    @csrf
                        
                    <div class="flex justify-around">
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="date" name="date_in" id="date_in" class="block py-2.5 px-0 w-full absolute text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required placeholder=" "/>
                            <label for="date_in" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Date of Delevery</label>
                        </div>

                        
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="number" name="serial" id="serial" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " />
                            <label for="serial" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Serial Number <small>OPTIONAL</small> </label>
                        </div>

                        <div class="relative z-0 mb-10 w-1/5 group">
                            <label for="spare_type" class="sr-only">Spare Types</label>
                            <select name="spare_type" id="spare_type" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required >
                                <option disabled selected>Spare Types</option>
                                @foreach (App\Enums\SpareType::cases() as $SpareType)
                                <option value="{{ $SpareType->value }}">{{ $SpareType->name }}</option>
                                @endforeach
                            </select>
                        </div>                      
                        
                        
                    </div>    
                        <div class="flex justify-around">

                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="text" name="spare_name" id="spare_name" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="spare_name" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Spare part Name</label>
                            </div>                            
                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="text" name="spare_model" id="spare_model" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="spare_model" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Spare part Model</label>
                            </div>                            
                                  
                            
                            <div class="relative z-0 mb-10 w-1/5 group">
                                <input type="number" name="qty_in" id="qty_in" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="qty_in" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Quantity Delevered</label>
                            </div>

                            

                            
                        </div>
                        
                        <div class="flex justify-start pl-20">

                            <div class="relative z-0 m-auto mb-10 w-1/5 group">
                                <input type="number" name="price_in" id="price_in" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="price_in" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Price <small>Total</small></label>
                            </div>

                            <div class="relative z-0 m-auto mb-10 w-1/5 group">
                                <label for="unit" class="sr-only">Unit of measurment</label>
                                <select name="unit" id="unit" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required >
                                    <option disabled selected>Unit of measurment</option>
                                    @foreach (App\Enums\Unit::cases() as $unit)
                                    <option value="{{ $unit->value }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>               
                            

                        </div>
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Store In</button>
                </form>
  
            
            

        </div>
    
    
</x-admin-layout>