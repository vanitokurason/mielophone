<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="contentClass">
        {{ $contentClass }}
    </x-slot>

    <x-slot name="picture">
        {{ $post->bookAnnotation->picture_path }}
    </x-slot>

    <x-slot name="alt">
        {{ $post->bookAnnotation->alt }}
    </x-slot>

    <h2>{{ $post->title }}{{ $post->author ? ', ' . $post->author : '' }}</h2>

    <p>{{ $post->bookAnnotation->publication_date ? 'Дата написания/публикации: ' . $post->bookAnnotation->publication_date : ''}}</p>

    <p>{{ $post->bookAnnotation->annotation }}</p>

</x-layout>
