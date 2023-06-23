<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 ">  
    



    <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        
            <x-inventory-nav-links>
            {{ __('Current Stock Balance') }}
            </x-inventory-nav-links>
        </div>
        
        

            
          <div>
            <table id="report_stock" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        
                        
                       
                        
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Item Name
                            
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Balance
                           
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                              
                
                    @foreach ($rems as $key=>$rem)
                    
                        
                    
                          
                     
                    <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                        
                        <td class="py-1 px-2 border-r">
                            <a href="">  -  <b> {{ $rem->name }}</b> </a>
                         </td>
                        <td class="py-1 px-2 border-r">
                            <a href=""> <b> {{ $q=$rem->vcl_hasmny_INV->sum('quantity_inv') }}</b> </a>
                            {{-- {{ dd($q) }} --}}
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
    $('#report_stock').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 10,
    lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
    });
  });
  
  
  </script>