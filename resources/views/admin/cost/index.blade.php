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
              >Replenish</button>
        </a>
        <a href="{{ route('admin.cost.index') }}">
            <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
              >Replenished
              <span class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-white bg-red-400 rounded-full">
                2
              </span>
            </button>
        </a>
        <a href="{{ route('admin.cost.index') }}">           
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900"
              >Top UP</button>
        </a>      
    </div>
      <div class="text-right font-bold mr-4">Cost Lists</div>
    </div> 
    <div class="m-4 mb-4">
  @foreach ($cost_vcls as $key=>$vcls )
  <button type="button" class="flex items-center justify-between w-full bg-teal-100  font-medium text-left text-green-900 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
    <span>{{ $vcls->plate_city}} - 0{{ $vcls->plate_code }} - <b> {{ $vcls->plate_id }}</span> {{ $vcls->vcl_cost->count() }}
  </button>
  <table class="w-full max-h-10 table-fixed overflow-x-auto text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="" class="px-0 py-0 truncate">
                  #
              </th>
              
              <th scope="col" class="px-6 py-3 ">
                  Cost date
              </th>
              <th scope="col" class="px-6 py-3">
                  Spare part
              </th>
              <th scope="col" class="px-6 py-3">
                  Spare part Price
              </th>
              <th scope="col" class="px-6 py-3">
                  Quantity
              </th>
              <th scope="col" class="px-6 py-3">
                Operation
              </th>
              <th scope="col" class="px-6 py-3">
                Operation Cost
              </th>
              <th scope="col" class="px-6 py-3">
                  Other Costs
              </th>
              <th scope="col" class="px-6 py-3">
                  Ref. No
              </th>
              <th scope="col" class="px-6 py-3 text-red-500 ">
                  Total
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
          </tr>
      </thead>
      @foreach ($vcls->vcl_cost as $key=>$costs)
      <tbody>
          <tr class="bg-white border-b max-h-5 dark:bg-gray-800 dark:border-gray-700">
              <th class="truncate" >
                  {{ $key }}
              </th>
              <td class="px-6 py-4">
                {{ $costs->cost_date }}
              </td>
              <td class="px-6 py-4  ">
                {{ $costs->spare_cost_desc }}
              </td>
              <td class="px-6 py-4 truncate ">
                {{ $spare=$costs->spare_cost ?? '0' }}
              </td>
              <td class="px-6 py-4 truncate ">
                {{ $qty=$costs->spare_qty ?? '1' }}
              </td>
              <td class="px-6 py-4">
                {{ $costs->mech_cost_desc }}
              </td>
              <td class="px-6 py-4 truncate ">
                {{ $mech=$costs->mech_cost ?? '0'}}
              </td>
              <td class="px-6 py-4 truncate ">
                {{ $costs->other_cost_desc }} - {{ $other= $costs->other_cost }}
              </td>
              
              <td class="px-6 py-4  ">
                {{ $costs->ref_no }}
              </td>
              <td class="px-6 py-4 text-red-500 ">
                {{ ($spare * $qty) + $mech + $other }}
              </td>
              
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Complete</a>
              </td>
          </tr>
         
      </tbody>
      @endforeach
  </table>
  

  @endforeach
</div>

  
      
    
    </div> 

        
    </div>
</x-admin-layout>