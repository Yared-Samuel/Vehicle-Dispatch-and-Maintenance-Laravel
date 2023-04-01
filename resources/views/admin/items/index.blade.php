<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="relative overflow-x-auto max-h-full h-96 bg-slate-100 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
              Items and Categories
            </div>
            <a href="{{ route('admin.items.index') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Items</a>
          </div>
        
        
            <div class="flex justify-between">

                <div class="w-2/5">
            
                    <form method="POST" action="{{ route('admin.items.index') }}">
                        @csrf
                        <div class="relative z-0 mb-6 group">
                            <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Item Name</label>
                        </div>
                        <div class="relative z-0 mb-6 group">
                            <input type="text" name="category" id="category" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="category" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Category</label>
                        </div>
                        
                
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                            >Save</button>
                    </form>
                </div>
                <div class="m-6">
                <table  class="p-5 text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2">
                                No
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Items
                            </th>
                            <th scope="col" class="py-2 px-2">
                                Categories
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key=>$item)
                                        
                       
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key+1 }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $item->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $item->category }}
                            </td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </div>
            </div>
        
    </div>


    
</x-admin-layout>