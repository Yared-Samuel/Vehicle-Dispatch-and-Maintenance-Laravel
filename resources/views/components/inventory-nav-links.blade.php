<div class="flex justify-between bg-slate-300 w-full px-4 py-2 items-center rounded-lg mb-2">
    <div class="text-xl font-bold outline-2 bg-slate-200 px-2 rounded-lg p-1 outline-white text-teal-700">
        {{ $slot }}
    </div>

    <div class="p-2 bg-slate-100 rounded-2xl outline outline-1 outline-teal-700">

        <a href="{{ route('admin.reports.stock') }}"
            class="mx-1 px-4 py-1 bg-slate-200 text-teal-900 font-bold outline outline-1 outline-teal-600 hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-center  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Stock
            Balance</a>
        <a href="{{ route('admin.spareinv.index') }}"
            class="mx-1 px-4 py-1 bg-slate-200 text-teal-900 font-bold outline outline-1 outline-teal-600 hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  text-center  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Recived</a>
        <a href="{{ route('admin.spareinv.create') }}"
            class="mx-1 px-4 py-1 bg-slate-200 text-teal-900 font-bold outline outline-1 outline-teal-600 hover:text-white border inline border-teal-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  text-center  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Recieve
            Items</a>
        <a href="{{ route('admin.spareuse.index') }}"
            class="mx-1 px-4 py-1 bg-slate-200 text-yellow-900 font-bold outline outline-1 outline-teal-600 hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  text-center  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Issued
            List</a>
        <a href="{{ route('admin.spareuse.create') }}"
            class="mx-1 px-4 py-1 bg-slate-200 text-yellow-900 font-bold outline outline-1 outline-teal-600 hover:text-white border inline border-yellow-800 hover:bg-teal-900 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg  text-center  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Issue
            Item</a>
    </div>
</div>
