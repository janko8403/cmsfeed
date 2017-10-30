<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Social;
use Session;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_permission');
    }

    public function show($id)
    {
        $settings = Settings::findOrFail($id);
        return view('cms/settings', compact('settings'));
    }

    public function edit($id)
    {
        $settings = Settings::findOrFail($id);
        return view('cms/edit-settings', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:1'
            ], [
            'required' => 'Pole jest wymagane',
            'min' => "Min 1 znaków"]
        );

        $setting = Settings::findOrFail($id);
        $setting->title = $request->title;
        $setting->copyright = $request->copyright;

        // dd($setting);

        if ($request->file('favicon')) {
            $post_images_path = 'public/setting/' . $request->title . '/img';
            $upload_path = $request->file('favicon')->store($post_images_path);
            $images_filename = str_replace($post_images_path . '', '', $upload_path);
            $setting->favicon = $images_filename;
        }

        $setting->save();

        Session::flash('settings_updated', 'Ustawienia zapisane poprawnie');
        return redirect('/settings/1');
    }

}
