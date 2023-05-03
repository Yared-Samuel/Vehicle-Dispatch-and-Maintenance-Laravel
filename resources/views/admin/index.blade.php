<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 p-4 mb-5">
        <h3 class="bg-teal-500 rounded-lg p-2 text-white font-bold w-1/5 text-center">Dashboard</h3>
        <div class="flex items-center float-right justify-around mx-auto p-1 bg-gray-500 w-1/6  rounded-xl space-x-2 mt-1 shadow-lg">
          <div>
            
            <h1 class="text-2xl font-bold text-teal-400">Stock</h1>
          </div>
          
        </div>

        <div class="bg-gray-100 p-2 rounded-md border border-blue-300">
        
          <table id="report_stock_dash" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
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
                         -  <b> {{ $rem->name }}</b> 
                     </td>
                    <td class="py-1 px-2 border-r">
                         <b> {{ $rem->vcl_hasmny_INV->sum('quantity_inv') }}</b> 
                     </td>
                                  
                    
                </tr>
                @endforeach    
                
            </tbody>
        </table>
      </div> 




      <div class="flex items-center float-right justify-around mx-auto p-1 bg-gray-500 w-1/6  rounded-xl space-x-2 mt-1 shadow-lg">
        <div>
          
          <h1 class="text-2xl font-bold text-teal-400">Recived Items</h1>
        </div>
        
      </div>

      <div class="bg-gray-100 p-2 rounded-md border">
      
        <table id="spareinv_tbls_dash" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  
                  
                 
                  <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                      No.
                  </th>
                  <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                      Ref_No
                  </th>
                  <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                      Date
                  </th>
                  <th scope="col" class="py-2 px-2 border border-r-gray-300">
                      Item Name
                      
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
                  <td class="py-1 px-2 border-r">
                      <b> {{ $spare->date_in }}</b> 
                  </td>
                  
                  <td class="py-1 px-2 h-5 border-r">                               
                      <b> {{ $spare->spareInItem->name }}</b> 
                  </td>
                  <td class="py-1 px-2 border-r">
                      <b> {{ $spare->model }}</b> 
                  </td>
                  <td class="py-1 px-2 border-r">
                      <b> {{ $spare->qty_in }}</b> <small class="text-yellow-700">{{ $spare->unit }}</small>
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




      <div class="flex items-center float-right justify-around mx-auto p-1 bg-gray-500 w-1/6  rounded-xl space-x-2 mt-1 shadow-lg">
        <div>
          
          <h1 class="text-2xl font-bold text-teal-400">Fuel Chart</h1>
        </div>
        
      </div>

      <div class="bg-gray-100 p-2 rounded-md border">
      
        <table id="dash_fuel" class="display table table-sm hover cell-border compact stripe" >
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
                        <b> {{$diff / $fuel->litre }}</b> <small class="text-red-800">KM / LITER</small> 
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
</x-admin-layout>

<script>
  $(document).ready(function() {
  $('#dash_fuel').DataTable({
      dom: 'B<"clear">lfrtip',
 buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
 pageLength: 5,
  lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
  });
});


</script>
<script>
  $(document).ready(function() {
  $('#report_stock_dash').DataTable({
      dom: 'B<"clear">lfrtip',
 buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
 pageLength: 5,
  lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
  });
});


</script>
<script>
  $(document).ready(function() {
  $('#spareinv_tbls_dash').DataTable({
      dom: 'B<"clear">lfrtip',
 buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
 pageLength: 5,
  lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
  });
});


</script>