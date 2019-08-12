<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Author;
use App\Models\Quote;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('index',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function about(){
        $abouts=About::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('about',[
            'abouts'=>$abouts,
            'recentstories'=>$recentstories
        ]);
    }

    public function contact(){
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('contact',['recentstories'=>$recentstories]);
    }

    public function stories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('allstories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function authorArchive(){
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('author-archive',[
            'authors'=>Author::all(),
            'recentstories'=>$recentstories
            ]);
    }

    public function singleauthorArchive($id){
        $author=Author::find($id);
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('single-author-archive',['recentstories'=>$recentstories])->withAuthor($author);
    }

    public function natureCategories(){
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        $stories=Story::all();
        return view('nature-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function travelCategories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('travel-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function lifestyleCategories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('lifestyle-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function musicCategories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('music-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
            ]);
    }

    public function videoCategories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('video-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function adventureCategories(){
        $stories=Story::all();
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('adventure-story-categories',[
            'stories'=>$stories,
            'recentstories'=>$recentstories
        ]);
    }

    public function singleStory($id){
        $story=Story::find($id);
        $author=Author::find($id);
        $recentstories=Story::orderByRaw("RAND()")->take(2)->get();
        return view('single-story',[
            'quotes'=>Quote::orderByRaw("RAND()")->take(1)->get(),
            'recentstories'=>$recentstories
        ])->withStory($story)->withAuthor($author);
    }
}
