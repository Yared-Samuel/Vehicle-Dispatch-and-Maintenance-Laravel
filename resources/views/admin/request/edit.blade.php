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
          <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <form method="POST" action="{{ route('admin.request.update',$mtn->id )}}">
                @csrf
                @method('PUT')
                
                <div class="relative z-0 mb-10 w-1/3 group">
                    <label for="status" class="sr-only">Confirm</label>
                    <select name="status" id="status" class="dynamic block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-4 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                        <option value="false" disabled selected>Confirm</option>
                        @foreach (App\Enums\Mtnstatus::cases() as $status)
                        <option class="text-white bg-slate-600" value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "
                >Confirm</button>
            </form>
                    
    </div>
</x-admin-layout>