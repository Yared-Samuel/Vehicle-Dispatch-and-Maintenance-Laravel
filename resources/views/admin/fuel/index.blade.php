
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 mb-10">  
    <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
                Fuel Consumption Analysis
            </div>  
            <div>     
                <a href="{{ route('admin.fuel.create') }}" class="text-white font-bold bg-teal-600 hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a>
                {{-- <a href="{{ route('admin.fuel.index') }}" class="text-white font-bold bg-teal-600 hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a> --}}
            </div>
        </div>
        


        <div class="flex justify-end">
        <form action="{{ route('admin.fuel.index') }}" method="GET" role="search"  class="flex justify-end pt-2 bg-gray-200">
            @csrf            
        <div class="relative">    
          <input name="start" type="date" value="{{ request()->input('start') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start" required>
        </div>
        <span class="mx-4 mt-2  text-gray-500">to</span>
        <div class="relative mr-2">
          
          <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end" required>
      </div>
        <div class="relative mr-2">
          
            <label for="vcl_id" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-115 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Vehicle Plate Number</label>                                
                            <select name="vcl_id" id="vcl_id" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                <option disabled selected> Select Vehicle </option>
                                @foreach ($vcls as $vcl)
                                <option class="text-white bg-slate-600" value="{{ $vcl->id }}">{{ $vcl->plate_city }}  0{{$vcl->plate_code}} - {{ $vcl->plate_id   }}</option>
                                @endforeach
                            </select>

          {{-- <input name="end" type="date" value="{{ request()->input('end') }}" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end"> --}}
      </div>
      
              <a href="{{ route('admin.fuel.index') }}">
                  <button type="submit" class="text-white mr-3 font-bold  border-4 border-teal-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1 py-0 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                  ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="green" class="w-12 h-6">
                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                  </svg>
                                  </button>
              </a>
              
      </form>
      <a href="{{ route('admin.fuel.index') }}" class="pt-2">
        <button type="submit" class="text-white font-bold  border-4 border-red-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1  text-center ml-2  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                        ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="red" class="w-12 h-6">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                        
                        </button>
    </a>

</div>
  
        
            <div class="bg-gray-100 p-2 rounded-md border">
        
                <table id="example" class="display table table-sm hover cell-border compact stripe" >
                    <thead style="background-color: gray; font-size: 100%; color: white;">
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Vehicle Plate
                            </th>
                            <th>
                                Date
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
                            <th>
                                Traveled KM
                            </th>
                            <th>
                                Consumption
                            </th>
                            
                            
                            <th>
                                Detail
                            </th>
                        </tr>
                    </thead>
                    
                        
                        @foreach ($fuels as $key=>$fuel)
                       
                        
                        <tr>
                            <th>
                                {{ $key +1 }}
                            </th>
                            <td>
                                {{ $fuel->fuel_blgto_vcls->plate_city}} - 0{{ $fuel->fuel_blgto_vcls->plate_code }} - <b> {{ $fuel->fuel_blgto_vcls->plate_id }} </b>
                            </td>
                            {{-- @foreach ($fueler->vcl_hasmny_fuels->take(-1) as $fuel) --}}
                            <td>                               
                                <b> {{ $fuel->fuel_date }}</b> 
                            </td>
                            <td>                               
                                <b> {{ $fuel->cash }}</b> <small class="text-blue-800">Birr</small> 
                            </td>
                            
                            <td>
                                <b> {{ $fuel->litre }}</b> <small class="text-blue-800">liter</small> 
                            </td>
                            <td>
                                <b> {{ $fuel->kilometre }}</b> <small class="text-yellow-800">KM</small> 
                            </td>
                            <td>
                                <b> {{$diff =  $fuel->kilometre - $fuel->prev_km }}</b> <small class="text-yellow-800">KM</small> 
                            </td>
                            <td>
                                <b> {{number_format($diff / $fuel->litre, 2)  }}</b> <small class="text-red-800">KM / LITER</small> 
                            </td>
                            {{-- @endforeach --}}
                            <td class="flex py-1 px-1">
                                <a href="{{ route("admin.fuel.edit", $fuel->fuel_blgto_vcls->id) }}" class="text-teal-600"
                                    >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z" clip-rule="evenodd" />
                                      </svg>
                                      
                                          
                                    </a>
                            </td>
                            @endforeach
                       
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>       
    </div>
                
    </div> 
     


</x-admin-layout>      
<script>
    $(document).ready(function() {
    $('#example').DataTable({
        dom: 'B<"toolbar">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],   
   pageLength: 10,
    lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
    });
    
});
  
 
</script>

