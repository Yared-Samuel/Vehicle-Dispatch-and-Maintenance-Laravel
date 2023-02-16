<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
       

        
        <script src="{{ asset('assets/js/datepicker.js') }}"></script>
        

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased  overflow-clip md:min-h-screen">
        

        <div class="bg-gradient-to-r from-teal-800 to-teal-400 shadow-slate-500  px-4 md:px-4 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center ">
                
                <a href="https://flowbite.com" class="flex items-center">
                    
                    <span class="text-white font-bold self-center text-xl whitespace-nowrap dark:text-white">GrmaGifawossen Trading</span>
                </a>
                <div class="flex items-center  md:order-2">
                  
<button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white mx-4  hover:bg-teal-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"
      ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
      </svg>
      Reports      
      </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="p-2 text-md font-bold text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                          <li class="bg-gradient-to-r from-teal-800 to-cyan-400 my-1 text-md text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                          <a href="#" class="block px-4 py-2 ">
                              Expences</a>
                          </li>
                          <li class="bg-gradient-to-r from-teal-800 to-cyan-400 my-1 text-md text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            <a href="
                            {{ route('admin.reports.fuel') }}
                            " class="block px-4 py-2">Fuel</a>
                          </li>
                          <li class="bg-gradient-to-r from-teal-800 to-cyan-400 my-1 text-md text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            <a href="#" class="block px-4 py-2">Maintenances</a>
                          </li>
                          <li class="bg-gradient-to-r from-teal-800 to-cyan-400 my-1 text-md text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            <a href="#" class="block px-4 py-2">Spare Parts</a>
                          </li>
                        </ul>
                    </div>

                  
                  
                  
                  <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"
                      >
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                      
                      {{ auth()->user()->name }} 
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  </button>

                  <!-- Dropdown menu -->
                  <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ auth()->user()->name }}</div>
                        <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                      </div>
                      
                      <div class="py-0">
                        
                          <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            @csrf

                            <x-dropdown-link :href="route('profile.edit')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </form>
                        
                      </div>
                      <div class="py-0">
                        
                          <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        
                      </div>
                  </div>


                  
                    
                </div>
                
            </div>
        </div>
        
  
        <div class="flex-col md:flex md:flex-row  overflow-clip md:min-h-screen">
           


            <div class="min-h-screen bg-gray-100">
                <div class="sidebar min-h-screen w-[3.35rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
                  <div class="flex h-screen flex-col justify-between pt-0 pb-6">
                    <div>
                      <div class="w-max p-0">
                        {{-- <img src="{{ asset('images/Logos.svg') }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> --}}
                        {{-- <img src="https://tailus.io/images/logo.svg" class="w-32" alt=""> --}}
                      </div>
                      <ul class="mt-0.5 space-y-1 tracking-wide">
                        <li class="min-w-max">
                          <a href="{{ route('admin.request.index') }}"  aria-label="dashboard" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-800 to-cyan-400  px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            {{-- <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                              <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                              <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                              <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>
                            
                            <span class="-mr-1 font-bold">Request</span>
                            
                          </a>
                        </li>
                        
                        <li class="min-w-max">
                          <a href="{{ route('admin.maintenance.index') }}"  aria-label="dashboard" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-800 to-cyan-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            {{-- <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                              <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                              <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                              <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>
                            
                            <span class="-mr-1 font-bold">Maintenance</span>
                            
                          </a>
                        </li>
                        <li class="min-w-max">
                          <a href="{{ route('admin.fuel.index') }}" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-800 to-cyan-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                              <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>
                            
                            <span class="font-bold">Fueling</span>
                          </a>
                        </li>
                        <li class="min-w-max">
                          <a href="{{ route('admin.cost.index') }}" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-800 to-cyan-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                              <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                            
                            <span class="font-bold">Expences</span>
                          </a>
                        </li>
                        <li class="min-w-max">
                          <a href="{{ route('admin.spareinv.index') }}" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-800 to-cyan-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>                            
                            
                            <span class="font-bold">Inventory</span>
                          </a>
                        </li>
                        
                      </ul>
                      
                    </div>
                    
                    <div class="min-w-max mb-10">
                      <a href="{{ route('admin.vcls.index') }}" class="relative flex items-center space-x-4 bg-gradient-to-r border-b-4 border-blue-50 from-gray-600 to-gray-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>                        
                        <span class="group-hover:text-gray-700">Vehicles</span>
                      </a>
                      <a href="{{ route('admin.drivers.index') }}" class="relative flex items-center space-x-4 bg-gradient-to-r from-gray-600 to-gray-200 px-4 py-3 text-white hover:bg-gradient-to-r hover:from-indigo-900 hover:to-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>                        
                        <span class="group-hover:text-gray-700">Drivers</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <main class="flex flex-col m-1 p-1 pb-10 w-full h-full overflow-y-auto h-screen bg-slate-100 justify-between">

                {{ $slot }}

                


                


            </main>
           
        </div>
        
        <script>
            
            $(document).ready( function () {
                $('#table_one').DataTable();
                
            } );
            
        </script>
        <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
        
        @include('sweetalert::alert')

    </body>
</html>
