<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $dataPost['title'] }}</h2>
        <div>
            <a href="#">{{ $dataPost['author'] }}</a><span> | 7 Oktober 2024</span>
        </div>
        <p class="my-4 font-light">
            {{-- tampilkan isi artikel --}}
            {{ $dataPost['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to artikel</a>
    </article>
</x-layout>