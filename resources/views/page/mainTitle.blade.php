<x-layout>
    <x-slot name="title">
        {{ $title}}
    </x-slot>

    @if (isset($picture))
        <x-slot name="picture">
            {{ $picture}}
        </x-slot>

        <x-slot name="alt">
            {{ $alt}}
        </x-slot>
    @endif

    @if (url()->full() == route('mainTitle'))
        <x-content.main />
    @elseif (url()->full() == route('about'))
        <x-content.about />
    @endif

</x-layout>
