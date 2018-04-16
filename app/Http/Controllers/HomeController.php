<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Album;
use App\Mentor;
use App\News;
use App\Photo;
use App\Review;
use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $achievements = Achievement::orderBy('id', 'DESC')->limit('4')->get();
        $mentors = Mentor::orderBy('id', 'DESC')->limit('4')->get();
        $news = News::orderBy('id', 'DESC')->limit('2')->get();
        $reviews = Review::where('active', '1')->orderBy('id', 'DESC')->limit('2')->get();
        $albums = Album::orderBy('id', 'DESC')->limit('4')->get();


        return view('index', [
            'achievements' => $achievements,
            'mentors' => $mentors,
            'news' => $news,
            'reviews' => $reviews,
            'albums' => $albums,
        ]);
    }

    public function callback(Request $request)
    {
        $callback = new Review;

        $callback->name = $request->name;
        $callback->type = $request->type;
        $callback->comment = $request->comment;

        $callback->save();

        return back();
    }

    public function getAlbum($id)
    {
        $photos = Photo::where('album_id', $id)->orderBy('id', 'DESC')->get();
        $album = Album::find($id);

        return view('album', [
            'photos' => $photos,
            'album' => $album,
        ]);
    }
}
