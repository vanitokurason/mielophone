<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>

    <table>
        <tr>
            <th>title</th>
            <th>author</th>
        </tr>
        @foreach($posts as $elem)
            <tr>
                <td>{{$elem->title}}</td>
                <td>{{$elem->author}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
