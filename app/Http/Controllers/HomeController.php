<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Match;
use App\TopFive;
use App\Media;
use App\Newsletter;
use App\Settings;
use App\Social;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        $categories = Category::latest()->get();
        $settings = Settings::latest()->get();
        $socials = Social::latest()->get();
        $footballs = TopFive::latest()->get();
        $matches = Match::latest()->get();
        $media = Media::latest()->get();
        $newsletters = Newsletter::latest()->get();
        return view('cms.dashboard', compact('posts', 'categories', 'settings', 'socials', 'footballs', 'matches', 'media', 'newsletters'));
    }
}
