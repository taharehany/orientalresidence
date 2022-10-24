@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('gallery.update',$data->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('put')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>العنوان</label>
                        <input class="form-control" type="text" name="title" placeholder="title" value="{{ old('title', $data->title) }}" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>الصورة</label>
                        <img class="preview" src="{{ asset($data->image) }}">
                        <input class="form-control" type="file" name="image" accept=".png, .jpg, .jpeg, .svg">
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

<script>
   var delete_route = "{{route('project.project_data_remove')}}"
</script>
@endsection
