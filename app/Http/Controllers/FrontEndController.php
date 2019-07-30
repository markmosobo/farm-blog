<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Author;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $stories=Story::all();
        return view('index',['stories'=>$stories]);
    }

    public function about(){
        $abouts=About::all();
        return view('about',['abouts'=>$abouts]);
    }

    public function contact(){
        return view('contact');
    }

    public function stories(){
        $stories=Story::orderByDesc('story_date');
        return view('allstories',['stories'=>$stories]);
    }

    public function authorArchive(){
        return view('author-archive',['authors'=>Author::all()]);
    }

    public function singleauthorArchive($id){
        $author=Author::find($id);
        return view('single-author-archive')->withAuthor($author);
    }

    public function storyCategories(){
        return view('story-categories');
    }

    public function singleStory($id){
        $story=Story::find($id);
        return view('single-story')->withStory($story);
    }
}
