@extends('front.layouts.master')
@section('title')

@endsection
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>الخدمات</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>الخدمات</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!-- services page -->
<section class="services" id="services" dir="rtl">
   <div class="container">
      <div class="title">
         <h2><b>غرف</b> أورينتال</h2>
      </div>
      <div class="services-contain">
         @foreach ($services as $service)
         <div class="row big-service">
            <div class="col-md-6 col-lg-6 col-xs-12 box">
               <div class="service-icon">
                  <img src="{{ $service->image }}" class="img-responsive" alt="">
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 box">
               <div class="service-box">
                  <div class="service-content">
                     <h2>{{ $service->title }}</h2>
                     <div class="des">{{ $service->description }}</div>
                     <div class="buttons">
                        <a href="#contact" class="btn btn-warning">احجز الآن</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<!-- services page -->

@endsection
