<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>

    <x-slot name="contentClass">
        {{$contentClass}}
    </x-slot>

    <ol>
        @foreach($posts as $elem)
            <li><a href="/brodsky/{{ $elem->id }}">{{$elem->title}} {{$elem->author}}</a></li>
        @endforeach
    </ol>
</x-layout>
