<x-app-layout>
    <div class="container m-auto mt-4">
        <div class="grid grid-cols-4">
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post) }}">
                    <div class="max-w rounded overflow-hidden shadow-lg m-2">
                        <img class="w-full" src="{{ Storage::url($post->image->url) }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $post->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $post->extract }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            @foreach ($post->tags as $tag)
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mx-4 mt-4 mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
