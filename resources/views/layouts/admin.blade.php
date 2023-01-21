<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
       

        

        

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased  overflow-clip md:min-h-screen">
        

        <div class="bg-sky-900 border-gray-200 px-2 md:px-4 border-b-amber-300 border-b-4 dark:bg-gray-900 shadow-md">
            <div class="flex flex-wrap justify-between items-center ">
                
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="{{ asset('images/LOGO.png') }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="text-teal-300 font-bold self-center text-xl whitespace-nowrap dark:text-white">GrmaGifawossen Trading</span>
                </a>
                <div class="flex items-center  md:order-2">
                    <div id="mega-menu" class="justify-between  items-start w-full text-sm md:flex md:w-auto md:order-1 ">
                        <ul class="flex flex-col font-medium md:flex-row md:space-x-8 md:mt-0 mr-3">
                            <li>
                                <a href="#" class="block py-2 pr-4 pl-3 font-bold text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-teal-400 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page"
                                    >Home</a>
                            </li>
                            
                            <li>
                                <a href="#" class="block py-2 pr-4 pl-3 font-bold text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-teal-400 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                                    >Team</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pr-4 pl-3 font-bold text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-teal-400 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                                    >Contact</a>
                            </li>
                        </ul>


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-teal-200 hover:text-white border border-spacing-5 border-teal-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-small rounded-lg text-sm px-3 py-0.5 text-center mr-2  dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    
                    
                    
                    {{-- <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button> --}}
                </div>
                </div>
                
            </div>
        </div>
        
  
        <div class="flex-col md:flex md:flex-row overflow-clip md:min-h-screen">
            <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-teal-800 md:w-56 dark:text-gray-200 dark:bg-gray-800" x-data="{ open: false }">
                
                    <nav :class="{'block': open, 'hidden': !open}" 
                        class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center text-white  underline w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Meitenance Progress</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                                    
                                    
                                    <x-admin-nav-link :href="route('admin.request.index')" :active="request()->routeIs('admin.vcls.index')">
                                        {{ __('Maintenance Request') }}
                                    </x-admin-nav-link>
                                    <x-admin-nav-link :href="route('admin.maintenance.index')" :active="request()->routeIs('admin.categories.index')">
                                        {{ __('Maintenance') }}
                                    </x-admin-nav-link>                             
                                    </div>
                            </div>
                        
                        </div>


                        <button  @click="open = !open" id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white  underline font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" type="button"
                                >Resource Managment 
                            </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                                {{-- <li>
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between underline w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Spare Parts<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                       </button>
                                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                        <li>
                                            <a href="{{ route('admin.spareparts.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >Expences</a>
                                        </li>
                                        <li>
                                            <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >Tire Trucking</a>
                                        </li>
                                        
                                        </ul>
                                    </div>
                                </li> --}}
                                
                            <li>
                                <a href="{{ route('admin.fuel.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Fuel Record</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.cost.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Expences</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.tires.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Tire Control</a>
                            </li>
                            
                            </ul>
                        </div>
                        <button  @click="open = !open" id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white  underline font-medium rounded-lg text-sm  px-4 py-2.5 text-center inline-flex items-center dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" type="button"
                                >Reports
                            </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between underline w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Spare Parts<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                       </button>
                                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                        
                                        <li>
                                            <a href="{{ route('admin.tires.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >Tire Trucking</a>
                                        </li>
                                        
                                        </ul>
                                    </div>
                                </li>
                                
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >#</a>
                            </li>
                            
                            </ul>
                        </div>
                        
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center text-white  underline w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Configurations</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                                    
                                    
                                    <x-admin-nav-link :href="route('admin.vcls.index')" :active="request()->routeIs('admin.vcls.index')">
                                        {{ __('Vehicles') }}
                                    </x-admin-nav-link>
                                    
                                    

                                    <x-admin-nav-link :href="route('admin.drivers.index')" :active="request()->routeIs('admin.drivers.index')">
                                        {{ __('Drivers') }}
                                    </x-admin-nav-link>
                                        
                                    
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                            </div>
                        
                        </div>

                    
                        

                    </nav>
              
            </div>
            <main class="flex flex-col m-1 p-1 pb-10 w-full overflow-y-auto h-screen bg-slate-100 justify-between">

                {{ $slot }}

                


                
<div data-dial-init class="fixed right-6 bottom-6 group">
    <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
        <button type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6 -ml-px " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path></svg>
            <span class="sr-only">Share</span>
        </button>
        <div id="tooltip-share" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Share
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Print</span>
        </button>
        <div id="tooltip-print" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Print
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4zm7 5a1 1 0 00-2 0v1.586l-.293-.293a.999.999 0 10-1.414 1.414l2 2a.999.999 0 001.414 0l2-2a.999.999 0 10-1.414-1.414l-.293.293V9z" fill-rule="evenodd"></path></svg>
            <span class="sr-only">Download</span>
        </button>
        <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Download
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 dark:hover:text-white shadow-sm dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path><path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path></svg>
            <span class="sr-only">Copy</span>
        </button>
        <div id="tooltip-copy" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Copy
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="flex items-center justify-center text-white bg-teal-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

            </main>
           
        </div>
        
        <script>
            
            $(document).ready( function () {
                $('#table_one').DataTable();
                
            } );
            
        </script>
        <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
        
         {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script type="text/javascript" charset="utf8"
             src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> --}}
    </body>
</html>
