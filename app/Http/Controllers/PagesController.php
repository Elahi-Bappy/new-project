<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PagesController extends Controllers
{
   public function home()
   {
    return view('home');
   }
   public function about()
   {
    return view('about');
   }
   public function contact()
   {
    return view('contact');
   }
}