<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     // Home
     public function home()
     {

         // Return the view with the necessary data
         return view('frontend.index', [

         ]);
     }
     
}
