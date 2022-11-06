@extends('front.layouts.master')
@section('title')
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-custom">
   <div class="container">
      <div class="title-page">
         <h3>تواصل معنا</h3>
      </div>
      <div class="list-pages">
         <ul class="list-inline">
            <li><a href="/">الرئيسية </a></li>
            <li>تواصل معنا</li>
         </ul>
      </div>
   </div>
</div>
<!-- breadcrumb -->

<!-- contact page -->
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
                     <p><i class="icofont-ui-call"></i> <a href="tel:{{ settings()->mobile1 }}">{{ settings()->mobile1 }}</a> </p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:{{ settings()->mobile2 }}">{{ settings()->mobile2 }}</a> </p>
                  </div>
                  <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:{{ settings()->mobile3 }}">{{ settings()->mobile3 }}</a> </p>
                  </div>
                  <!-- <div class="box">
                     <p><i class="icofont-ui-call"></i> <a href="tel:0138330307">0138330307</a> </p>
                  </div> -->
                  <!-- <div class="box">
                     <p><i class="icofont-brand-whatsapp"></i> <a href="https://wa.me/966551616801" target="_blank">+966551616801</a> | <a href="https://wa.me/966551930300" target="_blank">+966551930300</a></p>

                  </div> -->
                  <div class="box">
                     <p dir="rtl"><i class="icofont-location-pin"></i>{{ settings()->address }}</p>
                  </div>
                  <div class="box">
                     <p>
                        <i class="icofont-email"></i>
                        <a href="mailto:{{ settings()->email1 }}m">{{ settings()->email1 }}</a>
                     </p>
                     <p>
                        <i class="icofont-email"></i>
                        <a href="mailto:{{ settings()->email2 }}m">{{ settings()->email2 }}</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d256826.23199994833!2d50.192541346332796!3d26.355747469817917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x884acb75ef3b5501!2z2KfZhNiv2YXYp9mFINij2YjYsdmK2YbYqtin2YQg2YTZhNij2KzZhtit2Kkg2KfZhNmB2YbYr9mC2YrYqQ!5e0!3m2!1sar!2seg!4v1610190273949!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
</iframe>
<!-- contact page -->

@endsection
