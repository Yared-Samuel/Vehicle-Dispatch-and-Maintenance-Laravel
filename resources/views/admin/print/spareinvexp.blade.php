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
            Goods received note (GRN)
         </p>
         <div>
            <p>Date: {{ $Date }}</p>
            
         </div>
         

        </div>
        <hr class="font-bold">
        </div>
       </div>
       
   
       <div class="p-9">
        <div class="flex flex-col mx-0 mt-8">
            <table class="">
                <thead>
                  <tr>                    
                    {{-- <th scope="col" class="py-2 px-2 border border-r-gray-300">No.</th> --}}
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Description</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Category</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Quantity</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Unite price</th>
                    <th scope="col" class="py-2 px-2 border border-r-gray-300">Total price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-2">
                  <td>{{ $GRN }}</td>

                  </tr>
                  @foreach ($inv_grns as $key=>$inv_grn)
                  <tr>
                    {{-- <td class="py-1 px-2  border-r border-b-2">{{ $key+1 }}</td> --}}
                    <td class="py-1 px-2  border-l border-r border-b-2 border-t-2"> - {{ $inv_grn->spareInItem->name }}</td>
                    <td class="py-1 px-2  border-r border-b-2 border-t-2">{{ $inv_grn->spareInItem->category }}</td>
                    <td class="py-1 px-2  border-r border-b-2 border-t-2">{{ $inv_grn->qty_in }} <small>{{ $inv_grn->unit }}</small> </td>
                    <td class="py-1 px-2  border-r border-b-2 border-t-2">{{ $inv_grn->price_in }}</td>
                    <td class="py-1 px-2  border-r border-b-2 border-t-2">{{ $inv_grn->total_price }}</td>
                    
                  </tr>
                  @endforeach
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
       
           
           
         
      </div>
     </article>

     
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
  
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->format('Y') }} <a class="hover:underline">Girma Gifawossen Trading</a>. All Rights Reserved.</span>
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">This Document originaly created at {{ $inv_grn->created_at }}. Document Distribution 1st Copy - For file. 2nd Copy - For store keeper.</span>
  </div>
</footer>



    </div>
    
    
</x-admin-layout>