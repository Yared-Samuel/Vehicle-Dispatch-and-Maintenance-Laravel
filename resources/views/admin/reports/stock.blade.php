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
             <table class="w-5/6 table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                            Items
                        </th>
                        <th scope="col" class="py-2 px-2 border border-r-gray-300">
                           Stock
                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                                  
                  
                   
                    @foreach ($rems as $key=>$rem)
                    <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">

                    
                    <td class="py-1 px-2 border-r">
                        <a href="">  -  <b> {{ $rem->name }}</b> </a>
                     </td>
                    <td class="py-1 px-2 border-r">
                        <a href=""> <b> {{ $rem->vcl_hasmny_INV->sum('quantity_inv') }}</b> </a>
                     </td>
                    
                </tr>
                    @endforeach
                   
                   
        
                        
                   
                   
                    
                </tbody>
            </table> 

            
        </div>
                
                
    </div> 



    
</div>



      

</x-admin-layout>