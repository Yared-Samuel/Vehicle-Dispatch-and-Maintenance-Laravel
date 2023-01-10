<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="flex  shadow-sm sm:rounded-lg">
        <h3 class="text-1xl font-bold text-gray-900 dark:text-white md:text-2xl lg:text-2xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400"
                >Vehicle Index</span></h3>
        <a href="{{ route('admin.cost.create') }}" class=" text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
            >Request Form</a>
    </div>
        
            
    <div class="relative overflow-x-auto max-h-full md:max-h-screen shadow-md sm:rounded-lg">
        <table class="w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2">
                                #
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Plate
                            </th>
                            
                            <th scope="col" class="py-2 px-2 text-left">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $request)
                                                               
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            
                            <td class="py-1 px-2">
                                
                            </td>
                            <td class="py-1 px-2">
                                {{ $request->rqst_blgto_vcls->plate_id }}
                            </td>
                            
                            <td class="py-1 px-2">
                                <a href="#" class="text-green-500 hover:text-white border border-green-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Accept</a>
                                <a href="#" class="text-red-500 hover:text-white border border-red-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Decline</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            

        
    </div>
</x-admin-layout>