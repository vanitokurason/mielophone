<x-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>

    <x-slot name="contentClass">
        {{$contentClass}}
    </x-slot>

    <h2>"Список Бродского":</h2>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>author</th>
            <th></th>
            <th></th>
        </tr>
            @foreach($posts as $elem)
                <tr>
                    <td>{{$elem->id}}.</td>
                    <td>{{$elem->title}}</td>
                    <td>{{$elem->author}}</td>
                    <td><a href="/admin/brodsky/edit/{{ $elem->id }}">edit</a> </td>
                    <td>delete</td>
                </tr>
            @endforeach
    </table>

    <p><a href="/admin/brodsky/createBook/">Добавить новый елемент</a>    <a href="/">Выйти</a></p>
</x-layout>
