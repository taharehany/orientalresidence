<footer class="footer" dir="rtl">
   <div class="container">
      <div class="footer-top text-right">
         <div class="row section">
            <div class="footer-widget col-lg-5 col-md-12 col-xs-12 wow fadeIn">
               <img class="light img-fluid" style="max-width: 160px;" src="{{ asset(settings()->logo) }}" alt="alt">
               <p>يتميز أورينتال رزيدنس بتشكيله متنوعه من الغرف الفندقية والاجنحه المصممه على أعلى درجه من الدقه فى
                  التصميم لتناسب كافة احتياجات النزلاء وبمساحات مختلفة تشعرهم بالراحة والرحابه</p>
               <div class="social-footer">
                  <a href="{{ settings()->facebook }}"><i class="fa fa-facebook icon-round"></i></a>
                  <a href="{{ settings()->twitter }}"><i class="fa fa-twitter icon-round"></i></a>
                  <a href="{{ settings()->snapchat }}"><i class="fa fa-snapchat icon-round"></i></a>
                  <a href="{{ settings()->instagram }}"><i class="fa fa-instagram icon-round"></i></a>
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
                  <p> <i class="fa fa-map"></i>{{ settings()->address }}</p>
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
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            instagram: "oriental.residence", // Instagram username
            whatsapp: "{{ settings()->whatsapp }}", // WhatsApp number
            call_to_action: "راسلنا", // Call to action
            button_color: "#E74339", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "instagram,whatsapp", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<!--scripts-->
<script type='text/javascript' src="{{ asset('front/js/jquery.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/jquery.mixitup.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
