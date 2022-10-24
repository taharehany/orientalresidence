<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit()
   {
      $data = Page::where('identifier', 'about')->first();
      return view('admin.about.edit', compact('data'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request)
   {
      $data = $request->all();
      $general = Page::where('identifier', 'about')->first();

      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         $data['image'] = $general->image;
      }

      $general->update($data);

      return $general ? redirect(route('about.edit'))->with(['success' => 'تم تعديل بنجاح']) : redirect()->back();
   }
}
