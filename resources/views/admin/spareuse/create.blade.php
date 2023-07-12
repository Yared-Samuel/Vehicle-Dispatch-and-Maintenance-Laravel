<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="py-2">
        <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md rounded-lg" >  
    
       
            <x-inventory-nav-links>
            {{ __('Issue Spareparts') }}
            </x-inventory-nav-links>
        </div>
            
        



        {{-- <div class="max-w-7xl mt-3 md:mx-auto bg-gray-50 shadow-lg py-4 mx-4 sm:px-6 lg:px-8"> --}}


            {{-- new --}}

            <div class="max-w-full mb-4 mt-2 mx-2 overflow-hidden rounded-lg shadow-lg">
                <div class="px-6  bg-slate-200">
                  <h4 class="mb-1 font-bold text-lg tracking-tight text-gray-800">Issue Form</h4>
                </div>
                <form method="POST" action="{{ route('admin.spareuse.store') }}">
                    @csrf
                    <div id="show_spare_use" class="flex-col bg-slate-100 w-full">
                        {{-- form list div here --}}
                        <div  class="row flex justify-around w-full  role="group" ">
                           
                            
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Item</label>
                                <select name="item_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option disabled selected></option>
                                    @foreach ($items as $item)
                                    <option class="text-white bg-slate-600" value="{{ $item->id }}">{{ $item->name }} - {{$item->category}}</option>
                                    @endforeach
                                </select>         
                            </div>

                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                <input type="number" name="use_qty[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Vehicle</label>
                                <select name="vcl_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option disabled selected></option>
                                    @foreach ($vcls as $vcl)
                                    <option class="text-white bg-slate-600" value="{{ $vcl->id }}">{{ $vcl->plate_city }}  0{{$vcl->plate_code}} - {{ $vcl->plate_id   }}</option>
                                    @endforeach
                                </select>         
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Driver</label>
                                <select name="driver_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option disabled selected></option>
                                    @foreach ($drivers as $drvr)
                                    <option class="text-white bg-slate-600" value="{{ $drvr->id }}">{{ $drvr->driver_name }} </option>
                                    @endforeach
                                </select>         
                            </div>                  
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mileage</label>
                                <input type="number" name="mileage[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-red-600 dark:text-white">Serial Number <small>Optional</small> </label>
                                <input type="text" name="issue_serial[]" id="small-input" class="block w-full p-2 text-gray-900 border border-black rounded-lg bg-red-200 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            
                            <div class="add_spare_use pl-6 pt-2 rounded-full">
                                <button class="h-10 px-10 flex-wrap text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                      </svg>
                                      </button>
                        
                                </div>

                              {{-- <<--end-->   --}}
                          
                        </div>
                        
                    </div>
                    <a href="{{ route('admin.spareuse.store') }}"></a>
                    <button type="submit" id="add_btn" class="h-10 px-10 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-full focus:shadow-outline hover:bg-green-800"
                            >Save</button>
                
                </form>
              </div>

        
        

    </div>
</x-admin-layout>


<script>
    $(document).ready(function(){
      $(".add_spare_use").click(function(e){
        e.preventDefault();
        $("#show_spare_use").prepend(`
        <div id="show_spare_use" class="flex-col bg-slate-100 w-full">
                        {{-- form list div here --}}
                        <div  class="row flex justify-around w-full  role="group" ">
                           
                            
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Item</label>
                                <select name="item_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option disabled selected></option>
                                    @foreach ($items as $item)
                                    <option class="text-white bg-slate-600" value="{{ $item->id }}">{{ $item->name }} - {{$item->category}}</option>
                                    @endforeach
                                </select>         
                            </div>

                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                <input type="number" name="use_qty[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Vehicle</label>
                                <select name="vcl_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option disabled selected></option>
                                    @foreach ($vcls as $vcl)
                                    <option class="text-white bg-slate-600" value="{{ $vcl->id }}">{{ $vcl->plate_city }}  0{{$vcl->plate_code}} - {{ $vcl->plate_id   }}</option>
                                    @endforeach
                                </select>         
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Driver</label>
                                <select name="driver_id[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option disabled selected></option>
                                    @foreach ($drivers as $drvr)
                                    <option class="text-white bg-slate-600" value="{{ $drvr->id }}">{{ $drvr->driver_name }} </option>
                                    @endforeach
                                </select>         
                            </div>                  
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mileage</label>
                                <input type="number" name="mileage[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mx-1 w-25">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-red-600 dark:text-white">Serial Number <small>Optional</small> </label>
                                <input type="text" name="issue_serial[]" id="small-input" class="block w-full p-2 text-gray-900 border border-black rounded-lg bg-red-200 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                          
              <div class="remove_spareuse_btn pl-6 pt-2 rounded-full">
                  <button class="h-10 px-10 flex-wrap text-indigo-100 transition-colors duration-150 bg-red-500 rounded-full focus:shadow-outline hover:bg-red-800">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                    </svg>

                        </button>
          
                  </div>
            
          
        `);
      });
      $(document).on('click', '.remove_spareuse_btn', function(e) {
        e.preventDefault();
        let rows_item = $(this).parent();
        $(rows_item).remove();
      });
    });
</script>