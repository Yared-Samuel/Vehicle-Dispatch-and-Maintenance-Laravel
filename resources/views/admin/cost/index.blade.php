<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="flex justify-between mx-0 rounded-md shadow-sm" role="group">
      <div class="inline-flex rounded-md  shadow-sm" role="group">
        
        <a href="{{ route('admin.cost.create') }}">
            <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
              >Cost Form</button>
        </a>
        <a href="{{ route('admin.cost.index') }}">
            <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
              >Cost List</button>
        </a>
        <a href="{{ route('admin.cost.index') }}">
            <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
              >Replenish
              <span class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-white bg-red-400 rounded-full">
                2
              </span>
            </button>
        </a>
        <a href="">           
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900"
              >Top UP</button>
        </a>      
    </div>
      {{-- <div class="text-right font-bold mr-4">Cost Lists</div> --}}

      <form action="{{ route('admin.cost.index') }}" method="GET" role="search"  class="flex">
  
        <div class="relative">    
          <input name="start" type="date" value="{{ request()->input('start') }}" class="bg-white border border-gray-400 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
        </div>
        <span class="mx-4 mt-2  text-gray-500">to</span>
        <div class="relative mr-2">
          
          <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
      </div>
      <div class="relative mr-2">
      <select name="vcl"  class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-2 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option disabled selected> Select Vehicle Plate</option>    
          @foreach ($cost_vcls as $vcler)   
          <option value="{{ $vcler->id  }}">{{ $vcler->plate_city}} - 0{{ $vcler->plate_code }} - <b> {{ $vcler->plate_id }}</option>
          @endforeach
          
      </select>
      </div>
              <a href="{{ route('admin.cost.index') }}">
                  <button type="submit" class="text-white mr-3 font-bold bg-gradient-to-r from-teal-800 to-cyan-400  border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1 py-0 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                  >Filter Cost</button>
              </a>
      </form>
    </div> 




    
  
  
  
  
  <table class="absolute mt-14 w-11/12 mx-4 mr-4 table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
      <tr>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                 No
            </th>
            <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
              Plate
            </th>
            <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
              Cost date
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Spare part
                
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Cost
               
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Quantity
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Operation
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Cost
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Other Costs
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Ref. No
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Total
            </th>
            
            
            <th scope="col" class="py-2 px-1 border border-r-gray-300">
                Action
            </th>
        </tr>
    </thead>
    
    <tbody>
      
      
        
       
      @foreach ($cost_vcls as $key=>$vcls )
      @foreach ($vcls->vcl_cost as $costs)  
      
        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
          
          <th scope="row" class="py-1 px-2 border-r">
              {{ $key +1 }}
            </th>
            <td class="py-1 px-2 border-r">
             0{{ $vcls->plate_code }} - <b> {{ $vcls->plate_id }}
            </td>
            <td class="py-1 px-2 border-r">
              {{ $costs->cost_date }}
            </td>
            
            <td class="py-1 px-2 h-5 border-r">                               
              {{ $costs->spare_cost_desc }}
            </td>
            <td class="py-1 px-2 border-r">
              {{ $spare=$costs->spare_cost ?? '0' }}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $qty=$costs->spare_qty ?? '1' }}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $costs->mech_cost_desc }}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $mech=$costs->mech_cost ?? '0'}}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $costs->other_cost_desc }} - {{ $other= $costs->other_cost }}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $costs->ref_no }}
            </td>
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ ($spare * $qty) + $mech + $other }}
            </td>
            
            <td class="flex py-1 px-1">
              <a href="{{ route("admin.cost.show", $costs->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a> <span class="font-bold"> - OR - </span>
                  <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Complete</a>
                {{-- <a href="{{ route("admin.fuel.show", $fueler->id) }}" class="text-teal-600"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                          </svg>
                          
                    </a> --}}
            </td>
    
           
        </tr>
        @endforeach
        @endforeach
    </tbody>
   
       
    
</table>
  
  


  
      
    
    </div> 

        
    </div>
</x-admin-layout>