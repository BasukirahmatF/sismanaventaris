<aside class="z-20 hidden w-64 overflow-y-auto bg-blue-500 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-2 text-lg font-medium text-gray-800 p-2" href="/dashboard">
            Inventaris Barang Kantor
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if (request()->is('dashboard'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('dashboard') ? 'text-gray-800' : '' }}" href="/dashboard">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#25314C" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 21.75h-4.25V16.5a1.75 1.75 0 0 0-3.5 0v5.25H6A3.383 3.383 0 0 1 2.25 18v-6.35c0-2.122.586-2.716 1.542-3.509l6.12-5.131a3.244 3.244 0 0 1 4.176 0l6.12 5.131c.956.793 1.542 1.387 1.542 3.509V18A3.383 3.383 0 0 1 18 21.75Zm-2.75-1.5H18c1.577 0 2.25-.673 2.25-2.25v-6.35c0-1.525-.252-1.734-1-2.355l-6.125-5.136a1.75 1.75 0 0 0-2.25 0L4.749 9.3c-.747.621-1 .83-1 2.355V18c0 1.577.673 2.25 2.25 2.25H8.75V16.5a3.25 3.25 0 0 1 6.5 0Z" fill="#25314C"></path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            {{-- @if (Auth::check() && Auth::user()->is_admin === 1)
                <li class="relative px-6 py-3">
                    @if (request()->is('users', 'users/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('users', 'users/*') ? 'text-gray-800' : '' }}" href="/users">
                        <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                        </svg>
                        <span class="ml-4">Pengguna</span>
                    </a>
                </li>
            @endif --}}
            <li class="relative px-6 py-3">
                @if (request()->is('suppliers', 'suppliers/*'))
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('suppliers', 'suppliers/*') ? 'text-gray-800' : '' }}" href="/suppliers">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 20.25h-.75V6a3.383 3.383 0 0 0-3.75-3.75h-9A3.383 3.383 0 0 0 3.75 6v14.25H3a.75.75 0 0 0 0 1.5h18a.75.75 0 0 0 0-1.5Zm-7.5 0h-3V17.5c0-.589.161-.75.75-.75h1.5c.589 0 .75.161.75.75Zm1.5 0V17.5a2.067 2.067 0 0 0-2.25-2.25h-1.5A2.067 2.067 0 0 0 9 17.5v2.75H5.25V6c0-1.577.673-2.25 2.25-2.25h9c1.577 0 2.25.673 2.25 2.25v14.25Zm.75-7.25a.75.75 0 0 1-.75.75h-1a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm-5 0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm5-3a.75.75 0 0 1-.75.75h-1a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm-5 0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm5-3a.75.75 0 0 1-.75.75h-1a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Zm-5 0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1 0-1.5h1a.75.75 0 0 1 .75.75Z" fill="#25314C"></path>
                    </svg>
                    <span class="ml-4">Cabang Kantor</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('items.index', 'items.edit', 'items.create'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->routeIs('items.index', 'items.edit', 'items.create') ? 'text-gray-800' : '' }}" href="/items">
                    <svg class="w-5 h-5" data-slot="icon" viewBox="0 0 24 24" fill="#25314C" xmlns="http://www.w3.org/2000/svg"><path d="M17.43 1.25h-6.86a3.022 3.022 0 0 0-3.32 3.32v.68h-.679A3 3 0 0 0 3.25 8.571V22a.75.75 0 0 0 1.122.651L10 19.435l5.628 3.216A.751.751 0 0 0 16.75 22v-5l2.877 1.647A.75.75 0 0 0 20.75 18V4.57a3.022 3.022 0 0 0-3.32-3.32Zm-2.18 19.457-4.878-2.787a.748.748 0 0 0-.744 0L4.75 20.708V8.571c0-1.293.527-1.821 1.821-1.821h6.858c1.294 0 1.821.528 1.821 1.821Zm4-4-2.5-1.432v-6.7a3 3 0 0 0-3.321-3.325H8.75v-.68c0-1.293.527-1.82 1.82-1.82h6.86c1.293 0 1.82.527 1.82 1.82Zm-6-5.707a.75.75 0 0 1-.75.75h-5a.75.75 0 0 1 0-1.5h5a.75.75 0 0 1 .75.75Z" fill="#25314C"></path>
                    </svg>
                    <span class="ml-4">Item Barang</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('items/incoming', 'items/incoming/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('items/incoming', 'items/incoming/*') ? 'text-gray-800' : '' }}" href="/items/incoming">
                    <svg class="w-5 h-5" data-slot="icon" viewBox="0 0 24 24" fill="#25314C" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.75 7v5a.75.75 0 0 1-1.5 0V7c0-1.577-.673-2.25-2.25-2.25H6c-1.577 0-2.25.673-2.25 2.25v8c0 1.577.673 2.25 2.25 2.25h8a.75.75 0 0 1 0 1.5H6A3.383 3.383 0 0 1 2.25 15V7A3.383 3.383 0 0 1 6 3.25h12A3.383 3.383 0 0 1 21.75 7ZM5 11a1 1 0 1 0 1-1 1 1 0 0 0-1 1Zm7-3.75A3.75 3.75 0 1 1 8.25 11 3.754 3.754 0 0 1 12 7.25Zm0 1.5A2.25 2.25 0 1 0 14.25 11 2.252 2.252 0 0 0 12 8.75Zm8.47 8.72-.72.719V15a.75.75 0 0 0-1.5 0v3.189l-.72-.719a.75.75 0 0 0-1.06 1.06l2 2a.752.752 0 0 0 1.06 0l2-2a.75.75 0 0 0-1.06-1.06Z"></path>
                    </svg>
                    <span class="ml-4">Barang Simpan</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('items/outgoing', 'items/outgoing/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('items/outgoing', 'items/outgoing/*') ? 'text-gray-800' : '' }}" href="/items/outgoing">
                    <svg class="w-5 h-5" data-slot="icon" viewBox="0 0 24 24" fill="#25314C" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 16.75a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 1 1.5 0v2a.75.75 0 0 1-.75.75Zm4.84-8.288a.749.749 0 0 0-.8.7l-.6 8.988a1.981 1.981 0 0 1-2.252 2.1H8.81a2.676 2.676 0 0 1-1.182-.224.75.75 0 1 0-.657 1.348 4.119 4.119 0 0 0 1.839.376h6.38a3.453 3.453 0 0 0 3.748-3.5l.6-8.99a.751.751 0 0 0-.698-.798Zm2.69-4.932-3 3-8 8-7 7a.75.75 0 0 1-1.06-1.06l2.571-2.57L4.3 6.75H3a.75.75 0 0 1 0-1.5h3.56c.9 0 .929-.1 1.186-.85l.2-.607A2.231 2.231 0 0 1 10.08 2.25h3.84a2.234 2.234 0 0 1 2.134 1.55l.2.593c.26.76.293.857 1.189.857h.249l2.778-2.78a.75.75 0 0 1 1.06 1.06ZM9.171 4.867c-.045.133-.091.26-.14.383h5.937a9.042 9.042 0 0 1-.134-.365l-.206-.617a.739.739 0 0 0-.708-.518h-3.84a.737.737 0 0 0-.706.51ZM6.449 16.49l2.8-2.8V11a.75.75 0 0 1 1.5 0v1.189l5.44-5.439H7a.843.843 0 0 1-.1-.02c-.112.007-.215.02-.34.02H5.8Z"></path>
                    </svg>
                    <span class="ml-4">Barang Rusak/Tidak Layak</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('stocks', 'stocks/*'))
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('stocks', 'stocks/*') ? 'text-gray-800' : '' }}" href="/stocks">
                    <svg class="w-5 h-5" data-slot="icon" viewBox="0 0 24 24" fill="#25314C" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2.25H6A3.383 3.383 0 0 0 2.25 6v12A3.383 3.383 0 0 0 6 21.75h12A3.383 3.383 0 0 0 21.75 18V6A3.383 3.383 0 0 0 18 2.25ZM6 3.75h12c1.577 0 2.25.673 2.25 2.25v5.25H3.75V6c0-1.577.673-2.25 2.25-2.25Zm12 16.5H6c-1.577 0-2.25-.673-2.25-2.25v-5.25h16.5V18c0 1.577-.673 2.25-2.25 2.25ZM10.75 8A1.25 1.25 0 1 1 12 9.25 1.25 1.25 0 0 1 10.75 8Zm2.5 8A1.25 1.25 0 1 1 12 14.75 1.25 1.25 0 0 1 13.25 16Z"></path>
                    </svg>
                    <span class="ml-4">Stock Barang</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800" href="/dashboard">
            Inventaris Barang Kantor
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if (request()->is('dashboard'))
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('dashboard') ? 'text-gray-800' : '' }}" href="/dashboard">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            @if (Auth::check() && Auth::user()->is_admin === 1)
                <li class="relative px-6 py-3">
                    @if (request()->is('users', 'users/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('users', 'users/*') ? 'text-gray-800' : '' }}" href="/users">
                        <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                        </svg>
                        <span class="ml-4">Pengguna</span>
                    </a>
                </li>
            @endif
            <li class="relative px-6 py-3">
                @if (request()->is('suppliers', 'suppliers/*'))
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('suppliers', 'suppliers/*') ? 'text-gray-800' : '' }}" href="/suppliers">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                    <span class="ml-4">Cabang Kantor</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('items.index', 'items.edit', 'items.create'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->routeIs('items.index', 'items.edit', 'items.create') ? 'text-gray-800' : '' }}" href="/items">
                    <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"></path>
                    </svg>
                    <span class="ml-4">Item Barang</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('items/incoming', 'items/incoming/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('items/incoming', 'items/incoming/*') ? 'text-gray-800' : '' }}" href="/items/incoming">
                    <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181"></path>
                    </svg>
                    <span class="ml-4">Barang Simpan</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('items/outgoing', 'items/outgoing/*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('items/outgoing', 'items/outgoing/*') ? 'text-gray-800' : '' }}" href="/items/outgoing">
                    <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"></path>
                    </svg>
                    <span class="ml-4">Barang Rusak/TIdak Layak</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->is('stocks', 'stocks/*'))
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex text-white items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 {{ request()->is('stocks', 'stocks/*') ? 'text-gray-800' : '' }}" href="/stocks">
                    <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"></path>
                    </svg>
                    <span class="ml-4">Stocks</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
