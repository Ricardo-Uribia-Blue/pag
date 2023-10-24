@props(['model', 'currentPage', 'totalRecords', 'perPage', 'prevPageUrl', 'nextPageUrl'])

<!-- <div class="flex flex-col items-center">
    <div class="inline-flex mt-2 xs:mt-0">
        <!-- Previous Button 
        @if ($currentPage > 1)
            <a href="{{ $prevPageUrl }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 
                blue:bg-gray-800 blue:border-gray-700 blue:text-gray-400 blue:hover:bg-gray-700 blue:hover:text-white">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <!-- <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="M5 1 1 5l4 4"/>
                </svg>
                Anterior
            </a>
        @endif-->

       <!-- Next Button
        @if ($currentPage * $perPage < $totalRecords)
            <a href="{{ $nextPageUrl }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 border-0 border-l border-gray-700 
            rounded-r hover:bg-gray-900">
                Siguiente
                <svg class="w-6 h-6 text-gray-800 white:text-white" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="m1 9 4-4-4-4"/>
                </svg>
            </a>
         @endif -->
    <!-- </div> -->
<!-- </div> --> 

<div class="flex flex-col items-center">
  <!-- Help text -->
  <span class="text-sm text-blue-700 dark:text-blue-400">
      {{ __('crud.common.mostrando') }}
      <span class="font-semibold text-blue-700 dark:text-white">{{ ($currentPage - 1) * $perPage + 1 }}</span>  {{ __('crud.common.de') }} 
      <span class="font-semibold text-blue-700 dark:text-white">{{ min($currentPage * $perPage, $totalRecords) }}</span>  {{ __('crud.common.de') }} 
      <span class="font-semibold text-blue-700 dark:text-white">{{ $totalRecords }}</span> Registros
  </span>

  <div class="inline-flex mt-2 xs:mt-0">
    <!-- Buttons -->
    @if ($currentPage > 1)
        <a href="{{ $prevPageUrl }}"  class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-blue-700 rounded-l hover:bg-blue-900 dark:bg-blue-700 dark:border-blue-700 dark:text-blue-400 dark:hover:bg-blue-700 dark:hover:text-white">
            <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
            </svg>
                {{ __('crud.common.anterior') }}
        </a>
    @endif

    <!-- Next Button -->
    @if ($currentPage * $perPage < $totalRecords)
        <a href="{{ $nextPageUrl }}"  class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-blue-700 border-0 border-l border-blue-700 rounded-r hover:bg-blue-900 dark:bg-blue-700 dark:border-blue-700 dark:text-blue-400 dark:hover:bg-blue-700 dark:hover:text-white">
                {{ __('crud.common.siguiente') }}
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    @endif
  </div>
</div>

