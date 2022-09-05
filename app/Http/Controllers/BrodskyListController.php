<?php
namespace App\Http\Controllers;
use App\Models\BrodskyList;
use App\Models\BookAnnotation;
use Illuminate\Support\Facades\DB;

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

    public function editBook($id)
    {
        $post = BrodskyList::find($id);
        $contentClass = 'content';
        return view('brodskyList.book', ['contentClass' => $contentClass, 'post' => $post, 'title' => $post['title']]);
    }
}
