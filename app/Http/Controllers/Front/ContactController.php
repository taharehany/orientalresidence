<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
      // $about = Page::where('identifier', 'about')->first();

      return view('front.contact');
   }
}
