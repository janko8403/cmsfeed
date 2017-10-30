<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Match;
use App\User;
use Session;

class MatchController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_editor_permission');
    }
    
    public function index()
    {
        $matches = Match::latest()->get();
        return view('cms.match', compact('matches'));
    }

    
    public function create()
    {
        $matches = Match::latest()->get();
        return view('cms.new-match', compact('matches'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $title = $request['title'];
        $slug = $request['title'];
        $league_id = $request['league_id'];
        $first_name = $request['first_name'];
        $second_name = $request['second_name'];
        $first_score = $request['first_score'];
        $second_score = $request['second_score'];
        $author = $request['author'];
        $short_description = $request['short_description'];
        $description = $request['description'];
        $title_seo = $request['title_seo'];
        $key_seo = $request['key_seo'];
        $description_seo = $request['description_seo'];

       
        $match = new Match();
        $match->title = $title;
        $match->slug = str_slug($slug, '-');
        $match->first_name = $first_name;
        $match->league_id = $league_id;
        $match->second_name = $second_name;
        $match->first_score = $first_score;
        $match->second_score = $second_score;
        $match->author = $author;
        $match->short_description = $short_description;
        $match->description = $description;
        $match->title_seo = $title_seo;
        $match->key_seo = $key_seo;
        $match->description_seo = $description_seo;

        if ($request->file('first_club')) {
            $match_first_club_path = 'public/match/' . str_slug($request['title'], '-') . '/img';
            $upload_path = $request->file('first_club')->store($match_first_club_path);
            $first_club_filename = str_replace($match_first_club_path . '', '', $upload_path);
            $match->first_club = $first_club_filename;
        }

        if ($request->file('second_club')) {
            $match_second_club_path = 'public/match/' . str_slug($request['title'], '-') . '/img';
            $upload_path = $request->file('second_club')->store($match_second_club_path);
            $second_club_filename = str_replace($match_second_club_path . '', '', $upload_path);
            $match->second_club = $second_club_filename;
        }

        $match->save();

        Session::flash('match_created', 'Wpis dodany poprawnie');
        return redirect('/match');
    }

    public function edit($id)
    {
        $match = Match::findOrFail($id);
        return view('cms.edit-match', compact('match'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $match = Match::findOrFail($id);
        $match->title = $request->title;
        $match->slug = str_slug($request->title, '-');
        $match->first_name = $request->first_name;
        $match->league_id = $request->league_id;
        $match->second_name = $request->second_name;
        $match->first_score = $request->first_score;
        $match->second_score = $request->second_score;
        $match->author = $request->author;
        $match->short_description = $request->short_description;
        $match->description = $request->description;
        $match->title_seo = $request->title_seo;
        $match->key_seo = $request->key_seo;
        $match->description_seo = $request->description_seo;

        if ($request->file('first_club')) {
            $match_first_club_path = 'public/match/' . str_slug($request['title'], '-') . '/img';
            $upload_path = $request->file('first_club')->store($match_first_club_path);
            $first_club_filename = str_replace($match_first_club_path . '', '', $upload_path);
            $match->first_club = $first_club_filename;
        }

        if ($request->file('second_club')) {
            $match_second_club_path = 'public/match/' . str_slug($request['title'], '-') . '/img';
            $upload_path = $request->file('second_club')->store($match_second_club_path);
            $second_club_filename = str_replace($match_second_club_path . '', '', $upload_path);
            $match->second_club = $second_club_filename;
        }

        $match->save();

        return back();
    }

    
    public function destroy($id)
    {
        $match = Match::find($id);
        $match->delete();

        Session::flash('match_destroy', 'Mecz usunięty poprawnie');
        return redirect('/match');
    }
}
