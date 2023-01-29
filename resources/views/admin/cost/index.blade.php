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
        <a href="">           
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900"
              >Top UP</button>
        </a>      
    </div>
      <div class="text-right font-bold mr-4">Cost Lists</div>
    </div> 

  
<form action="{{ route('admin.cost.index') }}" method="GET" role="search"  class="flex justify-end bg-slate-200">
  
  <div class="relative">    
    <input name="start" type="date" value="{{ request()->input('start') }}" class="bg-white border border-gray-400 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
  </div>
  <span class="mx-4 mt-2  text-gray-500">to</span>
  <div class="relative mr-3">
    
    <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
</div>

<select name="vcl" value="{{ request()->input('vcl') }}" id="underline_select" class="block py-0.5 px-4 w-1/5 text-sm font-semibold text-black bg-white border-1 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
    <option disabled selected>Select Vehicle Plate</option>
    @foreach ($cost_vcls as $vcler)   
    <option value="{{ $vcler->id  }}">{{ $vcler->plate_city}} - 0{{ $vcler->plate_code }} - <b> {{ $vcler->plate_id }}</option>
    @endforeach
    
</select>
        <a href="{{ route('admin.cost.index') }}">
            <button type="submit" class="text-white mr-3 font-bold bg-gradient-to-r from-teal-800 to-cyan-400  border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                            >Filter Cost</button>
        </a>
</form>


    <div class="mx-4 mb-4">
  
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
                  Cost
              </th>
              <th scope="col" class="px-6 py-3">
                  Quantity
              </th>
              <th scope="col" class="px-6 py-3">
                Operation
              </th>
              <th scope="col" class="px-6 py-3">
                Cost
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