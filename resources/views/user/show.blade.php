<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>


    <ul>
    @foreach($days as $day)
        <li {{($today == $day) ? 'class="active"' : ''}}>
            {{$day}}
        </li>
    @endforeach
    </ul>
</x-layout>
