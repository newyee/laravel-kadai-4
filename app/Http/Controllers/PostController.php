<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    /**
     * タスク一覧画面を表示
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        dd('aaaa');



        return view('todo_list', compact('all', 'working', 'complete'));
    }
}
