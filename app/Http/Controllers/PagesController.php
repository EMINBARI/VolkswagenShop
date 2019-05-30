<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\CarModel;

class PagesController extends Controller
{
    public function index(){
        
        //return view('pages.index', compact('title'));
        //or we can use this below
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function models(){
        return view('pages.models');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web developer', 'Web design', 'Teamlead']
        );
        return view('pages.services')->with($data);
    }

    public function technologies(){
        $title = 'technologies';
        return view('pages.technologies')->with('title',$title);
        
    }

    
}
