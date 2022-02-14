<x-layout.app>
    <main class="w-10/12 ">
        <section class="px-4 py-4 bg-gray-100 flex flex-col h-full overflow-auto">
            <h1 class="capitalize text-left text-xl font-semibold">Product</h1>
            <hr>
            <h1 class="capitalize text-left text-lg font-semibold py-6">data product</h1>
            <a href="{{ route('product.create') }}" class="relative text-center w-10 font-bold text-gray-200 bg-blue-500 rounded hover:bg-blue-600 hover:text-gray-100">new</a>
            <table class="bg-blue-50 mt-4 table-auto border border-gray-300">
                <thead class="border-b border-gray-400 bg-blue-300">
                    <tr class="capitalize">
                        <th>no</th>
                        <th>name</th>
                        <th>price</th>
                        <th>stok</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="text-center border-b border-blue-300">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp. {{ $product->price }}</td>
                        <td>{{ $product->stok }}</td>
                        <td class="flex flex-row justify-center items-center space-x-3">
                            <div class="flex flex-row w-24 space-x-3 items-center rounded shadow  bg-green-300 px-2">
                                <ion-icon name="eye" ></ion-icon>
                                <a href="{{ route('product.show', $product->id) }}" class="inline-block  rounded text-center">detail</a>
                            </div>
                            <div class="flex flex-row w-24 space-x-3 items-center rounded shadow  bg-yellow-300 px-2">
                                <ion-icon name="create"></ion-icon>
                                <a href="{{ route('product.edit', $product->id, 'edit') }}" class="inline-block  rounded text-center">edit</a>
                            </div>
                            <form action="{{ route('product.destroy', $product->id) }}" method="post" class="flex flex-row w-24 space-x-3 items-center rounded shadow  bg-red-300 px-2">
                                @csrf
                                @method('DELETE')
                                <ion-icon name="trash"></ion-icon>
                                <button type="submit" class="inline-block  rounded text-center">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </main>
</x-layout.app>
