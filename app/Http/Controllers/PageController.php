<?php
namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showMainTitle()
    {
        $content = 'main';
        $picture = '/images/Бродский_портрет_1.jpeg';
        $alt = 'Бродский_портрет';
        return view('page.mainTitle', ['alt' => $alt, 'picture' => $picture, 'content' => $content, 'title' => 'Миелофон. Главная страница']);
    }

    public function about()
    {
        $content = 'about';
        $picture = '/images/Mielofon.png';
        $alt = 'Миелофон';
        return view('page.mainTitle', ['alt' => $alt, 'picture' => $picture, 'content' => $content, 'title' => 'Миелофон. О проекте']);
    }

    public function authorization()
    {
        $content = '';
        return view('page.mainTitle', ['content' => $content, 'title' => 'Миелофон. Авторизация']);
    }
}
