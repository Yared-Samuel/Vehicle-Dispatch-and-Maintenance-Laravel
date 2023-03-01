<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="py-2">
        <div class="flex justify-between rounded-md py-4 mx-4 bg-slate-300">
        <div class="text-xl pl-3 font-bold">
            SparePart Issue
    </div>  
        <div class=" p-2">
            <a href="{{ route('admin.spareuse.index') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back To Index</a>
        </div>
    </div>
            <div class="max-w-7xl mt-3 md:mx-auto bg-gray-50 shadow-lg py-4 mx-4 sm:px-6 lg:px-8">
            
                <form method="POST" action="{{ route('admin.spareuse.store') }}">
                    @csrf
                        
                    <div class="flex justify-around">
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="date" name="use_date" id="use_date" class="block py-2.5 px-0 w-full absolute text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required placeholder=" "/>
                            <label for="use_date" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Issue Date</label>
                        </div>

                        <div class="relative z-0 mb-10 w-1/5 group">
                            <label for="vcl_id" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Vehicle Plate Number</label>                                
                            <select name="vcl_id" id="vcl_id" class="block py-2.5 px-0 w-full font-medium text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" >
                                <option disabled selected> Select Vehicle </option>
                                @foreach ($vcls as $vcl)
                                <option class="text-white bg-slate-600" value="{{ $vcl->id }}">{{ $vcl->plate_city }}  0{{$vcl->plate_code}} - {{ $vcl->plate_id   }}</option>
                                @endforeach
                            </select>                            
                        </div>

                        <div class="relative z-0 mb-10 w-1/5 group">
                            <label for="spareinvs_id" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >SparePart</label>                                
                            <select name="spareinv_id" id="spareinv_id" class="block py-2.5 px-0 w-full font-medium text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-2 focus:ring-0 focus:border-teal-500 peer" >
                                <option disabled selected>Select SparePart </option>
                                @foreach ($items as $item)
                                <option class="text-white bg-slate-600" value="{{ $item->id }}">{{ $item->spare_name }} </option>
                                @endforeach
                            </select>                            
                        </div>
                    </div>    
                    <div class="flex justify-around">

                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="number" name="use_qty" id="use_qty" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                            <label for="use_qty" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Quantity</label>
                        </div>

                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="number" name="mileage" id="mileage" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                            <label for="mileage" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Mileage</label>
                        </div>
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="text" name="driver_name" id="driver_name" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " />
                            <label for="driver_name" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Driver Name</label>
                        </div>        
                    </div>                        
                    <div class="flex justify-around">


                            <div class="relative z-0 mb-10 w-4/5 group">
                                <input type="text" name="desc" id="desc" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                                <label for="desc" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Description</label>
                            </div>
                             
                            
                                
                    </div>                        
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Save</button>
                </form>
  
            
            

        </div>
    {{-- </div> --}}
</x-admin-layout>