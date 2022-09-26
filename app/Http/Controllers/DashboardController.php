<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function show(Post $post)
    {
        return view('dashboard.user.index', [
            "title" => "Lihat Data",
            "posts" => Post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('dashboard.user.detail', [
            "title" => "Detail Data",
            "post" => $post
        ]);
    }
}
