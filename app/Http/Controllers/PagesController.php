<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Dobrodosli u Laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);

    }
    public function about(){
        $title='O nama';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>'Usluge',
            'services'=>['Web Design','Programming','SEO']

        );
        return view('pages.services')->with($data);
    }
}
