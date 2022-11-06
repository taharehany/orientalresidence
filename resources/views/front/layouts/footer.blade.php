<footer class="footer" dir="rtl">
   <div class="container">
      <div class="footer-top text-right">
         <div class="row section">
            <div class="footer-widget col-lg-5 col-md-12 col-xs-12 wow fadeIn">
               <h3 class="small-title">
                  <img class="light img-fluid" src="{{ asset(settings()->logo) }}" alt="alt">
               </h3>
               <p>يتميز أورينتال رزيدنس بتشكيله متنوعه من الغرف الفندقية والاجنحه المصممه على أعلى درجه من الدقه فى
                  التصميم لتناسب كافة احتياجات النزلاء وبمساحات مختلفة تشعرهم بالراحة والرحابه</p>
               <div class="social-footer">
                  <a href="https://www.facebook.com/Oriental-Residence-106018914634156"><i class="fa fa-facebook icon-round"></i></a>
                  <a href="https://twitter.com/OrientalReside1"><i class="fa fa-twitter icon-round"></i></a>
                  <a href="https://www.snapchat.com/add/orientalresiden"><i class="fa fa-snapchat icon-round"></i></a>
                  <a href="https://www.instagram.com/oriental.residence/"><i class="fa fa-instagram icon-round"></i></a>
               </div>
            </div>

            <div class="footer-widget col-lg-3 col-md-12 col-xs-12 wow fadeIn" data-wow-delay=".2s">
               <h3 class="small-title">خريطة الموقع</h3>
               <ul class="menu">
                  <li><a href="/">الرئيسية</a></li>
                  <li><a href="{{ route('about') }}">من نحن</a></li>
                  <li><a href="{{ route('services') }}">الفنادق</a></li>
                  <li><a href="{{ route('gallery') }}">معرض الصور</a></li>
                  <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
               </ul>
            </div>

            <div class="footer-widget col-lg-4 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
               <h3 class="small-title">معلومات التواصل</h3>
               <div class="contact">
                     <p> <i class="fa fa-map"></i>المملكة العربية السعودية، الرياض</p>
                     <p> <i class="fa fa-phone"></i><a href="tel:{{ settings()->mobile1 }}" data-ur1313m3t="true">{{ settings()->mobile1 }}</a></p>
                     <p> <i class="fa fa-envelope"></i><a href="mailto:{{ settings()->email1 }}" data-ur1313m3t="true">{{ settings()->email1 }}</a></p>
                  </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Copyright -->
   <div id="copyright">
      <div class="container">
         <p class="copyright-text text-center">جميع الحقوق محفوظة &copy; 2022 | تم التصميم بواسطة <a rel="nofollow" href="">&hearts;</a>
         </p>
      </div>
   </div>
</footer>

<!--scripts-->
<script type='text/javascript' src="{{ asset('front/js/jquery.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/jquery.mixitup.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
