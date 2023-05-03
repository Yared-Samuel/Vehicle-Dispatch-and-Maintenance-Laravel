<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-2"> 
    <div class="flex-col justify-between mx-0 rounded-md shadow-sm" role="group">
        <div class="inline-flex rounded-md  shadow-sm" role="group">
          
            <a href="{{ route('admin.cost.create') }}">
                <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
                  >Cost Form</button>
            </a>
            <a href="{{ route('admin.cost.index') }}">
                <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
                  >Cost List</button>
            </a>
            {{-- <a href="{{ route('admin.cost.index') }}">
                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                  >Replenish
                  <span class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-white bg-red-400 rounded-full">
                    2
                  </span>
                </button>
            </a>
            
      
        <div class="text-right font-bold mr-4">Cost Form</div>
      </div>  --}}
    </div>
      <div class="max-w-full mt-5  overflow-hidden rounded-lg shadow-lg">
        <div class="px-6  bg-slate-100">
          <h4 class="mb-3 font-bold text-lg tracking-tight bg-slate-200 text-gray-800">Cost Form   </h4>
        </div>
        <form method="POST" action="{{ route('admin.cost.update', $id) }}">
            @csrf
            @method('PUT')
            <div id="show_item" class="flex-col bg-slate-50">
                {{-- form list div here --}}
                <div  class="row flex  w-full px-4 py-2 role="group" ">
                    <div class="w-25">
                        <label for="small-input" class="block  text-sm border-zinc-600 font-medium text-gray-900 dark:text-white">Cost Date</label>
                        <input type="date" name="cost_date[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="w-25">
                        <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="text" name="cost_desc[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="w-25">
                        <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="cost_cash[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="w-25">
                        <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" name="qty[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="w-25">
                        <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Reference</label>
                        <input type="number" name="ref_no[]" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="add_item_btn px-2 pt-6 w-1/12">
                        <button class="h-10 px-10 flex-wrap text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                              </svg>
                              </button>
                
                        </div>
                  
                </div>
                
            </div>
            <a href="{{ route('admin.cost.update', $id) }}"></a>
            <button type="submit" id="add_btn" class="h-10 px-10 m-8 text-green-100 transition-colors duration-150 bg-green-700 rounded-full focus:shadow-outline hover:bg-green-800"
                    >Save</button>
        
        </form>
      </div>
    </div>

            
            
            

        
        
           
              
</x-admin-layout>


