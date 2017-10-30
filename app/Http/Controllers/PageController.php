<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Match;
use App\TopFive;
use App\Media;
use App\Newsletter;
use App\Social;
use App\Settings;

class PageController extends Controller
{
    public function index()
    {
        $matches = Match::latest()->get();
        $posts = Post::latest()->get();
        $socials = Social::latest()->get();
        $footballs = TopFive::orderBy('created_at', 'desc')->limit(5)->get();

        $sekcja_1 = Category::where('id', 2)->first();
        $posts_1 = $sekcja_1->posts()->limit(2)->get();

        $sekcja_2 = Category::where('id', 3)->first();
        $posts_2 = $sekcja_2->posts()->limit(4)->get();

        $sekcja_3 = Category::where('id', 4)->first();
        $posts_3 = $sekcja_3->posts()->limit(3)->get();

        $sekcja_4 = Category::where('id', 5)->first();
        $posts_4 = $sekcja_4->posts()->limit(4)->get();

        $sekcja_5 = Category::where('id', 6)->first();
        $posts_5 = $sekcja_5->posts()->limit(6)->get();

        $sekcja_6 = Category::where('id', 7)->first();
        $posts_6 = $sekcja_6->posts()->limit(2)->get();

        $sekcja_7 = Category::where('id', 8)->first();
        $posts_7 = $sekcja_7->posts()->limit(2)->get();

        $socials = Social::findOrFail(1);
        $settings = Settings::findOrFail(1);

        // $ch = curl_init();
        // curl_setopt( $ch, CURLOPT_URL, 'http://eapi.enetpulse.com/event/results/?sportFK=1&username=spacedigitalapiusr&token=56aefcab7b46aa9497e7ec06102a3e36' );
        // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        // $response = curl_exec( $ch );
        // curl_close( $ch );

        // #decode the json to object
        // $json = json_decode( $response );

        return view('welcome', compact('posts', 'matches', 'footballs', 'posts_1', 'posts_2', 'posts_3', 'posts_4', 'posts_5', 'posts_6', 'posts_7', 'socials', 'settings'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $socials = Social::findOrFail(1);
        $settings = Settings::findOrFail(1);
        return view('post', compact('post', 'socials', 'settings'));
    }

    public function postmatch($id)
    {
        $postmatch = Post::findOrFail($id);
        $socials = Social::findOrFail(1);
        $settings = Settings::findOrFail(1);
        return view('post-match', compact('postmatch', 'socials', 'settings'));
    }
     
}
