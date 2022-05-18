<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Brodsky;

class BrodskyController extends Controller
{
    public function brodskyList()
    {
        $posts = Brodsky::all();
        dump($posts);
        //return view('brodsky.brodskyList', ['posts' => $posts, 'title' => 'Brodsky\'s_list']);
    }
}
