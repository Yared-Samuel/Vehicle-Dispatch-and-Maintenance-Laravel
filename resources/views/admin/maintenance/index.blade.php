<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="bg-slate-100 mb-20">  
        <div class="flex justify-between w-full px-4 py-2 items-center bg-slate-200">
            <div class="text-xl font-bold">
                    Vehicles Scheduled
            </div>  
            <div>     
                <a href="{{ route('admin.request.index') }}" class="bg-teal-600 text-slate-50 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Requests</a>
                {{-- <a href="{{ route('admin.maintenance.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Categories</a> --}}
            </div>
        </div>   
        <div class="bg-gray-100 p-4 rounded-md border-2 border-slate-400">
            <table id="mtn_tbl_2" class="display table table-sm hover cell-border compact stripe bg-white">
                <thead style="background-color: rgb(107, 107, 107); font-size: 100%; color: white;">
                        <tr>
                            <th scope="col-1" class="">
                                No
                            </th>
                            <th scope="col" class="">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="">
                                Request Date
                            </th>
                            <th scope="col" class="">
                                Maintenace Type
                            </th>
                            <th scope="col" class="">
                                Maintenance Schedule
                            </th>
                            <th scope="col" class="">
                                Maintenance Start
                            </th>
                            <th scope="col" class="">
                                Maintenance End
                            </th>                            
                            <th scope="col" class="">
                                Description
                            </th>
                            <th scope="col" class="border border-r-gray-300">
                                Cmplete Maintenance
                            </th>
                            
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mtn_aprroveds as $key=>$mtn_aprroved)
                            
                        
                       
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="">
                                {{ $key + 1 }}
                            </th>
                            <td class="">
                                {{ $mtn_aprroved->rqst_blgto_vcls->plate_id }}
                            </td>
                            <td class="">
                                {{  date('d-m-Y', strtotime($mtn_aprroved->request_date)); }}
                            </td>
                            <td class="">
                                {{ $mtn_aprroved->mtn_type }}
                            </td>
                           
                            <td class="text-green-700"> 
                                {{ $mtn_aprroved->schedule ?? ' ' }}
                            </td> 
                            <td class="text-green-700"> 
                                {{ $mtn_aprroved->start_date ?? ' ' }}
                            </td> 
                            <td class="text-green-700">
                                {{ $mtn_aprroved->end_date ?? ' ' }}
                            </td>  
                            <td class="">
                                {{ $mtn_aprroved->description ?? ' ' }}
                            </td>
                            <td class="py-1 px-1">
                                <a href="{{ route('admin.maintenance.edit', $mtn_aprroved->id) }}" class="text-teal-600 "
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                          </svg>
                                          
                                          
                                    </a>
                            </td>


                            
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
        </div>
        <div class="flex justify-between w-full px-4 py-2 items-center bg-slate-200">
            <div class="text-xl font-bold">
                    Vehicle maintenance Completed
            </div>  
            <div>     
                <a href="{{ route('admin.request.index') }}" class="bg-teal-600 text-slate-50 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                ></a>
                {{-- <a href="{{ route('admin.maintenance.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Categories</a> --}}
            </div>
        </div>   
        <div class="bg-gray-100 p-4 rounded-md border-2 border-slate-400">
            <table id="mtn_tbl_4" class="display table table-sm hover cell-border compact stripe bg-white">
                <thead style="background-color: rgb(107, 107, 107); font-size: 100%; color: white;">
                        <tr>
                            <th scope="col-1" class="">
                                No
                            </th>
                            <th scope="col" class="">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="">
                                Request Date
                            </th>
                            <th scope="col" class="">
                                Maintenace Type
                            </th>
                            <th scope="col" class="">
                                Maintenance Schedule
                            </th>
                            <th scope="col" class="">
                                Maintenance Start
                            </th>
                            <th scope="col" class="">
                                Maintenance End
                            </th>                            
                            <th scope="col" class="">
                                Description
                            </th>
                            
                            <th scope="col" class="border border-r-gray-300">
                                Cost
                            </th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mtn_completed as $key=>$mtn_complete)
                            
                        
                       
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="">
                                {{ $key + 1 }}
                            </th>
                            <td class="">
                                {{ $mtn_complete->rqst_blgto_vcls->plate_id }}
                            </td>
                            <td class="">
                                {{  date('d-m-Y', strtotime($mtn_complete->request_date)); }}
                            </td>
                            <td class="">
                                {{ $mtn_complete->mtn_type }}
                            </td>
                           
                            <td class="text-green-700"> 
                                {{ $mtn_complete->schedule ?? ' ' }}
                            </td> 
                            <td class="text-green-700"> 
                                {{ $mtn_complete->start_date ?? ' ' }}
                            </td> 
                            <td class="text-green-700">
                                {{ $mtn_complete->end_date ?? ' ' }}
                            </td>  
                            <td class="">
                                {{ $mtn_complete->description ?? ' ' }}
                            </td>
                            

                            <td class="py-1 px-1 ">
                                <a href="{{ route('admin.cost.edit', $mtn_complete->id) }}" class="text-teal-600 "
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6">
                                            <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
                                          </svg>
                                          
                                          
                                    </a>
                            </td>
                           
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
        </div>




        <div class="flex justify-between w-full px-4 py-2 items-center bg-slate-200">
            <div class="text-xl font-bold">
                    Maintenance In Progress
            </div>  
            <div>     
                <a href="{{ route('admin.request.index') }}" class="bg-teal-600 text-slate-50 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                ></a>
                {{-- <a href="{{ route('admin.maintenance.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Add Categories</a> --}}
            </div>
        </div>   
        <div class="bg-gray-100 p-4 rounded-md border-2 border-slate-400">
            <table id="mtn_tbl_3" class="display table table-sm hover cell-border compact stripe bg-white">
                <thead style="background-color: rgb(107, 107, 107); font-size: 100%; color: white;">
                        <tr>
                            <th scope="col-1" class="">
                                No
                            </th>
                            <th scope="col" class="">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="">
                                Request Date
                            </th>
                            <th scope="col" class="">
                                Maintenace Type
                            </th>
                            <th scope="col" class="">
                                Maintenance Schedule
                            </th>
                            <th scope="col" class="">
                                Maintenance Start
                            </th>
                            <th scope="col" class="">
                                Maintenance End
                            </th>                            
                            <th scope="col" class="">
                                Description
                            </th>
                            <th scope="col" class="border border-r-gray-300">
                                Complete Maintenance
                            </th>
                            
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mtn_started as $key=>$mtn_start)
                                        
                       
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="">
                                {{ $key + 1 }}
                            </th>
                            <td class="">
                                {{ $mtn_start->rqst_blgto_vcls->plate_id }}
                            </td>
                            <td class="">
                                {{  date('d-m-Y', strtotime($mtn_start->request_date)); }}
                            </td>
                            <td class="">
                                {{ $mtn_start->mtn_type }}
                            </td>
                           
                            <td class="text-green-700"> 
                                {{ $mtn_start->schedule ?? ' ' }}
                            </td> 
                            <td class="text-green-700"> 
                                {{ $mtn_start->start_date ?? ' ' }}
                            </td> 
                            <td class="text-green-700">
                                {{ $mtn_start->end_date ?? ' ' }}
                            </td>  
                            <td class="">
                                {{ $mtn_start->description ?? ' ' }}
                            </td>
                            
                            <td class="py-1 px-1">
                                <a href="{{ route('admin.maintenance.edit', $mtn_start->id) }}" class="text-teal-600 "
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                          </svg>
                                          
                                          
                                    </a>
                            </td>


                            
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
        </div>
    </div> 

        
    {{-- 1 requested 2 Acepted or in maintenance 3 maintenance completed --}}
</x-admin-layout>

<script>
    $(document).ready(function() {
    $('#mtn_tbl_2').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 5,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>
<script>
    $(document).ready(function() {
    $('#mtn_tbl_3').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 5,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>
<script>
    $(document).ready(function() {
    $('#mtn_tbl_4').DataTable({
        dom: 'B<"clear">lfrtip',
   buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'],
   pageLength: 5,
      lengthMenu: [5, 10, 20, 50, 100, 200, 500],
      
    });
  });
  
  
  </script>