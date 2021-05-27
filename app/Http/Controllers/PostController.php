<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $data = array();
        $data['posts'] = Post::latest()->paginate(5);
        return view('index', $data);
    }
}
