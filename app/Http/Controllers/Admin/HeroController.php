<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class HeroController extends Controller
{
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit()
   {
      $data = Page::where('identifier', 'hero')->first();
      return view('admin.hero.edit', compact('data'));
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
      $general = Page::where('identifier', 'hero')->first();

      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         $data['image'] = $general->image;
      }

      $general->update($data);

      return $general ? redirect(route('hero.edit'))->with(['success' => 'تم تعديل بنجاح']) : redirect()->back();
   }
}
