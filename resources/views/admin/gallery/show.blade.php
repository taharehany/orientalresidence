@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form show-page">
            <form>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>العنوان</label>
                        <input class="form-control" type="text" name="title" placeholder="" value="{{ old('title', $data->title) }}" readonly>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>الصورة</label>
                  <div class="row">
                     <div class="col-3 box">
                        <img class="img-fluid box-image" src="{{ asset($data->image) }}" alt="alt">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
