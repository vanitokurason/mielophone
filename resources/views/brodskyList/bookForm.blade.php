<x-layout>

    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <form action="" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input name="title" value="{{ $post->title }}"><br>
        <label for="author">Author:</label><br>
        <input name="author" value="{{ $post->author }}"><br>
        <label for="annotation">Annotation:</label><br>
        <textarea name="annotation" cols="80" rows="17">{{ $post->bookAnnotation->annotation }}</textarea><br>
        <label for="publication date:">Publication date:</label><br>
        <input type="text" name="publication_date" size="80px" value="{{ $post->bookAnnotation->publication_date }}"><br>
        <label for="Open access">Open access(1/0):</label><br>
        <input type="text" name="open_access" size="80px" value="{{ $post->bookAnnotation->open_access }}"><br>
        <label for="picture_path">Picture(link):</label><br>
        <input type="text" name="picture_path" size="80px" value="{{ $post->bookAnnotation->picture_path }}"><br>
        <label for="Alt">"Alt" for picture:</label><br>
        <input type="text" name="alt" size="80px" value="{{ $post->bookAnnotation->alt }}"><br>
        <input type="submit" value="Сохранить">
        <button  name="Cancel">Отмена</button>
    </form>

</x-layout>
