<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 mb-5">  
    <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
                    SparePart Inventory
            </div>  
            <div>     
                <a href="{{ route('admin.reports.stock') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Stock Balance</a>
                <a href="{{ route('admin.spareinv.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Recived</a>
                <a href="{{ route('admin.spareinv.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center mr-4 ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Recieve Items</a>
                <a href="{{ route('admin.spareuse.index') }}" class="text-yellow-900 font-bold hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Issued List</a>
                <a href="{{ route('admin.spareuse.create') }}" class="text-yellow-900 font-bold hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Issue Item</a>
            </div>
        </div>
        
        

            
          <div>
            <table id="spareinv_tbls" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        
                        
                       
                        <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                            No.
                        </th>
                        <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                            Ref_No
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Item Name
                            
                        </th>
                        <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                            Date
                        </th>
                        <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                            Product Serial No.
                        </th>
                        
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Model
                           
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Quantity
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Unit Price
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Total Price
                        </th>              
                        <th scope="col" class="py-2 px-1 border border-r-gray-300">
                            Detail
                        </th>
                    </tr>
                </thead>
                <tbody>
                              
                
                    @foreach ($spareInv as $key=>$spare)
                    
                        
                    
                          
                     
                    <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                        
                        
                        <td class="py-1 px-2 border-r">
                            {{-- <b> {{ $key +1 }}</b>  --}}
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->GRN_ref }}</b> 
                        </td>
                        
                        
                        <td class="py-1 px-2 h-5 border-r">                               
                            <b> {{ $spare->spareInItem->name }}</b> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->date_in }}</b> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->serial }}</b> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->model }}</b> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->qty_in }}</b> <small class="text-yellow-700">{{ $spare->spareInItem->unit }}</small>
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{ $spare->price_in }}</b> <small class="text-green-700">birr</small> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b>{{ $spare->price_in * $spare->qty_in }}</b> <small class="text-green-700">birr</small> 
                        </td>
                        
                        
                       
                        
                        <td class="flex py-1 px-1">
                            <a href="
                            {{ route('admin.printspareinv.export', $spare->GRN_ref) }}
                            " class="text-teal-600"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                      </svg>
                                      
                                </a>
                        </td>
                    </tr>
                    @endforeach    
                    
                </tbody>
            </table>
        </div>
                
                
                
    </div> 
    
</div>







  
    
</x-admin-layout>


<script>
    $(document).ready(function() {
    $('#spareinv_tbls').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 10,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>