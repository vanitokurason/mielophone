<?php
namespace App\Http\Controllers;
use App\Models\Brodsky_list;
use Illuminate\Support\Facades\DB;
use App\Models\Brodsky;

class BrodskyListController extends Controller
{
    public function brodskyList()
    {
        $posts = Brodsky_list::all();
        $contentClass = 'content';
        return view('brodskyList.brodskyList', ['contentClass' => $contentClass, 'posts' => $posts, 'title' => 'Список Бродского']);
    }
}
