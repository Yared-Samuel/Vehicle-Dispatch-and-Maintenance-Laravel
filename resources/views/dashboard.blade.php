<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-10">
        <div class="flex w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
            
<a href="{{ route('admin.request.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/cars.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vehicle Maintenance and control system</h5>
    </div>
</a>
<a href="{{ route('admin.fuel.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/spare.jpg') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sparepart tracking and fule chart analysis</h5>
    </div>
</a>

        </div>
        
        <div class="mr-4 flex w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
            
<a href="{{ route('admin.cost.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/cars.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Expences and cost managment</h5>
    </div>
</a>
<a href="{{ route('admin.spareuse.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/spare.jpg') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sparepart Inventory System</h5>
    </div>
</a>

        </div>

        <div class="flex w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
            
            <a href="{{ route('admin.vcls.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/cars.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vehicles Story</h5>
                </div>
            </a>
            <a href="{{ route('admin.drivers.index') }}" class="flex flex-col items-center m-1 bg-white border  rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('frontend/img/spare.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Drivers</h5>
                </div>
            </a>
            
                    </div>




        
        
    </div>



    
</x-app-layout>
