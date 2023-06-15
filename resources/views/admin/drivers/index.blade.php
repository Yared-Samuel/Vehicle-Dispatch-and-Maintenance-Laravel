<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="relative mb-10 overflow-x-auto max-h-full h-fit bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
              Drivers
            </div>
            <a href="{{ route('admin.drivers.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Drivers</a>
          </div>
        
        
            
            
                <table id="driver"  class="w-1/2" >
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col">
                                No
                            </th>
                            <th scope="col">
                                driver Name
                            </th>
                            
                            <th scope="col">
                                Action
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($drivers as $key=>$driver)
                                        
                       
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key +1 }}
                            </th>
                            <td class="">
                                {{ $driver->driver_name }}
                            </td>
                            
                            <td >
                            <form method="POST"
                                   action="{{ route('admin.drivers.destroy', $driver->id) }}"
                                   onsubmit="return confirm('Are you sure?');" >
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="text-red-500 hover:text-white border border-red-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Remove Driver</button>

                            </form>
                                
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            

        
    </div>


    
</x-admin-layout>

<script>
    $(document).ready(function() {
    $('#driver').DataTable({
        dom: 'B<"toolbar">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],   
   pageLength: 20,
    lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
    });
    
});
  
 
</script>