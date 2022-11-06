@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--hero-->
<section class="hero" dir="rtl">
   <div class="motion">
      <span class="md_circle circle1">
         <i class="fas fa-utensils"></i>
      </span>
      <span class="bg_circle circle2">
         <i class="fas fa-hotel"></i>
      </span>
      <span class="md_circle circle3">
         <i class="fas fa-utensils"></i>
      </span>
      <span class="bg_circle circle4">
         <i class="fas fa-hotel"></i>
      </span>
      <span class="md_circle circle5">
         <i class="fas fa-utensils"></i>
      </span>
      <span class="sm_circle circle6">
         <i class="fas fa-shower"></i>
      </span>
      <span class="bg_circle circle7">
         <i class="fas fa-hotel"></i>
      </span>
      <span class="sm_circle circle8">
         <i class="fas fa-shower"></i>
      </span>
      <span class="md_circle circle9">
         <i class="fas fa-utensils"></i>
      </span>
      <span class="sm_circle circle10">
         <i class="fas fa-shower"></i>
      </span>
      <span class="md_circle circle11">
         <i class="fas fa-utensils"></i>
      </span>
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="text-side text-right">
               <h1> أورينتال <br><span class="diff-word">رزيدنس</span> </h1>
               <div class="the_content">
                  <p>{{ $hero->description }}</p>
               </div>
               <div class="buttons-side">
                  <a class="btn btn-warning" href="{ route('services') }}">تصفح الفنادق</a>
                  <a class="btn btn-outline-warning" href="{ route('contact') }}">تواصل معنا</a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="img-side">
               <img src="{{ $hero->image }}" class="img-responsive" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!--hero-->

<!-- about -->
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
                     <div class="buttons">
                        <a href="{{ route('about') }}" class="btn btn-warning">المزيد عنا</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- about -->

<!-- services -->
<section class="services" id="services" dir="rtl">
    <div class="container">
        <div class="title">
            <h2><b>مجموعة </b> الفنادق</h2>
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
<!-- services -->

<!-- gallery -->
<section class="gallery" dir="ltr">
   <div class="container">
      <div class="title">
         <h2><b>معرض</b> الصور</h2>
      </div>
   </div>
   <div class="container-fluid">
      <div class="gallery_carousel owl-carousel">
         @foreach ($gallery as $single_gallery)
         <div class="single_item">
            <img src="{{ $single_gallery->image }}" class="img-responsive" alt="">
         </div>
         @endforeach
      </div>
      <div class="buttons">
         <a href="" class="btn btn-warning">المزيد من الصور</a>
      </div>
   </div>
</section>
<!-- gallery -->

<!-- contact -->
<section class="contact" id="contact" dir="rtl">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12 col-lg-6">
            <div class="contact-form">
               <h3>تواصل معنا عبر البريد الإلكتروني:</h3>
               <form id="contactForm1" action="send.php" method="post">
                  <div class="row align-items-center">
                     <div class="col-sm-12 col-md-6 col-xs-6">
                        <div class="form-group">
                           <input name="name" type="text" class="form-control" required placeholder="الإسم">
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xs-6">
                        <div class="form-group">
                           <input name="phone" type="tel" class="form-control" placeholder="رقم الهاتف">
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                           <input name="email" type="email" class="form-control" required placeholder="الإيميل">
                        </div>
                     </div>
                     <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                           <textarea name="message" class="form-control" rows="4" placeholder="الرسالة"></textarea>
                        </div>
                     </div>
                     <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-warning">أرسل الآن</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-12 col-lg-6">
            <div class="info">
               <div class="info-content">
                  <h2>معلومات التواصل:</h2>
                  <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:+966138290143">+966138290143</a> </p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:+966551930300">+966551930300</a> </p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:+966551616801">+966551616801</a> </p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-brand-whatsapp"></i> <a href="https://wa.me/966551616801" target="_blank">+966551616801</a> | <a href="https://wa.me/966551930300" target="_blank">+966551930300</a></p>

                  </div>
                  <div class="box">
                     <p dir="rtl"><i class="icofont-location-pin"></i> المملكة العربية السعودية الدمام-حي
                        الفاخرية- شارع
                        عمر بن الخطاب</p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-email"></i><a href="mailto:oriental.residence.dm@gmail.com">oriental.residence.dm@gmail.com</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- contact -->

@endsection
