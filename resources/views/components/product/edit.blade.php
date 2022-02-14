<x-layout.app>
    <main class="w-10/12 ">
        <section class="px-4 py-4 bg-gray-100 flex flex-col h-full overflow-auto">
            <h1 class="capitalize text-left text-xl font-semibold">Edit Product</h1>
            <hr>
            <form action="{{ route('product.update', $product->id) }}" method="post"
                  class="flex flex-col bg-gray-50 mt-4 max-w-sm p-4  rounded shadow-sm">
                @csrf
                @method('PUT')
                <div class="flex flex-col space-y-2">
                    <label for="" class="text-left capitalize font-semibold">name</label>
                    <input type="text" name="name" placeholder="name.."
                           class="@error('name') is-invalid @enderror block pl-3 rounded border  border-slate-300 shadow-sm placeholder:italic focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none"
                           value="{{ $product->name }}">
                    @error('name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2 mt-3">
                    <label for="" class="text-left capitalize font-semibold">price</label>
                    <input type="text" name="price" placeholder="price.."
                           class="@error('price') is-invalid @enderror block pl-3 rounded border  border-slate-300 shadow-sm placeholder:italic focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none"
                           value="{{ $product->price }}">
                    @error('price')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2 mt-3">
                    <label for="" class="text-left capitalize font-semibold">stok</label>
                    <input type="text" name="stok" placeholder="stok.."
                           class="@error('stok') is-invalid @enderror block pl-3 rounded border  border-slate-300 shadow-sm placeholder:italic focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none"
                    value="{{ $product->stok }}">
                    @error('stok')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                        class="block mt-4 w-16 rounded-sm shadow-sm font-semibold px-3 py-2 bg-blue-300 focus:ring-sky-500 hover:bg-sky-600 hover:text-gray-100">
                    save
                </button>
            </form>
        </section>
    </main>
</x-layout.app>
