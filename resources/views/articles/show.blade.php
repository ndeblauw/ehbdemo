<x-site-layout>

    <div class="max-w-6xl mx-auto p-4">
        <div class=" mb-4 p-2">
            <span class="bg-gray-200 rounded-lg px-2">{{ $article->category->name }}</span>
            <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
            <p class="italic">By {{ $article->author->name }}</p>
            <p>{{ $article->content }}</p>
        </div>
    </div>

</x-site-layout>
