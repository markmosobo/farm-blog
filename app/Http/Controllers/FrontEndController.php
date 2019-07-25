<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function stories(){
        return view('stories');
    }

    public function authorArchive(){
        return view('author-archive');
    }

    public function singleauthorArchive(){
        return view('single-author-archive');
    }

    public function storyCategories(){
        return view('story-categories');
    }

    public function singleStory(){
        return view('single-story');
    }
}
