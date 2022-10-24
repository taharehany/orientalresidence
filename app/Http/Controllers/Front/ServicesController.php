<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        //services
        $services = Service::orderBy('id', 'DESC')->get();

        return view('front.services', compact('services'));
    }
    public function show($id)
    {
        $single_service = Service::findorfail($id);

        return view('front.services.show', compact('single_service'));
    }
}
