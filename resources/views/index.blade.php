<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Dashboard</h2>

    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#ff5a1f" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 20.25h-1.5V6a2.652 2.652 0 0 0-3-3h-9a2.652 2.652 0 0 0-3 3v14.25H3a.75.75 0 0 0 0 1.5h18a.75.75 0 0 0 0-1.5Zm-7-14h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1 0-1.5Zm0 3h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1 0-1.5Zm0 3h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1 0-1.5Zm-5-6h1a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1 0-1.5Zm0 3h1a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1 0-1.5Zm0 3h1a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1 0-1.5Zm.75 5.25a1.326 1.326 0 0 1 1.5-1.5h1.5a1.326 1.326 0 0 1 1.5 1.5v2.75h-4.5Z"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Cabang
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $totalSuppliers ? $totalSuppliers : '0' }}
                </p>
            </div>
        </div>

        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" data-slot="icon" viewBox="0 0 24 24" fill="#0e9f6e" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 4H6a2.652 2.652 0 0 0-3 3v8a2.652 2.652 0 0 0 3 3h7.74a.312.312 0 0 0 .31-.31.5.5 0 0 0-.02-.12A5.441 5.441 0 0 1 14 17a5.007 5.007 0 0 1 6.6-4.74.3.3 0 0 0 .4-.28V7a2.652 2.652 0 0 0-3-3ZM6 12a1 1 0 1 1 1-1 1 1 0 0 1-1 1Zm6 2a3 3 0 1 1 3-3 3 3 0 0 1-3 3Zm9.53 4.53-2 2a.748.748 0 0 1-1.06 0l-2-2a.75.75 0 0 1 1.06-1.06l.72.719V15a.75.75 0 0 1 1.5 0v3.189l.72-.719a.75.75 0 0 1 1.06 1.06Z"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Item Barang
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $totalItems ? $totalItems : '0' }}
                </p>
            </div>
        </div>
    </div>
</x-layout>