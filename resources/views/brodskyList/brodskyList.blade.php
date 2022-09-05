<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>

    <x-slot name="contentClass">
        {{$contentClass}}
    </x-slot>

    @if (isset($picture))
        <x-slot name="picture">
            {{ $picture}}
        </x-slot>

        <x-slot name="alt">
            {{ $alt}}
        </x-slot>
    @endif

    <h2>"Список Бродского":</h2>
    <ul>
        @foreach($posts as $elem)
            <li><a href="/brodsky/{{ $elem->id }}">{{$elem->id}}. {{$elem->title}}{{$elem->author ? ', ' . $elem->author : ''}}</a></li>
        @endforeach
    </ul>

    <p> {{ $posts->links() }}</p>
</x-layout>
