<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <article class="max-w-screen-md py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $dataPost['title'] }}</h2>
        <div>
            By
            <a class="font-semibold text-gray-500 hover:underline" href="/authors/{{ $dataPost->author->username }}"> {{ $dataPost->author->name }}</a>
            in 
            <a class="font-semibold text-gray-500 hover:underline" href="/categories/{{ $dataPost->category->catergory_slug }}">{{ $dataPost->category->category_name }}</a>
            <span> | {{ $dataPost['created_at']->format('j F Y') }}</span>
        </div>
        <p class="my-4 font-light">
            {{-- tampilkan isi artikel 
            {!! $dataPost['body'] !!}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to artikel</a>
    </article> --}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-blue-500 hover:underline text-base">« Back to artikel</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos" >
                            <div>
                                <a href="/authors/{{ $dataPost->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $dataPost->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $dataPost['created_at']->format('j F Y') }}</p>
                                <a class="mt-1 bg-{{ $dataPost->category->color }}-100 hover:underline text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800" href="/categories/{{ $dataPost->category->catergory_slug }}">{{ $dataPost->category->category_name }}</a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $dataPost['title'] }}</h1>
                </header>
                <p>{{ $dataPost['body'] }}</p>
            </article>
        </div>
    </main>
</x-layout>