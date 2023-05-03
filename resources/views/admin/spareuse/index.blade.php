<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 mb-5">  
    <div class="overflow-hidden bg-slate-200 pb-4 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
                    Spare Issued
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



        <div class="flex justify-end">
        <form action="{{ route('admin.spareuse.index') }}" method="GET" role="search"  class="flex justify-end pt-2 bg-gray-200">
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
      
              <a href="{{ route('admin.spareuse.index') }}">
                  <button type="submit" class="text-white mr-3 font-bold  border-4 border-teal-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1 py-0 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                  ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="green" class="w-12 h-6">
                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                  </svg>
                                  </button>
              </a>
              
      </form>
      <a href="{{ route('admin.spareuse.index') }}" class="pt-2">
        <button type="submit" class="text-white font-bold  border-4 border-red-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1  text-center ml-2  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                        ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="red" class="w-12 h-6">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                        
                        </button>
    </a>

</div>
<div class="bg-gray-100 p-2 rounded-md border-2 border-slate-400">
                <table id="spareuse_tbl" class="display table table-sm hover cell-border compact stripe">
                    <thead style="background-color: gray; font-size: 100%; color: white;">
                        <tr>
                            <th >
                                No
                            </th>
                            <th >
                                Item Code
                            </th>
                            <th >
                                Spare Name
                            </th>
                            <th >
                               Serial
                            </th>
                            <th >
                                Plate
                            </th>
                            <th >
                                Date
                            </th>
                            
                            <th >
                                Mileage
                            </th>
                            
                            <th>
                                Spare Type
                                
                            </th>
                            <th>
                                Issued Qty
                               
                            </th>
                            
                            <th >
                                Detail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($spare_use as $key=>$spare)
                        
                        <tr >
                            <th >
                                {{ $key +1 }}
                            </th>
                            <td >
                                <b> {{ $spare->spareUseItem->item_code }}</b> 
                            </td>
                            <td >
                                <b> {{ $spare->spareUseItem->name }}</b> 
                            </td>
                            <td >
                                <b> {{ $spare->serial }}</b> 
                            </td>
                            <td >
                                <b> {{ $spare->use_blgtomny_vcls->plate_id }}</b>
                            </td>  
                            <td >
                                <b> {{ $spare->use_date }}</b>
                            </td>
                           
                            <td >                               
                                <b>{{ $spare->mileage }}</b>
                            </td>
                            
                            <td>
                                <b> {{ $spare->spareUseItem->category }}</b> 
                            </td>
                            <td>
                                <b> {{ $spare->use_qty }} </b> <small class="text-yellow-700">{{ $spare->spareUseItem->unit }}</small>
                            </td>
                                            
                            <td class="flex py-1 px-1">
                                <a href="{{ route('admin.printspareuse.export', $spare->GIV_ref) }}" class="text-teal-600">
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






<div class="flex justify-end ">
<form action="{{ route('admin.spareuse.index') }}" method="GET" role="search"  class="flex justify-end pt-2 bg-gray-200">
    @csrf            

<div class="relative mr-2">
  
    <label for="item" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-115 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Select Parts</label>                                
                            <select name="item" id="item" class="bg-white border border-gray-400 mr-3 text-black text-sm font-semibold rounded-lg focus:ring-teal-700 focus:border-blue-500 block w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                <option disabled selected> Select Parts </option>
                                @foreach ($items as $item)
                                <option class="text-white bg-slate-600" value="{{ $item->id }}">{{ $item->item_code }} - {{$item->name }} </option>
                                @endforeach
                            </select>

</div>

      <a href="{{ route('admin.spareuse.index') }}">
          <button type="submit" class="text-white mr-3 font-bold  border-4 border-teal-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1 py-0 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                          ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="green" class="w-12 h-6">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                          </svg>
                          </button>
      </a>
      
</form>
<a href="{{ route('admin.spareuse.index') }}" class="pt-2">
<button type="submit" class="text-white font-bold  border-4 border-red-600 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  px-1  text-center ml-2  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="red" class="w-12 h-6">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg>
                
                </button>
</a>

</div>
<div class="bg-gray-100 border-2 border-slate-400 p-2 rounded-md">
        <table id="spareuse_tbl_serial" class="display table table-sm hover cell-border compact stripe">
            <thead style="background-color: gray; font-size: 100%; color: white;">
                <tr>
                    <th >
                        Date
                    </th>
                    <th >
                        Item Code
                    </th>
                    <th >
                        Spare Name
                    </th>
                    <th >
                        Vehicle Plate
                    </th>
                    <th >
                        Quantity Used
                    </th>
                    <th >
                        Part / serial
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach ($items_used as $key=>$items_use)
                
                <tr >
                    <th >
                        {{ $items_use->use_date }}
                    </th>
                    <td >
                        <b> {{ $items_use->spareUseItem->item_code }}</b> 
                    </td>
                    <td >
                        <b> {{ $items_use->spareUseItem->name }}</b> 
                    </td>                    
                    <td >
                        <b> {{ $items_use->use_blgtomny_vcls->plate_id }}</b>
                    </td>  
                    <td >
                        <b> {{ $items_use->use_qty }}</b>
                    </td>
                    <td >
                        <b> {{ $items_use->serial }}</b>
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
    $('#spareuse_tbl').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 10,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>
<script>
    $(document).ready(function() {
    $('#spareuse_tbl_serial').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 10,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>