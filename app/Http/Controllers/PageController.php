<?php
namespace App\Http\Controllers;
use App\Models\Brodsky_list;
use Illuminate\Http\Request;

class MainTitle extends Controller
{
    public function showMainTitle()
    {
        $posts = Brodsky_list::all();
        return view('mainTitle.mainTitle', ['posts' => $posts, 'title' => 'Mielophone. Home page.']);
    }
}
