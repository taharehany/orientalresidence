<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index()
   {
      $about = Page::where('identifier', 'about')->first();

      return view('front.about', compact('about'));
   }
}
