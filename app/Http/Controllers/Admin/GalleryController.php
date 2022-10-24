<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $data = Gallery::all();
      return view('admin.gallery.index', compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.gallery.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $data = $request->all();
      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         unset($data['image']);
      }

      $general = Gallery::create($data);

      return $general ? redirect(route('gallery.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $data = Gallery::findorfail($id);
      return view('admin.gallery.show')->with(compact('data'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $data = Gallery::findOrfail($id);
      return view('admin.gallery.edit', compact('data'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $data = $request->all();
      $general = Gallery::where('id', $id)->first();
      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         $data['image'] = $general->image;
      }

      $general->update($data);

      return redirect()->back();
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $general = Gallery::findOrFail($id);
      $general->delete();
      return redirect(route('gallery.index'))->with(['success' => 'Deleted']);
   }
}
