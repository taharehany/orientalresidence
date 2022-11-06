<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $hero = Page::where('identifier', 'hero')->first();
      $about = Page::where('identifier', 'about')->first();
      $gallery = Gallery::paginate(6);
      $services = Service::orderBy('id', 'DESC')->get();

      return view('front.index', compact('about', 'hero', 'gallery', 'services'));
   }
}
