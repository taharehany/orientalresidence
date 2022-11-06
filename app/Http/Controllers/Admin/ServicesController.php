<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectDetails;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $data = Service::all();
      return view('admin.services.index', compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.services.create');
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
   //    if ($request->hasFile('images')) {
   //       $images = $request->file('images');
   //       foreach ($images as $image) {
   //           $image = upload_image($image, 'images_');
   //           $services_images = new ProductImage();
   //           $services_images->image = $image;
   //           $services_images->product_id = $service->id;
   //           $services_images->save();
   //       }
   //   }

      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         unset($data['image']);
      }

      $general = Service::create($data);

      return $general ? redirect(route('services.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $data = Service::findorfail($id);
      return view('admin.services.show')->with(compact('data'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $data = Service::findOrfail($id);
      return view('admin.services.edit', compact('data'));
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
      $general = Service::where('id', $id)->first();
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
      $general = Service::findOrFail($id);
      $general->delete();
      return redirect(route('services.index'))->with(['success' => 'Deleted']);
   }
}
