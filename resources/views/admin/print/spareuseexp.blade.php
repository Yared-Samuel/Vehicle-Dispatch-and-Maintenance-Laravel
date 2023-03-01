<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
    <!-- component -->
    @foreach ($inv_use_grns as $spareuse_grn)
        
    
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
            <p>Date: {{ $spareuse_grn->use_date }}</p>
            <p>GRN No: {{ $spareuse_grn->id }}</p>
         </div>
         

        </div>
        <hr class="font-bold">
        </div>
       </div>
       <div class="p-9">
        <div class="flex w-full">
         <div class="grid grid-cols-4 gap-12">
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">
            Item Serial No:
           </p>
           <p>{{ $spareuse_grn->uses_blgto_invs->serial }}</p>
           
          </div>
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
       </div>
   
       <div class="p-9">
        <div class="flex flex-col mx-0 mt-8">
            <table class="table-fixed">
                <thead>
                  <tr>
                    
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Description</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Plate</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Category</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Milage</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Quantity</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->uses_blgto_invs->spare_name }}</td>
                    @foreach ($spareuse_grn->use_blgtomny_vcls as $vcl)
                    <td class="py-1 px-2  border-r border-b-4">{{ $vcl->plate_id }}</td>
                    @endforeach
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->uses_blgto_invs->spare_type }}</td>
                    
                   
                   
                      
                    
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->mileage }}</td>
                    <td class="py-1 px-2  border-r border-b-4">{{ $spareuse_grn->use_qty }} <small>{{ $spareuse_grn->uses_blgto_invs->unit }}</small> </td>
                    
                    
                  </tr>
                  
                </tbody>
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
          <p>
           This Document originaly created at {{ $spareuse_grn->created_at }}. 1st Copy - For file. 2nd Copy - For store keeper.
           
          </p>
         </div>
        </div>
       </div>
      </div>
     </article>
    </div>
    @endforeach
    
</x-admin-layout>