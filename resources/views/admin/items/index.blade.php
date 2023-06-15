<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="max-h-full  bg-slate-50 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-200 w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
              Items and Categories
            </div>
            <a href="{{ route('admin.items.index') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Items</a>
          </div>
        
        
            <div class="">

                <div class="">
            
                    <form method="POST" action="{{ route('admin.items.index') }}">
                        @csrf
                        <div class="form-group d-flex justify-around">
                        <div class="relative z-0 mb-6 mt-3 border-2 group">
                            <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Item Name</label>
                        </div>
                        <div class="relative z-0 mb-6 mt-3 border-2 group">
                            <label for="id" class="sr-only">For</label>
                                <select name="category" id="category" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Select Category </option>
                                    @foreach (App\Enums\Item::cases() as $item)
                                    <option value="{{ $item->value }}">{{ $item->name  }} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="relative z-0 mb-6 mt-3 border-2 group">
                            <label for="id" class="sr-only">For</label>
                                <select name="unit" id="unit" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Measurment Unit </option>
                                    @foreach (App\Enums\Unit::cases() as $item)
                                    <option value="{{ $item->value }}">{{ $item->name  }} </option>
                                    @endforeach
                                </select>
                        </div>
                        
                
                       
                        </div>

                        <button type="submit" class="btn btn-primary">Create Item</button>
                    </form>
                </div>
               
            </div>


            <div class="m-6">
                <table id="item_list"  class="display table table-sm hover cell-border compact stripe" >
                    <thead style="background-color: gray; font-size: 100%; color: white;">
                    <tr>
                        <th scope="col" class="">
                            No
                        </th>
                        <th scope="col" class="">
                            Item code
                        </th>
                        <th scope="col" class="">
                            Items
                        </th>
                        <th scope="col" class="">
                            Categories
                        </th>
                        <th scope="col" class="">
                            Unit Of Measurment
                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key=>$item)
                                    
                   
    <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">

                        <th scope="row" class="">
                            {{ $key+1 }}
                        </th>
                        <td class="">
                            {{ $item->item_code }}
                        </td>
                        <td class="">
                            {{ $item->name }}
                        </td>
                        <td class="">
                            {{ $item->category }}
                        </td>
                        <td class="">
                            {{ $item->unit }}
                        </td>
                        
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            </div>
        
    


    
</x-admin-layout>

<script>
    $(document).ready(function() {
    $('#item_list').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 5,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>