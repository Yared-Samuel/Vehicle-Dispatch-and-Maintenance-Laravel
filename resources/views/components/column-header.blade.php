@php
    $currentSortDirection = '';
        $sortDirection = '';
    if($sortDirection == 'asc'){
        $currentSortDirection = 'asc';
        $sortDirection = 'desc';
    }else if ($sortDirection == 'desc') {
        $currentSortDirection = 'desc';
        $sortDirection = '';
    }else {
        $currentSortDirection = '';
        $sortDirection = 'asc';
    }
@endphp

<th scope="col" class="py-2 px-2 border border-r-gray-300">
    {{-- <a href="{{ route('admin.fuel.index', ['sortDirection' => $sortDirection, 'sortColumn' => $columnName]) }}"></a> --}}
    {{ $slot }}
</th>