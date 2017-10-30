<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Settings;

class GetNewsletterController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_permission');
    }
    
    public function index()
    {
        $newsletters = Newsletter::latest()->get();
        $data = Newsletter::latest()->first();
        return view('cms.newsletter', compact('newsletters', 'data'));
    }

    public function viewSend()
    {
        return view('cms.send-newsletter');
    }

    public function send(Request $request)
    {

        $emails = Newsletter::latest()->get();

        $this->validate($request, [
            'subject' => 'required',], ['required' => 'Podaj temat wiadomości']
        );

        $subject = $request['subject'];
        $description = $request['description'];
        
        $data = array(
            'subject' => $subject,
            'description' => $description,
            'mail' => $emails,
        );  

        foreach ($emails as $mail) {
            Mail::send('cms.description-newsletter', $data, function($message) use($data, $mail) {
                $message->to($mail->email);
                $message->from('janis8403@gmail.com');
                $message->subject($data['subject']);
            });
        }

        Session::flash('send_newsletter', 'Wysłałeś poprawnie wiadomość do wszystkich subskrybentów');
        return redirect('get-newsletter');
    }

}
