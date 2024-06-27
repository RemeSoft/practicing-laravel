<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return "Home Page";
    }
    public function post($id){
        return "Post :".$id;
    }
    public function about(){
        return "About Page";
    }
}
