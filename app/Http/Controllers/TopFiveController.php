<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\TopFive;
use Session;

class TopFiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }
    

    public function index()
    {
        $footballs = TopFive::orderBy('created_at', 'desc')->get();
        return view('cms.topfive', compact('footballs'));
    }

    public function create()
    {
        return view('cms.new-football');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'football_club' => 'required'
        ]);

        $name = $request['name'];
        $football_club = $request['football_club'];
        
        $football = new TopFive();
        $football->name = $name;
        $football->football_club = $football_club;

        if ($request->file('images')) {
            $football_images_path = 'public/top/' . $request['name'] . '/img';
            $upload_path = $request->file('images')->store($football_images_path);
            $images_filename = str_replace($football_images_path . '', '', $upload_path);
            $football->images = $images_filename;
        }

        $football->save();

        Session::flash('football_created', 'Zawodnik dodany poprawnie');
        return redirect('top-five');
    }

    public function edit($id)
    {
        $football = TopFive::findOrFail($id);
        return view('cms.edit-football', compact('football'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'football_club' => 'required'], [
            'required' => 'Pole jest wymagane']
        );

        $football = TopFive::findOrFail($id);
        $football->name = $request->name;
        $football->football_club = $request->football_club;

        if ($request->file('images')) {
            $football_images_path = 'public/top/' . $request->name . '/img';
            $upload_path = $request->file('images')->store($football_images_path);
            $images_filename = str_replace($football_images_path . '', '', $upload_path);
            $football->images = $images_filename;
        }

        $football->save();
        return back();
    }

    
    public function destroy($id)
    {
        $football = TopFive::find($id);
        $football->delete();

        Session::flash('football_destroy', 'Zawodnik usunięty poprawnie');
        return redirect('top-five');
    }
}
