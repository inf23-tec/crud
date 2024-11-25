<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <nav>
                    <ul>
                        <li class="py-2">
                            <a href="{{ route('usuarios.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">Usuarios</a>
                        </li>
                        <li class="py-2">
                            <a href="{{ route('products.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">Productos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
</x-app-layout>
