<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
        
        <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="text-xl mb-4 font-bold">
                    Spare Parts category
                  </div>
        <div>
            <form method="POST" action="{{ route('admin.spareparts.index') }}">
                    @csrf
                    <div class="relative z-0 mb-6 w-1/2 group">
                        <input type="text" name="part_name" id="part_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="part_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Spare Part Name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-1/2 group">
                        <input type="number" name="part_number" id="part_number" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="part_number" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Spare Part Number</label>
                    </div>
                    <div class="relative z-0 mb-6 w-1/2 group">
                        <input type="number" name="spare_price" id="spare_price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="spare_price" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Price</label>
                    </div>
                    <div class="relative z-0 mb-6 w-1/2 group">
                        <input type="number" name="spare_qty" id="spare_qty" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="spare_qty" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Quantity</label>
                    </div>
                    <div class="relative z-0 mb-10 w-1/2 group">
                        <label for="spare_state" class="sr-only">Category</label>
                        <select name="spare_state" id="spare_state" class="dynamic block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-4 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                            <option value="false" disabled selected>Spare Part Category</option>
                            @foreach (App\Enums\SpareType::cases() as $status)
                            <option class="text-white bg-slate-600" value="{{ $status->value }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="relative z-0 mb-6 w-1/2 group">
                        <label for="category_id" class="sr-only">Vehicle Category</label>
                        <select name="category_id" id="category_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                            <option disabled selected>Vehicle Category</option>
                            @foreach ($spr_blgto_cats as $spr_blgto_cat)
                            <option value="{{ $spr_blgto_cat->id }}">{{ $spr_blgto_cat->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="flex justify-end m-2 p-2">
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                        >Save</button>
                        <a href="{{ route('admin.spareparts.index') }}" class="text-white bg-gradient-to-br from-red-600 to-red-900 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            >Cancel</a>
                    </div>
                    
        </form>
    </div>
  
    
            

        </div>
    {{-- </div> --}}
</x-admin-layout>