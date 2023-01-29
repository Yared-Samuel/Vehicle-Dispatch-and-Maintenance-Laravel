
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
    <div class="relative overflow-x-scroll max-h-full h-5/6 bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
                Vehicle Lists
            </div>  
            <div>     
                <a href="{{ route('admin.vcls.create') }}" class="text-white font-bold bg-gradient-to-r from-teal-800 to-cyan-400 hover:font-extrabold border-4 border-slate-300 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Vehicles</a>
                <a href="#" class="text-white font-bold hover:text-white border inline border-teal-800 bg-gradient-to-r from-teal-800 to-cyan-400 hover:font-extrabold hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Something here</a>
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
                
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
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