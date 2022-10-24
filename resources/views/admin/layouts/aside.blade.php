<header>
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('admin/images/logo.png') }}" alt="" /></a></div>
      <div class="navbar-collapse">
         <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>لوحة التحكم</a></li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>الصورة الرئيسية
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('hero.edit') }}">تعديل</a></li>
               </ul>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>من نحن
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('about.edit') }}">تعديل</a></li>
               </ul>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>الخدمات
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('services.index') }}">عرض</a></li>
                  <li><a class="dropdown-item" href="{{ route('services.create') }}">إضافة</a></li>
               </ul>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>معرض الصور
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('gallery.index') }}">عرض</a></li>
                  <li><a class="dropdown-item" href="{{ route('gallery.create') }}">إضافة</a></li>
               </ul>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>المعلومات العامة
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('settings.edit') }}">تعديل</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
   <!-- <div class="logout"><a class="btn hvr-sweep-to-top" href="signin.html">logout</a></div> -->
</header>
