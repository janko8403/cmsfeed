<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Session;
use App\Settings;
use App\Social;

class NewsletterController extends Controller
{
    
    public function index()
    {
        $socials = Social::findOrFail(1);
        $settings = Settings::findOrFail(1);
        return view('page.newsletter', compact('settings', 'socials'));
    }

    public function newsletterSend(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:40|unique:newsletters'], [
            'required' => 'Taki mail już istnieje w bazie']
        );

        $code = str_random(40);

        $data = array(
            'email' => $request->email,
            'subject' => 'NewsFeed - 20017',
            'code' => $code,
        );    

        Mail::send('page.emails.newsletterNew', $data, function($message) use($data) {
            $message->to('janis8403@gmail.com');
            $message->from('janis8403@gmail.com');
            $message->subject($data['subject']);
        });

        Mail::send('page.emails.newsletterUser', $data, function($message) use($data) {
            $message->to($data['email']);
            $message->from('janis8403@gmail.com');
            $message->subject($data['subject']);
        }); 

        $news = new Newsletter();
        $news->email = $request->input('email');
        $news->code = $code;
        $news->save();

        Session::flash('save_newsletter', 'Zapisałeś się do newslettera');
        return redirect('newsletter');
    }

    public function newsletterDelete($code)
    {
        $users = DB::table('newsletters')->where('code',$code)->get();

        foreach ($users as $user) {
        }

        $data = array(
            'email' => $user->email,
            'subject' => 'NewsFeed - 20017',
        );    

        Mail::send('page.emails.newsletterDelete', $data, function($message) use($data) {
            $message->to('janis8403@gmail.com');
            $message->from('janis8403@gmail.com');
            $message->subject($data['subject']);
        });
        newsletter::where('code', $code)->delete();

        return view('page.pageDelete');
    }    


}
