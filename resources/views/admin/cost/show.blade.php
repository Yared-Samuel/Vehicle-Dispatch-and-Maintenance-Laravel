<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    
        
       <div class="bg-slate-100">


    

    <div class="flex justify-between mx-0 rounded-md shadow-sm" role="group">
      <div class="inline-flex rounded-md  shadow-sm" role="group">
        
        {{-- <a href="{{ route('admin.cost.create') }}">
            <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
              >Cost Form</button>
        </a> --}}
        <a href="{{ route('admin.cost.index') }}">
            <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
              >Cost List</button>
        </a>
        {{-- <a href="{{ route('admin.cost.index') }}">
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
        </a>       --}}
    </div>
      <div class="text-right font-bold mr-4">Cost Lists</div>

      {{-- <form action="{{ route('admin.cost.index') }}" method="GET" role="search"  class="flex">
  
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
      </form> --}}
    
    </div>
      <div>       
            
        




    
  
  
  
  
        <table id="cost_show"  class="display table table-sm hover cell-border compact stripe" >
          <thead style="background-color: gray; font-size: 100%; color: white;">
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
             Item Description
                
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Unit Price
               
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Quantity
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Total Cost
            </th>
            <th scope="col" class="py-2 px-2 border border-r-gray-300">
              Reference No
            </th>
        </tr>
    </thead>
    
    <tbody>
      
      
        
       
      
      
        
      @foreach ($cost as $key=>$costs )
        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
         
          <th scope="row" class="py-1 px-2 border-r">
              {{ $key +1  }} 
            </th>
          
            <td class="py-1 px-2 border-r">
             0{{ $costs->mtnnCost_blgto_vcls->plate_code }} - <b> {{ $costs->mtnnCost_blgto_vcls->plate_id }}
            </td>
            <td class="py-1 px-2 border-r">
              {{ $costs->cost_date }}
            </td>
            
            <td class="py-1 px-2 h-5 border-r">                               
              {{ $costs->cost_desc }}
            </td>
            <td class="py-1 px-2 border-r">
              {{ $spare=$costs->cost_cash ?? '0' }}
            </td>
            <td class="py-1 px-2 border-r underline">
              {{ $qty=$costs->qty ?? '1' }}
            </td>
            
            <td class="py-1 px-2 border-r font-extrabold underline">
              {{ $costs->total_cost }}
            </td>
            <td class="py-1 px-2 border-r  underline">
              {{ $costs->ref_no }}
            </td>      
            
    
           
        
        
        
        
      </tr>
      
      @endforeach
      
    </tbody>
    
       
    
</table>

<div class = "flex items-center flex-row w-full bg-gradient-to-r  dark:from-teal-500 dark:to-teal-500 rounded-md p-10">
  
  
  
  <div class = "flex flex-col justify-end flex-grow text-black">
      <div class = "text-lg  whitespace-nowrap border text-center">
          Total Cost
      </div>
      <div class = "border text-center font-bold">
         {{  $cost->sum('total_cost')  }}
      </div>
  </div>
  
</div>
  
  


  
</div>
 
    
    </div> 
    
        
    </div>
</x-admin-layout>


<script>
  $(document).ready(function() {
  $('#cost_show').DataTable({
      dom: 'B<"clear">lfrtip',
 buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
 pageLength: 10,
    lengthMenu: [5, 10, 20, 50, 100, 200, 500],
    
  });
});


</script>