<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    <!-- component -->
    
        
    
    <div class="max-w-5xl mx-auto py-6 bg-white">
     <article class="overflow-hidden">
      <div class="bg-[white] rounded-b-md">
        
       <div class="px-20">
        <div class="text-slate-700">
          <div class="m-0 w-40 h-40">
            <x-print-logo></x-print-logo>  
          </div> 
            <div class="flex justify-between">
         <p class="text-xl font-extrabold tracking-tight uppercase font-body">
            Goods ISSUE note 
         </p>
         <div>
            <p>Date: {{ $dates }}</p>
            <p>ISSUE No: {{ $doc_no }}</p>
         </div>
         

        </div>
        <hr class="font-bold">
        </div>
       </div>
       
   
       <div class="px-9">
        <div class="flex flex-col mx-0 mt-8">
            <table class="table-fixed">
                <thead>
                  <tr>
                    
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Item Code</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Description</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Plate</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Mileage (KM)</th>
                    
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Quantity</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inv_use as $spareuse_grn)
                  <tr>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->spareUseItem->item_code }}</td>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->spareUseItem->name }}</td>
                   
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_blgtomny_vcls->plate_id }}</td>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->mileage }}</td>
                   
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_qty }} <small>{{ $spareuse_grn->spareUseItem->unit }}</small> </td>     
                    
                    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
       </div>
       <div class="px-9">
        <div class="flex w-full pb-2">
         <div class="grid grid-cols-4 gap-12 border-solid border-black">
          <div class="text-lg font-light text-slate-500 mt-5 ">
           <p class="text-lg  font-normal text-slate-700">
            Store (ሰጪ):
           </p>
           <p class="pt-2">Name_________________________________________</p>           
           <p class="pt-4">Signature______________________________________</p>           
          </div>
         </div>
        </div>
       </div>
       <div class="px-9">
        <div class="flex w-full">
         <div class="grid grid-cols-4 gap-12">
          <div class="text-lg font-light text-slate-500">
           <p class="text-lg  font-normal text-slate-700">
            Delevered To (ተቀባይ):
           </p>
           <p class="pt-2">Name_________________________________________</p>           
           <p class="pt-4">Signature______________________________________</p>           
          </div>
         </div>
        </div>
       </div>
       <div class="mt-10 p-9">
        <div class="border-t pt-9 border-slate-200">
         <div class="text-sm font-semibold text-slate-700">
          <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
  
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->format('Y') }} <a class="hover:underline">Girma Gifawossen Trading</a>. All Rights Reserved.</span>
        </div>
      </footer>
         </div>
        </div>
       </div>
      </div>
     </article>
    </div>


    
    
    
</x-admin-layout>