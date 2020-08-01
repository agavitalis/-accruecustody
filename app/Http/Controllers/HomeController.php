<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function media(){
        return view('media');
    }

    public function contact(){
        return view('contact');
    }

    public function accident(){
        return view('accident');
    }

    public function author(){
        return view('author');
    }

    public function bail(){
        return view('bail');
    }

    public function clients(){
        return view('clients');
    }

    public function team(){
        return view('team');
    }

    public function loan(){
        return view('loan');
    }

    public function history(){
        return view('history');
    }

    public function expertise(){
        return view('expertise');
    }

    public function facts(){
        return view('facts');
    }

    public function faq(){
        return view('faq');
    }

    public function fraud(){
        return view('fraud');
    }
    
}
