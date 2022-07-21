<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Home extends BaseController
{
    public function index()
    {
        $news = new NewsModel();

        $data = [
            'title' => 'Home'
        ];
        return view('welcome_message', $data);
    }
}
