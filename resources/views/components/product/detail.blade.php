<x-layout.app>
    <main class="w-10/12 ">
        <section class="px-4 py-4 bg-gray-100 flex flex-col h-full overflow-auto">
            <h1 class="capitalize text-left text-xl font-semibold">Detail Product</h1>
            <hr>
            <section class="space-y-2 border-r-0 border-l-4 border-sky-500 rounded px-3 py-4 bg-gray-50 max-w-sm mt-4 shadow-lg">
                <h1>Name : {{ $product->name }}</h1>
                <h2>price : {{ $product->price }}</h2>
                <h3>stok : {{ $product->stok }}</h3>
                <a href="{{ route('product.index') }}"
                   class="block bg-blue-300 px-3 py-2 w-16 rounded shadow hover:bg-blue-600 hover:text-gray-100">back</a>
            </section>
        </section>
    </main>
</x-layout.app>
