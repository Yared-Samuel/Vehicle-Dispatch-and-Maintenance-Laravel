<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="flex">
    <div class="flex flex-col space-y-6 justify-start items-start mt-20">
<a href="{{ route('admin.cost.create') }}">  
        <button
      
    class='relative inline-flex items-center bg-gray-100 rounded-full hover:bg-[#ffc93c] group hover:text-gray-100 text-gray-500 py-3 px-6 text-xl font-bold overflow-visible shadow-2xl'>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
        clip-rule="evenodd" />
    </svg>
    PAY
    
    <div
      class="absolute top-0 right-0 -mt-4 -mr-4 px-2 py-0 text-gray-100 bg-[#ffc93c] group-hover:bg-[#ff6f3c] rounded-full">
      3</div>
  </button>
</a>
  <button
    class='relative inline-flex items-start bg-gray-100 rounded-full hover:bg-[#ffc93c] group hover:text-gray-100 text-gray-500 py-3 px-6 text-xl font-bold overflow-visible shadow-2xl'>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
        clip-rule="evenodd" />
    </svg>
    Update
    <div
      class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 text-gray-100 bg-[#ffc93c] group-hover:bg-[#ff6f3c] rounded-full">
      3</div>
  </button>
  <button
    class='relative inline-flex items-start bg-gray-100 rounded-full hover:bg-[#ffc93c] group hover:text-gray-100 text-gray-500 py-3 px-6 text-xl font-bold overflow-visible shadow-2xl'>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
        clip-rule="evenodd" />
    </svg>
    Lists
    <div
      class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 text-gray-100 bg-[#ffc93c] group-hover:bg-[#ff6f3c] rounded-full">
      3</div>
  </button>
  
</div>
            
    <section>
        <div class="container px-5 py-12 mx-auto lg:px-20 space-y-5">
          <div
            class="flex flex-wrap items-end justify-start w-full duration-500 ease-in-out transform bg-white border-2 hover:border-4 border-teal-200 hover:border-teal-600 rounded-lg shadow-md hover:shadow-2xl transition-transform hover:scale-95 group">
            <div class="w-full xl:w-1/4 md:w-1/4 ">
              @foreach ($costs as $cost)          
              <div class="relative flex flex-col h-full py-8 px-4 text-center md:text-left">
                <h2
                  class="mb-4 text-2xl xl:text-2xl md:text-xl font-bold tracking-widest text-indigo-900 uppercase title-font">
                  {{ $cost->Spare_cost }}
                </h2>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  {{ $cost->mech_cost }}
                </p>
              </div>
              @endforeach
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Oil number 54
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Big Spring
                </p>
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Tire
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2 ">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2"></span> Flat Tire 
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2">Google</span> Flat Tire 
                </p>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-indigo-800 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Databases
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4 lg:ml-auto">
              <div class="relative flex flex-col h-full p-8">
                <h1 class="flex items-end mx-auto text-5xl lg:text-5xl sm:text-4xl font-black leading-none text-indigo-800 ">
                  3602<span class="text-lg">Birr</span>
                </h1>
                <button
                  class="w-full px-4 py-2 mx-auto mt-3 text-indigo-800 border border-indigo-700 rounded-full text-md hover:bg-indigo-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-gray-700 focus:bg-indigo-800 hover:text-gray-200">
                  Approve Now
                </button>
                <p class="mx-auto mt-4 text-sm text-indigo-800 text-center ">$3.99/mo when you renew</p>
              </div>
            </div>
          </div>
          <div
            class="flex flex-wrap items-end justify-start w-full duration-500 ease-in-out transform bg-white border-2 hover:border-4 border-indigo-200 hover:border-indigo-600 rounded-lg shadow-md hover:shadow-2xl transition-transform hover:scale-95 group">
            <div class="w-full xl:w-1/4 md:w-1/4 ">
              <div class="relative flex flex-col h-full py-8 px-4 text-center md:text-left">
                <h2
                  class="mb-4 text-2xl xl:text-2xl md:text-xl font-bold tracking-widest text-indigo-900 uppercase title-font">
                  AA-03-B22405
                </h2>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  Annual Scervice
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Oil number 54
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Big Spring
                </p>
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Tire
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2 ">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2"></span> Flat Tire 
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2">Google</span> Flat Tire 
                </p>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-indigo-800 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Databases
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4 lg:ml-auto">
              <div class="relative flex flex-col h-full p-8">
                <h1 class="flex items-end mx-auto text-5xl lg:text-5xl sm:text-4xl font-black leading-none text-indigo-800 ">
                  3602<span class="text-lg">Birr</span>
                </h1>
                <button
                  class="w-full px-4 py-2 mx-auto mt-3 text-indigo-800 border border-indigo-700 rounded-full text-md hover:bg-indigo-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-gray-700 focus:bg-indigo-800 hover:text-gray-200">
                  Approve Now
                </button>
                <p class="mx-auto mt-4 text-sm text-indigo-800 text-center ">$3.99/mo when you renew</p>
              </div>
            </div>
          </div>
          <div
            class="flex flex-wrap items-end justify-start w-full duration-500 ease-in-out transform bg-white border-2 hover:border-4 border-indigo-200 hover:border-indigo-600 rounded-lg shadow-md hover:shadow-2xl transition-transform hover:scale-95 group">
            <div class="w-full xl:w-1/4 md:w-1/4 ">
              <div class="relative flex flex-col h-full py-8 px-4 text-center md:text-left">
                <h2
                  class="mb-4 text-2xl xl:text-2xl md:text-xl font-bold tracking-widest text-indigo-900 uppercase title-font">
                  AA-03-B22405
                </h2>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  Annual Scervice
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Oil number 54
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Big Spring
                </p>
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-yellow-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">1</span> Tire
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4">
              <div class="relative flex flex-col h-full py-8 px-2 ">
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2"></span> Flat Tire 
                </p>
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-gray-400 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-red-500 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span><span class="font-semibold mr-2">Google</span> Flat Tire 
                </p>
      
                <p
                  class="flex items-center mb-2 text-lg font-normal tracking-wide text-indigo-800 justify-center md:justify-start">
                  <span
                    class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-indigo-800 rounded-full bg-blue-1300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>
                  <span class="font-semibold mr-2">2</span> Databases
                </p>
              </div>
            </div>
            <div class="w-full xl:w-1/4 md:w-1/4 lg:ml-auto">
              <div class="relative flex flex-col h-full p-8">
                <h1 class="flex items-end mx-auto text-5xl lg:text-5xl sm:text-4xl font-black leading-none text-indigo-800 ">
                  3602<span class="text-lg">Birr</span>
                </h1>
                <button
                  class="w-full px-4 py-2 mx-auto mt-3 text-indigo-800 border border-indigo-700 rounded-full text-md hover:bg-indigo-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-gray-700 focus:bg-indigo-800 hover:text-gray-200">
                  Approve Now
                </button>
                <p class="mx-auto mt-4 text-sm text-indigo-800 text-center ">$3.99/mo when you renew</p>
              </div>
            </div>
          </div>
          
        </div>
      
      </section>
    </div> 

        
    </div>
</x-admin-layout>