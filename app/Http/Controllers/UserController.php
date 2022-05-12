<?php
namespace App\Http\Controllers;

class UserController extends Controller {
    public function show($name) {
        $days = [];
        $days = range(1, 31);
        $today = date('d', time());

        return view('user.show', ['name' => $name, 'days' => $days, 'today' => $today, 'title' => 'Calendar']);
    }

    public function greating($surname, $name) {
        return view('user.greating', ['name' => $name, 'surname' => $surname, 'title' => 'Wellcome']);
    }
}
