  
    <table id="dataTable" class="w-full table-auto text-sm text-left border-2 border-gray-200 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-200 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">No.</th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">Vehicle Plate</th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">Fuel Cost</th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">Fuel Volume</th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">Odometer Reading</th>
                <th scope="col" class="py-2 px-2 border border-r-gray-300">Detail</th>
               
            </tr>
        </thead>
        
        <tbody class="bg-white divide-y divide-gray-300">
            @foreach ($data as $key=>$fueler)
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
        
    </table>
    

