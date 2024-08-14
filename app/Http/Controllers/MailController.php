<?php

namespace App\Http\Controllers;

use App\Mail\Mailaka;
use App\Models\Logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function mailaka($id,Request $req)
    {
        $this->validate($req,[
            "Nom"=>"required",
            "Prenom"=>"required",
            "Email"=>'required|email',
            "Phone"=>'required|integer',
            "Message"=>'required'
        ]);

        $logement = Logement::find($id);
        $to_email = 'mhjrktv@gmail.com';
        $title = 'Nouvel e-mail concernant le bien :';
        $content = 'Ceci est de '.$req->input('Nom').' '.$req->input('Prenom');
        $phone = $req ->input('Phone');
        $mail = $req ->input('Email');
        $someso = $req ->input('Message');
        if (Session::has("user")) {
            Mail::to($to_email)->send(new Mailaka($id,$title,$content,$someso,$phone,$mail));
            return back()->with('success','Votre Email a bien été envoyé');
        }else {
            return to_route('signin')->with("errors","vous devriez etre membre");
        }
    }
}
