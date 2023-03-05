<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    

    
    <div class="py-6">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
               <!-- component -->

        <div class="flex flex-col justify-center items-center h-[100vh]">
            <div class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                <div class="mt-2 mb-8 w-full">
                    <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                    General Information
                    <p class="text-sm text-gray-600">Total number of Vehicles.</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $vcl_count }}
                    </p>
                    </h4>
                    <!-- component -->

                </div> 
                <div class="grid grid-cols-2 gap-4 px-2 w-full">
                    <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm text-gray-600">Dissel Vehicles</p>
                        @foreach ($vcl_diesel as $vcl_d)
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            0{{ $vcl_d->plate_code }} <b>-</b> {{ $vcl_d->plate_id }}
                         </p>
                        @endforeach
                        
                        </div>

                    <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Benzene Vehicles</p>
                    @foreach ($vcl_benzene as $vcl_b)
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        0{{ $vcl_b->plate_code }} <b>-</b> {{ $vcl_b->plate_id }}
                     </p>
                    @endforeach
                    
                    </div>
                    @foreach ($vcl_category as $vcls)
                    @foreach ($vcls as $v)
                        
                    
                    <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm text-gray-600">{{ $v->category_name }}</p>
                        <p class="text-base font-medium text-navy-700 dark:text-white">
                            0{{ $v->plate_code }} <b>-</b> {{ $v->plate_id }}
                        </p>
                        </div>
                        @endforeach
                    @endforeach
                    

                    {{-- <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Work History</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        English, Spanish, Italian
                    </p>
                    </div>

                    <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Organization</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        Simmmple Web LLC
                    </p>
                    </div>

                    <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Birthday</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        20 July 1986
                    </p>
                    </div> --}}
                </div>
            </div>  
            <p class="font-normal text-navy-700 mt-20 mx-auto w-max">Vehicle Information Card <a href="#" target="_blank" class="text-brand-500 font-bold">Flit Managment System</a></p>  
        </div>
    
  
            
            

        </div>
    </div>
</x-admin-layout>