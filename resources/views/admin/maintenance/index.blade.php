
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    

  
        
    <div class="flex justify-between w-full px-4 py-2 items-center">
        <div class="text-xl font-bold">
          Maintenance Requests
        </div>
        <a href="{{ route('admin.vcls.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
            >Add Vehicle</a>
      </div>
        
       
<div class="relative overflow-x-auto border-b-2 h-80 shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                    {{ $request->rqst_blgto_mtns->maintenance_name }}
                </td>
                <td class="py-1 px-2">
                    {{ $request->request_by}}
                </td>
               
                <td class="py-1 px-2">
                    {{ $request->description}}
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

<div class="flex justify-between w-full mt-5 px-4 py-2 items-center">
    <div class="text-xl font-bold">
      Vehicle Lists
    </div>
    <a href="#" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
        >Add Vehicle</a>
  </div>
<div class="relative overflow-x-auto border-b-2 h-96 shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                    {{ $request->rqst_blgto_mtns->maintenance_name }}
                </td>
                <td class="py-1 px-2">
                    {{ $request->request_by}}
                </td>
               
                <td class="py-1 px-2">
                    {{ $request->description}}
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

            
        
    
</x-admin-layout>