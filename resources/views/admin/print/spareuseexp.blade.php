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
        <div class="space-y-2 text-slate-700">
            <x-application-logo></x-application-logo>   
            <div class="flex justify-between">
         <p class="text-xl font-extrabold tracking-tight uppercase font-body">
            Goods ISSUE note 
         </p>
         <div>
            <p>Date: {{ $dates }}</p>
            <p>GRN No: {{ $doc_no }}</p>
         </div>
         

        </div>
        <hr class="font-bold">
        </div>
       </div>
       {{-- <div class="p-9">
        <div class="flex w-full">
         <div class="grid grid-cols-4 gap-12">
          
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Invoice Created at</p>
           <p>{{ $spareuse_grn->created_at }}</p>
           
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">GRN Number</p>
           <p>0000{{ $spareuse_grn->id }}</p>         
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Item Ccategory</p>
           <p>{{ $spareuse_grn->uses_blgto_invs->spare_type }}</p>         
          </div>
          
         </div>
        </div>
       </div> --}}
   
       <div class="p-9">
        <div class="flex flex-col mx-0 mt-8">
            <table class="table-fixed">
                <thead>
                  <tr>
                    
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Description</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Plate</th>
                    {{-- <th scope="col" class="py-2 px-2 border border-r-gray-300">Category</th> --}}
                    {{-- <th scope="col" class="py-2 px-2 border border-r-gray-300">Milage</th> --}}
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Quantity</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inv_use as $spareuse_grn)
                  <tr>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->spareUseItem->name }}</td>
                   
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_blgtomny_vcls->plate_id }}</td>
                   
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_qty }}</td>     
                    {{-- <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_qty }} <small>{{ $spareuse_grn->uses_blgto_invs->unit }}</small> </td> --}}
                    
                    
                  </tr>
                  @endforeach
                  
                </tbody>
                {{-- <td>{{ $total_use }}</td> --}}
              </table>
        </div>
       </div>
       <div class="px-9">
        <div class="flex w-full pb-2">
         <div class="grid grid-cols-4 gap-12">
          <div class="text-lg font-light text-slate-500">
           <p class="text-lg  font-normal text-slate-700">
            Received by:
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
            Delevered by:
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
            {{-- <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">This Document originaly created at {{ $created->created_at }}. Document Distribution 1st Copy - For file. 2nd Copy - For store keeper.</span> --}}
        </div>
      </footer>
         </div>
        </div>
       </div>
      </div>
     </article>
    </div>
    
    
</x-admin-layout>