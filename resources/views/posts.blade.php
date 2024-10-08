<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <a href="/post/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div>
            <a href="#">{{ $post['author'] }}</a><span> | 7 Oktober 2024</span>
        </div>
        <p class="my-4 font-light">
            {{-- tampilkan isi artikel dengan limit 100 char, gunakan helper laravel `Str::limit()` --}}
            {{ Str::limit($post['body'], '130') }}
        </p>
        <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>