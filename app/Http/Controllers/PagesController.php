<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to shopping';
        //return view('pages.index','title');
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services!',
            'services' => ['Web design', 'Graphic design', 'SEO']
        );
        return view('pages.services') -> with($data);
    }
}
