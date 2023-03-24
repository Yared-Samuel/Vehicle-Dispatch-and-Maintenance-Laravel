
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    {{-- {{ $ids = 1 }} --}}
    <div class="relative overflow-x-scroll max-h-full h-5/6 bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-2 items-center">
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
        
    
        
       
        
            <table id="table_one" class="w-full overflow-x-scroll text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    #
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Plate
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Category
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Model
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Purchase date
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Fuel Consumption
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Document
                </th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">
                    Detail
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($vcls as $key=>$vcl)
            <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-1 px-2 border-r">
                    {{ $key + 1 }}
                </th>
                <td class="py-1 px-2 border-r">
                    {{ $vcl->plate_city }} - 0{{ $vcl->plate_code }} <b>-</b> {{ $vcl->plate_id }}
                </td>
                <td class="py-1 px-2 border-r">
                    {{ $vcl->category_name }}
                </td>                
                <td class="py-1 px-2 border-r">
                    {{ $vcl->vcl_model }}
                </td>
                <td class="py-1 px-2 border-r">
                    {{ $vcl->purchase_date }}
                </td>
                <td class="py-1 px-2 border-r">
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
    {{ $vcls->links() }}
</div>


    
</div>
</div>

<script>
    $(document).ready(function() {
      $('#tiretbl').DataTable({
        "order": [
          [4, "desc"]
        ],
        dom: 'lBfrtip',
        buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
      });
    });
    </script>
        
    
</x-admin-layout>