
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    
 

    <div class="mb-8">
        <div class="w-full mb-5 p-4 text-center bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            
            <div class="flex justify-between w-full pb-4  items-center">
                <div class="text-xl font-bold">
                  Request Form
                </div>
                <div>
                    
                    <a href="{{ route('admin.request.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                    >Back</a>
                </div>
              </div>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                @foreach($rqst_approved as $rqst) 
                <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 w-6 h-6">
                        <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z" clip-rule="evenodd" />
                      </svg>
                      
                    
                    <div class="text-left">
                        <div class="mb-1 text-xs">Vehicle in Maintenance</div>
                        <div class="-mt-1 font-sans text-sm font-semibold text-teal-300">{{ $rqst->plate_city }} - 0{{ $rqst->plate_code }} - {{ $rqst->plate_id }}</div>
                    </div>
                </a>
                
                @endforeach
            </div>
            
        </div>
        
        <section class="mb-1 bg-slate-100">
            
            <h3 class="flex items-center my-8">
                <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              <span class="inline-block px-4 py-1 text-md font-bold text-center text-gray-900 bg-teal-200 rounded-full">
                Request Form
              </span>
              <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
              <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
              <span class="inline-block px-4 py-1 text-sm font-medium text-center text-gray-500 bg-gray-200 rounded-full">
               
                Maintenance Complition
              </span>
              <span aria-hidden="true" class="flex-grow bg-teal-200 rounded h-0.5"></span>
              
              <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
              <span class="inline-block px-4 py-1 text-sm font-medium text-center text-gray-500 bg-gray-200 rounded-full">
                Cost and Spareparts
              </span>
              <span aria-hidden="true" class="flex-grow bg-gray-200 rounded h-0.5"></span>
            </h3>
        </section>
        
            <div class="p-4 bg-slate-200">
            
                        <form method="POST"  action="{{ route('admin.request.index') }}">
                            @csrf
                            <div class="flex">
                            <div class="relative z-0  w-full group">
                                <input type="date" name="request_date" id="request_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="request_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Maintenance Request Date</label>
                            </div>
                             <div class="relative z-0  w-full group">
                                <input type="text" name="request_by" id="request_by" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="request_by" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Maintenance Requested By</label>
                            </div>
                            <div class="relative z-0  w-full group">
                                
                                <select name="vcl_id" id="vcl_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Select Plate number </option>
                                    @foreach ($vcls as $vcl)
                                    <option value="{{ "$vcl->id" }}">{{ $vcl->plate_id }}</option>
                                    @endforeach
                                </select>
                                <label for="vcl_id" class="sr-only">Vehicle Plate Number</label>
                            </div>
                            <div class="relative z-0  w-full group">
                                <label for="id" class="sr-only">For</label>
                                <select name="mtn_type" id="mtn_type" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" >
                                    <option disabled selected> Select mentenance type </option>
                                    @foreach (App\Enums\Maintenance::cases() as $mttyp)
                                    <option value="{{ $mttyp->value }}">{{ $mttyp->name  }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="relative z-0  w-full group">
                                <textarea name="description" id="description" cols="30" rows="5" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                                <label for="description" class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                >Description about requested maintenance</label>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Create Item</button>
                            
                        </form>
            </div>
                    
    </div>
                   
            

        

</x-admin-layout>