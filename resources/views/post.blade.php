<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $dataPost['title'] }}</h2>
        <div>
            By
            <a class="font-semibold text-gray-500 hover:underline" href="/authors/{{ $dataPost->author->username }}"> {{ $dataPost->author->name }}</a>
            in 
            <a class="font-semibold text-gray-500 hover:underline" href="/categories/{{ $dataPost->category->catergory_slug }}">{{ $dataPost->category->category_name }}</a>
            <span> | {{ $dataPost['created_at']->format('j F Y') }}</span>
        </div>
        <p class="my-4 font-light">
            {{-- tampilkan isi artikel --}}
            {!! $dataPost['body'] !!}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to artikel</a>
    </article>
</x-layout>