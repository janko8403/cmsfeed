<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Media;
use App\Category;
use App\User;
use App\Social;
use Session;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }
    
    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::orderBy('id', 'desc')->get();
        // $socials = Social::latest()->get();

        return view('cms.posts', compact('posts', 'socials'));
    }

    
    public function create()
    {
        $categories = Category::latest()->get();
        $media = Media::latest()->get();
        // $socials = Social::latest()->get();
        return view('cms.new-post', compact('categories', 'socials', 'media'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'short_description' => 'required',], [
            'required' => 'To pole jest wymagane']
        );

        $name = $request['name'];
        $slug = $request['name'];
        $short_description = $request['short_description'];
        $author = $request['author'];
        $description = $request['description'];
        $title_seo = $request['title_seo'];
        $key_seo = $request['key_seo'];
        $description_seo = $request['description_seo'];

       
        $post = new Post();
        $post->name = $name;
        $post->slug = str_slug($slug, '-');
        $post->short_description = $short_description;
        $post->author = $author;
        $post->description = $description;
        $post->title_seo = $title_seo;
        $post->key_seo = $key_seo;
        $post->description_seo = $description_seo;

        if ($request->file('images')) {
            $post_images_path = 'public/post/' . str_slug($request['name'], '-') . '/img';
            $upload_path = $request->file('images')->store($post_images_path);
            $images_filename = str_replace($post_images_path . '', '', $upload_path);
            $post->images = $images_filename;
        }

        $post->save();

        // $gal_ids = $request['GalList'];
        // if (!empty($gal_ids)) 
        // {
        //     $post->media()->attach($gal_ids);
        // } 
        

        $cat_ids = $request['CategoryList'];
        if (!empty($cat_ids)) 
        {
            $post->categories()->attach($cat_ids);
        } 
        else 
        {
            $post->categories()->attach('1');
        }

        Session::flash('post_created', 'Wpis dodany poprawnie');
        return redirect('/posts');
    }

    public function edit($id)
    {
        
        $post = Post::findOrFail($id);
        $categories = Category::orderBy('id', 'asc')->get();
        $media = Media::latest()->get();
        return view('cms.edit-post', compact('post', 'categories', 'media'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:1'
            ], [
            'required' => 'Pole jest wymagane',
            'min' => "Min 1 znaków"]
        );

        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->slug = str_slug($request->name, '-');
        $post->short_description = $request->short_description;
        $post->author = $request->author;
        $post->description = $request->description;
        $post->title_seo = $request->title_seo;
        $post->key_seo = $request->key_seo;
        $post->description_seo = $request->description_seo;

        if ($request->file('images')) {
            $post_images_path = 'public/post/' . str_slug($request->name, '-') . '/img';
            $upload_path = $request->file('images')->store($post_images_path);
            $images_filename = str_replace($post_images_path . '', '', $upload_path);
            $post->images = $images_filename;
        }

        $post->save();

        if ($request['CategoryList']) 
        {
            $cat_ids = $request['CategoryList'];
            $post->categories()->sync($cat_ids);
        }
        
        return back();
    }

    
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('post_destroy', 'Wpis usunięty poprawnie');
        return redirect('/posts');
    }
}
