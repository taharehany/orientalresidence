<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
   public function index()
   {
       $gallery = Gallery::orderBy('id', 'DESC')->get();

       return view('front.gallery', compact('gallery'));
   }
}
