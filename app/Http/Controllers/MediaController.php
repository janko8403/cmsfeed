<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Media;
use Session;

class MediaController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }

    public function index()
    {
        $media = Media::orderBy('id', 'desc')->get();
        return view('cms.media', compact('media'));
    }

    public function create()
    {
        return view('cms.new-media');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
        ]);

        $media = new Media();
        if ($request->file('images')) {
            $media_images_path = 'public/media/img';
            $upload_path = $request->file('images')->store($media_images_path);
            $images_filename = str_replace($media_images_path . '', '', $upload_path);
            $media->images = $images_filename;
        }

        $media->save();

        Session::flash('media_created', 'Obraz dodany poprawnie');
        return view('cms.new-media');
    }

    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('cms.show-media', compact('media'));
    }

    public function destroy($id)
    {
        $media = Media::find($id);
        $media->delete();

        Session::flash('media_destroy', 'Obraz usunięty poprawnie');
        return back();
    }
}
