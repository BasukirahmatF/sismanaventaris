<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full flex items-center justify-between my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Barang Sisa Total</h2>
        <a href="{{ route('stocks.excel') }}" class="mr-2 px-3 py-2 text-xs font-medium text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md cursor-pointer">
            Download Report
        </a>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Item Name</th>
                        <th class="px-4 py-3">Jumlah Barang Simpan</th>
                        <th class="px-4 py-3">Jumlah Barang Rusak</th>
                        <th class="px-4 py-3">Total Items</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($stocks as $stock)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm font-semibold">
                                {{ $stock->item->item_name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $stock->quantity_of_incoming_items }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $stock->quantity_of_outgoing_items }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $stock->total_items }}
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700 dark:text-gray-400 text-center">
                            <td colspan="5" class="px-4 py-3 text-sm">Data not found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
