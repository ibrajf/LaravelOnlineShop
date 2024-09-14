<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function viewhomepage(){
        return view('client.home');
    }

    public function viewaboutpage(){
        return view('client.about');
    }

    public function viewfaqpage(){
        return view('client.faq');
    }
}
