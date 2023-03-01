<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="py-6">    
<div class="w-full mb-5 p-4 text-center bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    @foreach($rqst_approved as $rqst) 
    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 w-6 h-6">
                <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z" clip-rule="evenodd" />
              </svg>
              
            
            <div class="text-left">
                <div class="mb-1 text-xs">Vehicle in Maintenance</div>
                <div class="-mt-1 font-sans text-sm font-semibold text-teal-300">{{ $rqst->rqst_blgto_vcls->plate_city }} - 0{{ $rqst->rqst_blgto_vcls->plate_code }} - {{ $rqst->rqst_blgto_vcls->plate_id }}</div>
            </div>
        </a>
        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 w-6 h-6">
                <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
              </svg>
              
            <div class="text-left">
                <div class="mb-1 text-xs">Request Date</div>
                <div class="-mt-1 font-sans text-sm font-semibold text-teal-300">{{ date('d-m-Y', strtotime($rqst->request_date));  }}</div>
            </div>
        </a>
        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 w-6 h-6">
                <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
              </svg>
              
            <div class="text-left">
                <div class="mb-1 text-xs">Maintenance</div>
                <div class="-mt-1 font-sans text-sm font-semibold text-teal-300">{{ $rqst->mtn_type }}</div>
            </div>
        </a>
        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 w-6 h-6">
                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
              </svg>
              
            <div class="text-left">
                <div class="mb-1 text-xs">Request By</div>
                <div class="-mt-1 font-sans text-sm font-semibold text-teal-300">{{ $rqst->request_by }}</div>
            </div>
        </a>
    </div>
    @endforeach
</div>

<section class="mb-1 bg-slate-100">
    
    <h3 class="flex items-center my-8">
      <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
      <span class="inline-block px-4 py-1 text-sm font-medium text-center text-gray-500 bg-teal-200 rounded-full">
        Request Form
      </span>
      <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
      <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
      <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
      <span class="inline-block px-4 py-1 text-md font-bold text-center text-gray-900 bg-teal-200 rounded-full">
        Maintenance Complition
      </span>
      <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
      <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
      <span class="inline-block px-4 py-1 text-sm font-medium text-center text-gray-500 bg-gray-200 rounded-full">
        Cost and Spareparts
      </span>
      <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
    </h3>
</section>
    
        <div class="bg-slate-200 border border-b-teal-400 border-t-teal-400 rounded-lg shadow-md py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <form method="POST" 
                        action="{{ route('admin.maintenance.update', $rqst->id  ) }}">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-around p-4">
                        
                        <div class="relative z-0 mb-10 w-1/5 group">
                            <input type="date" name="end_date" id="end_date" class="block py-2.5 px-0 w-full absolute text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required placeholder=" "/>
                            <label for="end_date" class="peer-focus:font-medium font-semibold absolute text-md text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-105 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal -600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Maintenance End</label>
                        </div>

                        <div class="relative z-0 mb-10 w-2/5 group">
                            <input type="number" name="kilometer" id="kilometer" class="dynamic block py-2.5 px-0 w-full font-semibold text-md text-black bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" placeholder=" " required />
                            <label for="kilometer" class="peer-focus:font-medium absolute font-semibold text-md dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Odometer Reading - (KM)</label>
                        </div>
                        
                        
                        
                    </div>    
                        
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                                >Next / Cost</button>
                                <a href="{{ route('admin.cost.create') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                >Back</a>
                </form>
  
            
            

        </div>
    </div>
</x-admin-layout>