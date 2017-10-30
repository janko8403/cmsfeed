<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Social;
use Session;

class SocialController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin_permission');
    }

    public function edit($id)
    {
        $socials = Social::findOrFail($id);
        return view('cms.social', compact('socials'));
    }

    public function update(Request $request, $id)
    {

        $socials = Social::findOrFail($id);
        $socials->facebook = $request->facebook;
        $socials->instagram = $request->instagram;
        $socials->twitter = $request->twitter;
        $socials->youtube = $request->youtube;
        
        $socials->save();

        Session::flash('socials_created', 'Zmiany zapisane poprawnie');
        return redirect('/social/1/edit');
    }
}
