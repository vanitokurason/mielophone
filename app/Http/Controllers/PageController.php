<?php
namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showMainTitle()
    {
        $content = Page::find(1)['text'];
        $contentClass = 'content';
        return view('page.mainTitle', ['content' => $content, 'contentClass' => $contentClass, 'title' => 'Миелофон. Главная страница']);
    }

    public function about()
    {
        $content = Page::find(2)['text'];
        $contentClass = 'content';
        return view('page.mainTitle', ['content' => $content, 'contentClass' => $contentClass, 'title' => 'Миелофон. О проекте']);
    }

    public function authorization()
    {
        $content = '';
        $contentClass = 'middle-right';
        return view('page.mainTitle', ['content' => $content, 'contentClass' => $contentClass, 'title' => 'Миелофон. Авторизация']);
    }
}
