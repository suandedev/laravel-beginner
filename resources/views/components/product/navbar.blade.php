<section class="w-2/12">
    <nav class="flex flex-col bg-blue-100  h-full">
        <header class="hover:bg-blue-200 py-4 ">
            <h1>
                <a href="" class="block text-lg capitalize font-bold text-blue-500 text-center mx-auto text-center">test <b>app</b></a>
            </h1>
        </header>
        <ul class="overflow-auto">
            <li class="flex flex-row items-center space-x-3 py-2 px-2 hover:bg-blue-200">
                <ion-icon name="home-outline" class=" my-auto"></ion-icon>
                <a href="{{ route('product.index') }}" class="block text-lg text-blue-500 text-left  capitalize">
                    dashboard
                </a>
            </li>
            <li class="flex flex-row items-center space-x-3 py-2 px-2 hover:bg-blue-200">
                <ion-icon name="cube-outline"></ion-icon>
                <a href="{{ route('product.index') }}" class="block text-lg text-blue-500 text-left capitalize">
                    product
                </a>
            </li>
            <li class="flex flex-row items-center space-x-3 py-2 px-2 hover:bg-blue-200">
                <ion-icon name="newspaper-outline"></ion-icon>
                <a href="" class="block text-lg text-blue-500 text-left capitalize">
                    invoice
                </a>
            </li>
        </ul>
    </nav>
</section>
