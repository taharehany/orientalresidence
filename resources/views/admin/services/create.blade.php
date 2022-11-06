@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>العنوان</label>
                        <input class="form-control" type="text" name="title" placeholder="العنوان" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>التفاصيل</label>
                        <textarea name="description" id="editor1" rows="10" cols="80"></textarea>
                        <script>
                           CKEDITOR.replace('editor1');
                        </script>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>الموقع الجغرافي</label>
                        <textarea class="form-control" name="location" rows="5"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>الصورة</label>
                        <input class="form-control" type="file" name="image" accept=".png, .jpg, .jpeg, .svg" required="" multiple>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-btn">
                        <button class="btn btn-primary hvr-sweep-to-top" type="submit">حفظ المتغيرات</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
