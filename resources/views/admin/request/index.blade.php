<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
        
            
    <div class="relative max-h-20 h-2/3 bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        
        <div class="flex justify-between w-full pb-4  items-center">
            <div class="text-xl font-bold">
              List of Products
            </div>
            <div>
                <a href="{{ route('admin.request.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Request Form</a>
                <a href="{{ route('admin.maintenance.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Maintenance</a>
            </div>
          </div>
          
    
            <table id="table_one" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2">
                                #
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Plate
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Request Date
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Maintenance Type
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Requested By
                            </th>
                            <th scope="col" class="py-2 px-2">
                                discription
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
                                {{ $request->request_date}}
                            </td>
                            <td class="py-1 px-2">
                                {{ $request->mtn_type }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $request->request_by}}
                            </td>
                           
                            <td class="py-1 px-2">
                                {{ $request->description}}
                            </td>
                            <td class="py-1 px-2">
                                <a href="{{ route('admin.request.edit',$request->id) }}" class="text-green-500 hover:text-white border border-green-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Accept</a>
                                <a href="#" class="text-red-500 hover:text-white border border-red-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Decline</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>


            
    
        
    
</x-admin-layout>