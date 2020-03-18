  
<!DOCTYPE html>
<html  dir="rtl" lang="ar">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
  <meta name="_token" content="{{csrf_token()}}"/>
       {{--ckeditor standard--}}
       <script src="{{ asset('site/assets/libs/ckeditor/ckeditor.js') }}"></script>
  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('site/assets/fonts/feather/feather.css')}}" />
  <link rel="stylesheet" href="{{ asset('site/assets/libs/flatpickr/dist/flatpickr.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('site/assets/libs/quill/dist/quill.core.css')}}" />
  <link rel="stylesheet" href="{{ asset('site/assets/libs/highlightjs/styles/vs2015.css')}}" />

  <!-- Map -->
  <link href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

  <!-- Theme CSS -->
    
  <link rel="stylesheet" href="{{ asset('site/assets/css/theme.min.css')}}" id="stylesheetLight">
  <link rel="stylesheet" href="{{ asset('site/assets/css/theme-dark.min.css')}}" id="stylesheetDark">
  <link href="{{asset('land/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('land/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <style>
    body {
      display: none;
    }

  </style>
  
  <!-- Title -->
  <title>ارزاق -موقع الوظائف الاول </title>



  </head>
  <body style="font-family: 'Cairo';">
    
            <div class="container">
              <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
                <div class="container-fluid">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="{{route('dashboard.posts.index')}}" class="nav-link active">
                        <i class="fe fe-home"></i>
                       كل المقالات

                      </a>
                    </li>
                  </ul>
                </div>
                </nav>
 <div class="main-content">
  @include('partials._erorrs')

      
              <div class="container-fluid">

        @yield('content')

     
</div>
  <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->

    <script src="{{ asset('site/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js')}}"></script>
    <script src="{{ asset('site/assets/libs/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/list.js/dist/list.min.js')}}"></script>
 
    <script src="{{ asset('site/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/chart.js/Chart.extension.js')}}"></script>
    <script src="{{ asset('site/assets/libs/image_preview.js') }}"></script>
    <!-- Map -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="{{ asset('site/assets/js/theme.min.js')}}"></script>
    <script>
  
      CKEDITOR.replace( 'editor1' );

      CKEDITOR.config.language =  "ar";

  
</script>

    
  </body>

</html>