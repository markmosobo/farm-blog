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
        $stories=Story::all();
        return view('allstories',['stories'=>$stories]);
    }

    public function authorArchive(){
        return view('author-archive',['authors'=>Author::all()]);
    }

    public function singleauthorArchive($id){
        $author=Author::find($id);
        return view('single-author-archive')->withAuthor($author);
    }

    public function natureCategories(){
        $stories=Story::all();
        return view('nature-story-categories',['stories'=>$stories]);
    }

    public function travelCategories(){
        $stories=Story::all();
        return view('travel-story-categories',['stories'=>$stories]);
    }

    public function lifestyleCategories(){
        $stories=Story::all();
        return view('lifestyle-story-categories',['stories'=>$stories]);
    }

    public function musicCategories(){
        $stories=Story::all();
        return view('music-story-categories',['stories'=>$stories]);
    }

    public function videoCategories(){
        $stories=Story::all();
        return view('video-story-categories',['stories'=>$stories]);
    }

    public function adventureCategories(){
        $stories=Story::all();
        return view('adventure-story-categories',['stories'=>$stories]);
    }

    public function singleStory($id){
        $story=Story::find($id);
        $author=Author::find($id);
        return view('single-story')->withStory($story)->withAuthor($author);
    }
}
