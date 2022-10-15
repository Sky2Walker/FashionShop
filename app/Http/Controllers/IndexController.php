<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // главная страница
    public function index(){
        return view('home.index');
    }


    // про нас
    public  function about(){
        return view('home.about-us');
    }


    //связь
    public function contact(){
        return view('home.contact');
    }


}
