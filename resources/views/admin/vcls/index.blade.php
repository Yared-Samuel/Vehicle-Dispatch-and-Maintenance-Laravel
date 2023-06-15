
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    {{-- {{ $ids = 1 }} --}}
    <div class="relative overflow-x-scroll max-h-full h-5/6 bg-slate-50 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full bg-slate-400 px-4 py-2 items-center">
            <div class="text-xl font-bold">
                Vehicle Lists
            </div>  
            <div>     
                <a href="{{ route('admin.vcls.create') }}" class="text-white font-bold bg-gradient-to-r from-teal-800 to-cyan-400 hover:font-extrabold border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Vehicles</a>
                <a href="{{ route('admin.vcls.edit', $ids=1) }}" class="text-white font-bold hover:text-white border inline border-teal-800 bg-gradient-to-r from-teal-800 to-cyan-400 hover:font-extrabold hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >General Information</a>
            </div>
        </div>
        
    
        
       
        <div class="bg-gray-100 p-2 rounded-md border">
            <table id="vcl-tbl" class="display table table-sm hover cell-border compact stripe" >
                <thead style="background-color: gray; font-size: 100%; color: white;">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Plate
                </th>
                <th>
                    Category
                </th>
                <th>
                    Model
                </th>
                <th>
                    Purchase date
                </th>
                <th>
                    Fuel Consumption
                </th>
                <th>
                    Document
                </th>
                <th>
                    Detail
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($vcls as $key=>$vcl)
            <tr >
                <th >
                    {{ $key + 1 }}
                </th>
                <td>
                    {{ $vcl->plate_city }} - 0{{ $vcl->plate_code }} <b>-</b> {{ $vcl->plate_id }}
                </td>
                <td>
                    {{ $vcl->category_name }}
                </td>                
                <td>
                    {{ $vcl->vcl_model }}
                </td>
                <td>
                    {{ $vcl->purchase_date }}
                </td>
                <td>
                    {{ $vcl->fuel_type }}
                </td>
                <td scope="row" class="pt-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img src={{ Storage::url($vcl->image) }}   class="w-10 h-10 rounded">   
                </td>
                <td class="flex py-1 px-1">
                    <a href="{{ route('admin.vcls.show', $vcl->id) }}" class="text-teal-600"
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
</div>


        
    
</x-admin-layout>

<script>
//     $(document).ready(function() {
//     $('#vcl-tbl').DataTable({
//         dom: 'B<"clear">lfrtip',
//    buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5']
//     });
// });


$(document).ready(function() {
    $('#vcl-tbl').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 10,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
 
</script>