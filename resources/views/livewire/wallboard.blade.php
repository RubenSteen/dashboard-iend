<div>
    <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-200">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <span class="ml-4 text-lg font-semibold">Total Open Incidents: {{ $totalOpenIncidents }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
