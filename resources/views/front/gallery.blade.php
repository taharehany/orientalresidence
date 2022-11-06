@extends('front.layouts.master')
@section('title')

@endsection
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>معرض الصور</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>معرض الصور</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!-- gallery page -->
<section id="portfolio" class="section-padding" dir="rtl">
    <!-- Container Starts -->
    <div class="container">
        <div class="row">
            @foreach ($gallery as $single_gallery)
            <div class="col-lg-6 col-md-6 col-xs-12 mix">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                     <img src="{{ $single_gallery->image }}" class="img-responsive" alt="">
                    </div>
                    <div class="portfoli-content">
                        <div class="sup-desc-wrap">
                            <div class="sup-desc-inner">
                                <div class="sup-meta-wrap">
                                    <h4 class="sup-title">{{ $single_gallery->title }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- gallery page -->

@endsection
