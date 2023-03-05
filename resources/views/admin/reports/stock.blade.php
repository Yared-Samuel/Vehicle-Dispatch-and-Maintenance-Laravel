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
                    SparePart Stock Balance
            </div>  
            <div>     
                {{-- <a href="{{ route('admin.spareinv.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Inventory</a>
                <a href="{{ route('admin.spareinv.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center mr-4 ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Recieve Items</a>
                <a href="{{ route('admin.spareuse.index') }}" class="text-yellow-900 font-bold hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Issued List</a>
                <a href="{{ route('admin.spareuse.create') }}" class="text-yellow-900 font-bold hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Issue Item</a> --}}
            </div>
        </div>
        <div class="input-group relative flex flex-wrap items-stretch w-1/4 mb-0 rounded">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
            </span>
          </div>
        

            
          <div>
             <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            No
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Spare Name
                        </th>
                        
                        <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                            Spare Model
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Balance
                            
                        </th>
                        {{-- <th scope="col" class="py-2 px-1 border border-r-gray-300">
                            Detail
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                @if ($stock)                       
                
                    @foreach ($stock as $key=>$stock_rep)
                    @if ($stock_rep->qty_in - $stock_rep->inv_hasmny_uses->sum('use_qty') > 0)
                        
                    
                    
                    <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-1 px-2 border-r">
                            {{ $key +1 }}
                        </th>
                        <td class="py-1 px-2 border-r">
                           <a href=""> <b> {{ $stock_rep->spare_name }}</b> </a>
                        </td>
                        
                        
                        <td class="py-1 px-2 h-5 border-r">                               
                            <b> {{ $stock_rep->spare_model }}</b> 
                        </td>
                        <td class="py-1 px-2 border-r">
                            <b> {{$stock_rep->qty_in - $stock_rep->inv_hasmny_uses->sum('use_qty')}}</b> 
                        </td>
                        
                       
                        
                        {{-- <td class="flex py-1 px-1">
                            <a href="
                            " class="text-teal-600"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                      </svg>
                                      
                                </a>
                        </td> --}}
                    </tr>
                    @endif
                    @endforeach
                    @else
        
                        
                   <tr>0 Data Found</tr>
                        
                    @endif
                    
                </tbody>
            </table> 

            
        </div>
                
                
    </div> 



    
</div>



      

</x-admin-layout>