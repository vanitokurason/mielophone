<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>

    <x-slot name="contentClass">
        {{$contentClass}}
    </x-slot>

    <ol>
        @foreach($posts as $elem)
                <li>{{$elem->title}} {{$elem->author}}</li>
        @endforeach
    </ol>
</x-layout>
