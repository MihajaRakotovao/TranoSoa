<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Logement;
use App\Models\Message;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function home() {
        $AllLogement = Logement::all();
        $logement = Logement::orderBy('created_at', 'desc')->limit(6)->get();
        $message = Message::orderBy('id','desc')->limit(4)->get();
        return view('index',compact('logement','AllLogement','message'));
    }
    public function about() {
        return view('viewUsers/about');
    }
    public function admin() {
        return view('viewAdmin/indexAdmin');
    }
    public function category() {
        return view('viewUsers/category');
    }
    public function signin() {
        return view("viewUsers/inscription");
    }
    public function login() {
        return view("viewUsers/connexion");
    }
    public function membre() {
        return view("viewUsers.membre");
    }
    /* U S E R S P A C E */
    public function connexion() {
        return view('viewUsers/connexion');
    }
    public function inscription () {
        return view('viewUsers/inscription');
    }
}
