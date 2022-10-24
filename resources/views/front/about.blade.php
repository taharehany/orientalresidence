@extends('front.layouts.master')
@section('title')
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>من نحن</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>من نحن</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!-- about page -->
<section class="about" id="about" dir="rtl">
   <div class="container">
      <div class="about-content text-right">
         <div class="bottom-part">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="image">
                     <img src="{{ $about->image }}" class="img-responsive" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="desc text-right">
                     <h2>{{ $about->title }}</h2>
                     <div>{{ $about->description }}</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- about page -->

@endsection
