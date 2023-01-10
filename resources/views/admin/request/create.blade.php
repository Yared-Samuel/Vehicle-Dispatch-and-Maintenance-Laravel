
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
 

    <div class="">
        <div class="flex justify-end ">
            <a href="{{ route('admin.request.index') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back To Index</a>
        </div>
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
                        <form method="POST" action="{{ route('admin.request.index') }}">
                            @csrf

                            <div class="relative z-0 mb-6 w-full group">
                                <input type="date" name="request_date" id="request_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="request_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Maintenance Request Date</label>
                            </div>
                             <div class="relative z-0 mb-6 w-full group">
                                <input type="text" name="request_by" id="request_by" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="request_by" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Maintenance Requested By</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                
                                <select name="vcl_id" id="vcl_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Select Plate number </option>
                                    @foreach ($vcls as $vcl)
                                    <option value="{{ "$vcl->id" }}">{{ $vcl->plate_id }}</option>
                                    @endforeach
                                </select>
                                <label for="vcl_id" class="sr-only">Vehicle Plate Number</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <label for="id" class="sr-only">Vehicle Plate Number</label>
                                <select name="maintenancetype_id" id="maintenancetype_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Select mentenance type </option>
                                    @foreach ($mttyps as $mttyp)
                                    <option value="{{ $mttyp->id }}">{{ $mttyp->maintenance_name  }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <textarea name="description" id="description" cols="30" rows="5" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                                <label for="description" class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Description about requested maintenance</label>
                            </div>
                            
                            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Save</button>
                            
                        </form>
            </div>
                    
    </div>
                   
            

        

</x-admin-layout>