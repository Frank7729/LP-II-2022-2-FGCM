<x-app-layout>
    <div class="container m-auto mt-4">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 justify-items-center">
            @foreach ($products as $product)
                <div class="max-w-sm rounded overflow-hidden shadow-lg m-2">
                    <img class="w-full" src="{{ Storage::url($product->image->url) }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        @foreach ($product->tags as $tag)
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag->name }}</span>
                        @endforeach
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $product->category->name }}</span>
                        <span>
                            <x-jet-button>Editar</x-jet-button>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mx-4 mt-4 mb-4">
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>
