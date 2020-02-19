<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //to send data(variables) from controller to views to make display for this data(one var. or array)
        // for one data use compact function, with array use ->with
        $object = "all data";
        return view('pages.index',compact('object'));
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = [
            'title' => 'services are provides: ',
            'programming' => [
                'c++','js','webdesign'
            ]
        ];
        return view('pages.services')->with($data);
    }
}
