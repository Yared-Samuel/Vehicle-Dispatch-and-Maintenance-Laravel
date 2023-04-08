
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 ">  
    <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
                    Latest Fueling
            </div>  
            <div>     
                <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a>
                <a href="{{ route('admin.fuel.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div>
        </div>
        
        
            
        
                <table id="myTable" >
                    <thead >
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Vehicle Plate
                            </th>
                            <th>
                                Fuel Cost
                                
                            </th>
                            <th>
                                Fuel Volume
                               
                            </th>
                            <th>
                                Odometer Reading
                            </th>
                            
                            
                            {{-- <th>
                                Detail
                            </th> --}}
                        </tr>
                    </thead>
                    
                        
                        @foreach ($fuels as $key=>$fueler)
                       
                        
                        <tr>
                            <th>
                                {{ $key +1 }}
                            </th>
                            <td>
                                {{ $fueler->plate_city}} - 0{{ $fueler->plate_code }} - <b> {{ $fueler->plate_id }} </b>
                            </td>
                            @foreach ($fueler->vcl_hasmny_fuels->take(-1) as $fuel)
                            <td>                               
                                <b> {{ $fuel->cash }}</b> <small class="text-blue-300">Birr</small> 
                            </td>
                            <td>
                                <b> {{ $fuel->litre }}</b> <small class="text-blue-300">liter</small> 
                            </td>
                            <td>
                                <b> {{ $fuel->kilometre }}</b> <small class="text-yellow-300">KM</small> 
                            </td>
                            @endforeach
                            {{-- <td class="flex py-1 px-1">
                                <a href="{{ route("admin.fuel.edit", $fueler->id) }}" class="text-teal-600"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </a>
                            </td> --}}
                            @endforeach
                       
                        </tr>
                        
                        
                    </tbody>
                </table>
                    
                  </div>
                
    </div> 
    <div class="overflow-hidden mt-5 max-h-10 bg-slate-200 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
                    Latest Data Analysis
            </div>  
            <div>     
                {{-- <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a> --}}
                <a href="#" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div>
        </div>
        <div class="input-group relative flex flex-wrap items-stretch w-1/4 mb-0 rounded">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
            </span>
          </div>

          
          {{-- {{ $dataTable->table() }}


    
</div>
@push('scripts')
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.min.css') }}">
<script src="{{ asset('/assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>
{{ $dataTable->scripts() }}
@endpush --}}

</x-admin-layout>      
<script>
    var table = $('#myTable').DataTable();
 
 new $.fn.dataTable.Buttons( table, {
     buttons: [
         'copy', 'excel', 'pdf'
     ]
 } );
  
 table.buttons().container()
     .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
</script>