<x-layout>

    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div id="form">
        <form action="" method="POST">
            @csrf
            <label for="title">Title:<br>
                <input name="title" value="{{ $post->title }}">
            </label><br>
            <label for="author">Author:<br>
                <input name="author" value="{{ $post->author }}">
            </label><br>
            <label for="annotation">Annotation:<br>
                <textarea name="annotation" cols="80" rows="17">{{ $post->bookAnnotation->annotation }}</textarea>
            </label><br>
            <label for="publication date:">Publication date:<br>
                <input type="text" name="publication_date" value="{{ $post->bookAnnotation->publication_date }}">
            </label><br>
            <label for="Open access">Open access(1/0):<br>
                <input type="text" name="open_access" value="{{ $post->bookAnnotation->open_access }}">
            </label><br>
            <label for="picture_path">Picture(link):<br>
                <input type="text" name="picture_path" value="{{ $post->bookAnnotation->picture_path }}">
            </label><br>
            <label for="Alt">"Alt" for picture:<br>
                <input type="text" name="alt" value="{{ $post->bookAnnotation->alt }}">
            </label><br>
            <input type="submit" value="Сохранить">
            <a href="/admin/brodsky/"><input type="button" value="Отмена/Назад"></a>
        </form>
    </div>
</x-layout>
