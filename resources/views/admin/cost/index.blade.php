<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="flex">
    <div class="flex flex-col space-y-6 justify-start items-start mt-20">
<a href="{{ route('admin.cost.create') }}">  
<button class='relative inline-flex items-center bg-gray-100 rounded-full hover:bg-[#ffc93c] group hover:text-gray-100 text-gray-500 py-3 px-6 text-xl font-bold overflow-visible shadow-2xl'>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
        clip-rule="evenodd" />
    </svg>
    PAY
    
    <div
      class="absolute top-0 right-0 -mt-4 -mr-4 px-2 py-0 text-gray-100 bg-[#ffc93c] group-hover:bg-[#ff6f3c] rounded-full">
      3</div>
  </button>
</a>
  
  
</div>
            
   
    <div class="flex w-full justify-around mr-5">
        @foreach ($cost_vcls as $vcls)         
          <div class="w-1/2 mr-3 max-w-lg mx-auto">      
            <div class="rounded-lg shadow-lg p-6 text-xs  mx-4 sm:mx-0 bg-white">
              <div>
                <h2 class="text-teal-800 text-xl  mb-2 font-bold">{{ $vcls->plate_id }}</h2>
                @foreach ($vcls->vcl_cost as $costs)     
                <div class="flex flex-col">
                   
                  <p class="text-gray-600 text-xs">Ref. - {{ $costs->ref_no }}</p>
                  <p class="text-gray-600 text-xs">Date: 22-Sep-2023</p>
                </div>
                <hr class="my-4 border-teal-800">
                <div>
                  <div class="flex justify-between items-center">
                    <span class="font-medium text-base truncate">{{ $costs->spare_cost_desc }}</span><span class="text-base pl-8 font-medium">{{ $costs->spare_cost }} <small>birr</small></span>
                  </div>
                  <div class="mb-4 flex justify-between items-center">
                    <span>*Quantity:</span><span class="">{{ $costs->spare_qty }}</span>
                  </div>
                  <hr class="my-4 border-teal-800">
                  <div class="flex justify-between items-center">
                    <span class="font-medium text-base">{{ $costs->mech_cost_desc }}</span><span class="text-base font-medium">{{ $costs->mech_cost }} <small>birr</small></span>
                  </div>
                  
                  <div class="flex justify-between items-center">
                    <span class="font-medium text-base">{{ $costs->other_cost_desc }}</span><span class="text-base pl-8 font-medium">{{ $costs->other_cost }} <small>birr</small></span>
                  </div>                  
                  <hr class="my-4 border-4 border-teal-800">
                 
                  <div class="flex justify-between items-center">
                    <span class="text-lg font-medium">Total</span><span class="text-lg font-medium">{{ ($costs->spare_qty * $costs->spare_cost) + $costs->mech_cost + $costs->other_cost}} <small>birr</small></span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach    
    </div> 
  </div>
      
    
    </div> 

        
    </div>
</x-admin-layout>