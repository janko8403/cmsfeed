<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Social;
use Session;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }

    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        $socials = Social::latest()->get();
        return view('cms.categories', compact('categories', 'socials'));
    }

    
    public function create()
    {
        $socials = Social::latest()->get();
        return view('cms.new-category', compact('socials'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'], [
            'required' => 'To pole jest wymagane']
        );

        $name = $request['name'];
        $slug = $request['name'];
       
        $post = new Category();
        $post->name = $name;
        $post->slug = str_slug($slug, '-');
        $post->save();

        Session::flash('cat_created', 'Kategoria dodana poprawnie');
        return redirect('/categories');
    }


    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('cms.edit-category', compact('categories'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
            ], [
            'required' => 'Pole jest wymagane']
        );

        $post = Category::findOrFail($id);
        $post->name = $request->name;
        $post->slug = str_slug($request->name, '-');
        $post->save();

        return redirect('/categories');
    }

    
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        Session::flash('cat_destroy', 'Kategoria usunięta poprawnie');
        return redirect('/categories');
    }
}
