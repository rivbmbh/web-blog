<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <a href="/post/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a class="hover:underline" href="/authors/{{ $post->author->id }}">By {{ $post->author->name }} in</a>
            <a class="hover:underline" href="/categories/{{ $post->category->id }}">{{ $post->category->category_name }}</a>
            <span> | {{ $post->created_at->diffForHumans() }}</span>
        </div>
        <p class="my-4 font-light">
            {{-- tampilkan isi artikel dengan limit 100 char, gunakan helper laravel `Str::limit()` --}}
            {!! Str::limit($post['body'], '130') !!}
        </p>
        <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>