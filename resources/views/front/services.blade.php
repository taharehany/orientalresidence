@extends('front.layouts.master')
@section('title')

@endsection
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>مجموعة الفنادق</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>مجموعة الفنادق</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!-- services page -->
<section class="services" id="services" dir="rtl">
   <div class="container">
      <div class="title">
         <h2><b>مجموعة</b> الفنادق</h2>
      </div>
      <div class="services-contain">
         @foreach ($services as $service)
         <div class="row text-center big-service">
            <div class="col-md-6 col-lg-6 col-xs-12 p-0">
               <div class="service-icon">
                     <img src="{{ asset($service->image) }}" class="img-responsive" alt="">
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 p-0">
               <div class="service-box">
                     <div class="service-content">
                        <h2>{{ $service->title }}</h2>
                        <div class="des">{!! $service->description !!}</div>
                        <div class="buttons">
                           <a href="{{ route('front.services.show', $service->id) }}" class="btn btn-warning">معرفة المزيد</a>
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
