<x-auth>
    <x-slot:title>{{ $title }}</x-slot:title>
    <form method="POST" action="{{ route('login.post') }}" class="w-full">
        @csrf
        <h1 class="mb-4 text-md text-center font-semibold text-gray-700 dark:text-gray-200">
            Masuk Akun
        </h1>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Username</span>
            <input name="username" required class="block w-full mt-1 text-sm form-input" placeholder="Masukkan Username" />
        </label>
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <input name="password" required class="block w-full mt-1 text-sm form-input" placeholder="Masukkan Password" type="password" />
        </label>

        <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg">
            Login
        </button>
    </form>
</x-auth>