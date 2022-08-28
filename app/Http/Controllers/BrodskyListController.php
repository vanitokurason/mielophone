<?php
namespace App\Http\Controllers;
use App\Models\BrodskyList;
use App\Models\BookAnnotation;
use Illuminate\Support\Facades\DB;

class BrodskyListController extends Controller
{
    public function brodskyList()
    {
        $posts = BrodskyList::all();
        $contentClass = 'content';
        return view('brodskyList.brodskyList', ['contentClass' => $contentClass, 'posts' => $posts, 'title' => 'Список Бродского']);
    }

    public function getAnnotation($id)
    {
        $post = BrodskyList::find($id);
        $contentClass = 'content';
        return view('brodskyList.book', ['contentClass' => $contentClass, 'post' => $post, 'title' => $post['title']]);
    }
}
