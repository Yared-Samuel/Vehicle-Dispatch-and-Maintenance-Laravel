<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
   
    <div class="relative overflow-x-auto max-h-full bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
    <div class="flex justify-between w-full px-4 py-2 items-center">
        <div class="text-xl font-bold">
         Spare Part Categories
        </div>
        <a href="{{ route('admin.sparelists.create') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
            >Crete Category</a>
      </div>
        
        
            
      
                <table id="table_one" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2">
                                No
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Spare Name
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Measured By
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Category
                            </th>
                            {{-- <th scope="col" class="py-2 px-2">
                                Action
                            </th> --}}
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sparelists as $sparelist)
                                        
                       
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $sparelist->id }}
                            </th>
                            <td class="py-1 px-2">
                                {{ $sparelist->part_name }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $sparelist->spare_measure }}
                            </td>
                            <td class="py-1 px-2">
                                {{ $sparelist->spare_state }}
                            </td>
                            {{-- <td class="flex py-1 px-2">
                                <a href="{{ route('admin.sparelists.edit', $sparelist->part_name) }}" class="text-green-500 hover:text-white border border-green-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Vehicle Change</a>

                            <form method="POST"
                                   action="{{ route('admin.sparelists.destroy', $sparelist->id) }}"
                                   onsubmit="return confirm('Are you sure?');" >
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="text-green-500 hover:text-white border border-green-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-1 py-0 text-center mr-0 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        >Remove Driver</button>

                            </form>
                                
                                
                            </td> --}}
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            
      </div>
    
    
</x-admin-layout>