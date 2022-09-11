<?php
namespace App\Http\Controllers;

use App\Models\BrodskyList;
use App\Models\BookAnnotation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BrodskyListController extends Controller
{
    public function brodskyList()
    {
        $posts = BrodskyList::simplePaginate(10);
        $contentClass = 'content';
        $picture = '/images/Brodsky-List-1.jpg';
        $alt = 'Brodsky_list';
        return view('brodskyList.brodskyList', ['picture' => $picture, 'alt' => $alt, 'contentClass' => $contentClass, 'posts' => $posts, 'title' => 'Список Бродского']);
    }

    public function getAnnotation($id)
    {
        $post = BrodskyList::find($id);
        $contentClass = 'content';
        return view('brodskyList.book', ['contentClass' => $contentClass, 'post' => $post, 'title' => $post['title']]);
    }

    public function editBrodskyList()
    {
        $posts = BrodskyList::all();
        $contentClass = 'content';
        return view('brodskyList.editBrodskyList', ['contentClass' => $contentClass, 'posts' => $posts, 'title' => 'Администрирование: Список Бродского']);
    }

    public function editBook(Request $request, $id)
    {
        $title = 'editing...';
        $post = BrodskyList::find($id);

        if ($request->has('title')) {
            $post->title = $request->input('title');
            $post->author = $request->input('author');

            $bookAnnotation = BookAnnotation::updateOrCreate(['brodsky_list_id' => $id], ['annotation' => $request->input('annotation'),
                'publication_date' => $request->input('publication_date'),
                'open_access' => $request->input('open_access'),
                'picture_path' => $request->input('picture_path'),
                'alt' => $request->input('alt')]);

            $post->save();
        }

        return view('brodskyList.bookForm', ['title' => $title, 'post' => $post]);
    }

    public function createBook()
    {
        $title = 'editing...';
        $post = new BrodskyList();
        $post->save();

        return view('brodskyList.bookForm', ['title' => $title, 'post' => $post]);
    }
}
