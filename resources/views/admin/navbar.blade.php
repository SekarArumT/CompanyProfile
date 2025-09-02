<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-red-700 h-screen flex flex-col justify-between fixed">
        <div>
            <div class="p-6 text-xl font-bold text-white border-b border-red-600">
                Admin
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" 
                           class="block px-4 py-2 rounded text-white font-medium hover:bg-red-800">
                           Dashboard
                        </a>
                    </li>
                     <li>
                        <a href="{{ route('products.index') }}" 
                           class="block px-4 py-2 rounded text-white font-medium hover:bg-red-800">
                           Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}" 
                           class="block px-4 py-2 rounded text-white font-medium hover:bg-red-800">
                           Event
                        </a>
                     </li>
                     <li>
<a href="{{ route('brands.index') }}" 
   class="block px-4 py-2 rounded text-white font-medium hover:bg-red-800">
   Brands
</a>

                     </li>
                </ul>
            </nav>
        </div>

        <!-- Logout di bawah -->
        <div class="p-4 border-t border-red-600">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                        class="w-full bg-red-600 text-white px-4 py-2 rounded hover:bg-red-800">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Konten -->
    <main class="ml-64 flex-1 p-6">
        @yield('content')
    </main>

</body>
</html>
