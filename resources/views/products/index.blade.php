<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products List') }}
        </h2>
    </x-slot>


    <div class="flex h-screen">

    <div class="container mx-auto p-6">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="p-6 text-gray-900 dark:text-gray-100">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Stock</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->description }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->price }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->stock }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex items-center gap-2">
                                <!-- Buy button -->
                                <form action="{{ route('products.decreaseStock', $product->id) }}" method="POST">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-700 disabled:opacity-50"
                                        @if($product->stock <= 0) disabled @endif>
                                        <img width="20" height="20" src="{{ asset('images/buy.png') }}" alt="buy-icon">
                                    </button>
                                </form>

                                <!-- Re-Stock button -->
                                <form action="{{ route('products.increaseStock', $product->id) }}" method="POST">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-700 disabled:opacity-50">
                                        <img width="20" height="20" src="{{ asset('images/stock.png') }}" alt="stock-icon">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</x-app-layout>
