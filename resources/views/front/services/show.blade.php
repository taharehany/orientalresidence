@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>{{ $single_service->title }}</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>{{ $single_service->title }}</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!--single service-->
<section class="gallery" dir="ltr">
   <!-- <div class="container">
      <div class="title">
         <h2>{{ $single_service->title }}</h2>
      </div>
   </div> -->
   <div class="container">
      <div class="gallery_carousel owl-carousel">
         <div class="single_item">
            <img src="{{ asset($single_service->image) }}" class="img-responsive" alt="">
         </div>
      </div>
   </div>
</section>

<section class="single-service">
   <div class="container">
      <div class="content">
         <div class="row">
            <div class="col-lg-7">
               <div class="services-details-content">
                  <div class="details">
                     <div class="ser-title">
                        <h3>{{ $single_service->title }}</h3>
                     </div>
                     <div class="text">
                        {!! $single_service->description !!}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="side-widget">
                  <div class="need-support">
                     <div class="ser-title">
                        <h3>الموقع الجغرافي</h3>
                     </div>
                     <iframe src="{{ $single_service->location }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
