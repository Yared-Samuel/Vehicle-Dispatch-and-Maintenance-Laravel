<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>    
    <div class="">
        
        <div class="flex justify-between w-full px-4 py-2 items-center">
            <div class="text-xl font-bold">
              Maintenance Approval
            </div>
            <a href="{{ route('admin.request.index') }}" class="text-gray-900 hover:text-white border inline border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-1 py-1 text-center ml-2 mb-0 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                >Back >>></a>
          </div>
          <div class="bg-yellow-100 rounded-lg py-5 px-6 mb-4 text-base text-yellow-700 mb-3" role="alert">
            This confirmation is irreversible!!
          </div>
          <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <form method="POST" action="{{ route('admin.request.update',$mtn->id )}}">
                @csrf
                @method('PUT')
                {{ $mtn->id }}
                <div class="relative z-0 mb-10 w-1/3 group">
                    <label for="status" class="sr-only">Confirm</label>
                    <select name="status" id="status" class="dynamic block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-4 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                        <option value="false" disabled selected>Confirm</option>
                        @foreach (App\Enums\Mtnstatus::cases() as $status)
                        <option class="text-white bg-slate-600" value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="relative z-0 mb-6 w-1/3 group">
                    <input type="date" name="schedule" id="schedule" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="schedule" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                    >Guarage Schedule date</label>
                </div>
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                >Confirm</button>
            </form>
                    
    </div>
</x-admin-layout>