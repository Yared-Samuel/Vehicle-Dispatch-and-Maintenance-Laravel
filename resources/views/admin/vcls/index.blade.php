
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    

  
        
    <div class="flex justify-between w-full px-4 py-2 items-center">
        <div class="text-xl font-bold">
          Vehicle Lists
        </div>
        <a href="{{ route('admin.vcls.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
            >Add Vehicle</a>
      </div>
        
       
<div class="relative  border-b-2 h-5/6 max-h-screen min-h-max shadow-md sm:rounded-lg">
    <table id="table_one" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Plate Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Model
                </th>
                <th scope="col" class="px-6 py-3">
                    Purchase date
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Fuel Consumption
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($vcls as $vcl)
            <tr class="odd:bg-white even:bg-slate-100 bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                </th>
                <td class="px-6 py-4">
                    {{ $vcl->plate_city }}  0{{ $vcl->plate_code }} <b>-</b> {{ $vcl->plate_id }}
                </td>
                
                <td class="px-6 py-4">
                    {{ $vcl->vcl_model }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->purchase_date }}
                </td>
                
                <td class="px-6 py-4">
                    {{ $vcl->vcl_blgto_cats->category_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->fuel_type }}
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
    <a href="{{ route('admin.vcls.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
        >Add Vehicle</a>
  </div>
<div class="relative overflow-x-auto border-b-2 h-96 shadow-md sm:rounded-lg">
    <table id="table_one" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Plate Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Code
                </th>
                <th scope="col" class="px-6 py-3">
                    City
                </th>
                <th scope="col" class="px-6 py-3">
                    Model
                </th>
                <th scope="col" class="px-6 py-3">
                    Fuel Consumption
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($vcls as $vcl)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                </th>
                <td class="px-6 py-4">
                    {{ $vcl->plate_id }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->plate_code }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->plate_city }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->vcl_model }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->fuel_type }}
                </td>
                <td class="px-6 py-4">
                    {{ $vcl->vcl_blgto_cats->category_name }}
                </td>
                
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
</div>

            
        
    
</x-admin-layout>