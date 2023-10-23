@props(['model', 'currentPage', 'totalRecords', 'perPage', 'prevPageUrl', 'nextPageUrl'])

<div class="flex flex-col items-center">
    <!-- Help text -->
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Mostrando <span class="font-semibold text-gray-900 dark:text-white">{{ ($currentPage - 1) * $perPage + 1 }}</span>
        to <span class="font-semibold text-gray-900 dark:text-white">{{ min($currentPage * $perPage, $totalRecords) }}</span>
        of <span class="font-semibold text-gray-900 dark:text-white">{{ $totalRecords }}</span> Registros
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <!-- Previous Button -->
        @if ($currentPage > 1)
            <a href="{{ $prevPageUrl }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 
            dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                Anterior
            </a>
        @endif

        <!-- Next Button -->
        @if ($currentPage * $perPage < $totalRecords)
            <a href="{{ $nextPageUrl }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 border-0 border-l border-gray-700 
            rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Siguiente
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @endif
    </div>
</div>