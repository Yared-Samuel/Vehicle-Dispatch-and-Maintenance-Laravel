<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-slate-100 ">  
    <div class="overflow-hidden bg-slate-200 p-4 md:max-h-screen max-h-72 shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-sm">
            <div class="text-xl font-bold">
                    Latest Fueling
            </div>  
            <div>     
                <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a>
                <a href="{{ route('admin.fuel.index') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div>
        </div>
        <div class="container input-group relative flex flex-wrap items-stretch w-1/4 mb-0 rounded">
            <div class="search">
            <input type="search" name="search" id="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
            </span>
                </div>
          </div>
        
            
        
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No
                            </th>
                            <th scope="col" column-name="plate_id":sort-column="$sortColumn" :sort-direction="$sortDirection" class="py-2 px-2 border border-r-gray-300">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Fuel Cost
                                
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Fuel Volume
                               
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Odometer Reading
                            </th>
                            
                            
                            <th scope="col" class="py-2 px-1 border border-r-gray-300">
                                Detail
                            </th>
                        </tr>
                    </thead>
                    
                        
                        @foreach ($fuels as $key=>$fueler)
                       
                        
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                            </th>
                            <td class="py-1 px-2 border-r">
                                {{ $fueler->plate_city}} - 0{{ $fueler->plate_code }} - <b> {{ $fueler->plate_id }} </b>
                            </td>
                            @foreach ($fueler->vcl_hasmny_fuels->take(-1) as $fuel)
                            <td class="py-1 px-2 h-5 border-r">                               
                                <b> {{ $fuel->cash }}</b> <small class="text-blue-300">Birr</small> 
                            </td>
                            <td class="py-1 px-2 border-r">
                                <b> {{ $fuel->litre }}</b> <small class="text-blue-300">liter</small> 
                            </td>
                            <td class="py-1 px-2 border-r font-extrabold underline">
                                <b> {{ $fuel->kilometre }}</b> <small class="text-yellow-300">KM</small> 
                            </td>
                            @endforeach
                            <td class="flex py-1 px-1">
                                <a href="{{ route("admin.fuel.edit", $fueler->id) }}" class="text-teal-600"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </a>
                            </td>
                            @endforeach
                       
                        </tr>
                        
                        
                    </tbody>
                    <tbody id="content"></tbody>
                </table>
                <div class="flex justify-center mt-2 py-2 bg-slate-300 rounded-md w-full">
                    <nav aria-label="Page navigation example">
                      <ul class="flex list-style-none">
                        <li class="page-item disabled"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none"
                            href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">1</a></li>
                        <li class="page-item active"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-teal-600 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                            href="#">2 <span class="visually-hidden"></span></a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">3</a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                
    </div> 
    <div class="overflow-hidden mt-5 max-h-10 bg-slate-200 p-4 md:max-h-screen shadow-md sm:rounded-lg">
        <div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
                    Latest Data Analysis
            </div>  
            <div>     
                {{-- <a href="{{ route('admin.fuel.create') }}" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-pd px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Fueling</a> --}}
                <a href="#" class="text-teal-900 font-bold hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-md px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Consumption Analysis</a>
            </div>
        </div>
        <div class="input-group relative flex flex-wrap items-stretch w-1/4 mb-0 rounded">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
            </span>
          </div>
            
            
                <table class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                No
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Vehicle Plate
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Previous Data 
                                
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Latest Data
                               
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                Diference
                            </th>
                            <th scope="col" class="py-2 px-2 border border-r-gray-300">
                                KM / Liter
                            </th>
                            
                            {{-- <th scope="col" class="py-2 px-1 border border-r-gray-300">
                                Detail
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 0;
                            $one = 0;
                            $two = 0;
                            $lit = 0;
                        @endphp
                        @foreach ($fuels as $key=>$fuel)
                                    
                        
                        <tr class="odd:bg-white even:bg-slate-100 bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-1 px-2 border-r">
                                {{ $key +1 }}
                                <a href="{{ route("admin.fuel.show", $fuel->id) }}" class="text-teal-600"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-6 ">
                                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </a>
                                 
                            </th>
                            
                                
                            <td class="py-1 px-2 border-r">
                                
                                          
                                   
                                {{ $fuel->plate_city}} - 0{{ $fuel->plate_code }} - <b> {{ $fuel->plate_id }} </b>
                            </td>
                           
                            @foreach ($fuel->vcl_hasmny_fuels->take(-2) as $km)                               
                            
                            <td class="py-1 px-2 border-r">
                                
                                <b> {{ $distance =  $km->kilometre }}</b> <small class="text-yellow-300">KM</small> 
                                <br><hr>
                                <b> {{ $liter =  $km->litre }}</b> <small class="text-blue-300">liter</small> 
                                <br><hr>
                                {{ $km->fuel_date }}
                                
                            </td>      
                            @php
                                ++$a;
                                switch ($a) {
                                    case 1:
                                        $one = $distance;
                                          
                                    case 2:
                                        $two = $distance;
                                        $lit = $liter;
                                        break;    
                                        }                                
                            @endphp                       
                            @endforeach

                            <td class="py-1 px-2 border-r">
                                @php
                                     $diffr = $two - $one;
                                     
                                @endphp
                                {{ $diffr ?? 0 }}
                                <small class="text-yellow-300">KM</small> 
                                @php
                                    $a = 0;
                                @endphp
                            </td>
                            <td class="py-1 px-2 border-r font-extrabold underline">
                                @php
                                if ($lit != 0) {
                                    $ratio = $diffr / $lit;
                                       $ratio_dec = number_format((float)$ratio, 2, '.', '');
                                       echo $ratio_dec;
                                }elseif ($lit = 0) {
                                    echo "Fuel More";
                                }
                                
                                @endphp
                                <small class="text-yellow-300">KM/L</small>
                            </td>
                            {{-- <td class="flex py-1 px-1">
                                
                            </td> --}}
                        
                            @endforeach
                            
                        </tr>
                        
                        
                    </tbody>
                </table>
                <div class="flex justify-center mt-2 py-2 bg-slate-300 rounded-md w-full">
                    <nav aria-label="Page navigation example">
                      <ul class="flex list-style-none">
                        <li class="page-item disabled"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none"
                            href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">1</a></li>
                        <li class="page-item active"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-teal-600 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                            href="#">2 <span class="visually-hidden"></span></a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">3</a></li>
                        <li class="page-item"><a
                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
    </div> 
</div>
  
    
</x-admin-layout>


<script>
    $('#search').on('keyup',function()
    {
        $value =$(this).val();
        $.ajax({
            type:'get',
            url:'{{ URL::to('admin/fuel/index') }}',
            data:{'search':$value},
            success:function(data)
            {
                console.log(data);
                $('#content').html(data)
            }
        });
})
</script>