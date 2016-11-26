<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LandingController extends Controller
{
    //
    public function index(){
    	return view('landing.index');
    }

    public function about(){
    	return view('landing.about');
    }

    public function projects(){
    	return view('landing.projects');
    }

    public function systems(){
    	return view('landing.services.systems');
    }

    public function erp(){
        return view('landing.services.erp');
    }

    public function app(){
        return view('landing.app');
    }
}
