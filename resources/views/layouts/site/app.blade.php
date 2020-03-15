  <!DOCTYPE html>
  <html dir="rtl" lang="ar">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    //meta Robots
  <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

//canonical tag :A page can have several different URLs depending
<link rel="canonical" href="" />


//og: meta Tags
<meta property="og:title" content="" />
<meta property="og:site_name" content="" />
<meta property="og:type" content="article" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:description" 
  content="Sean Connery found fame and fortune as the
           suave, sophisticated British agent, James Bond." />
************


//twitter card
 <meta name=”twitter:card” content=”summary_large_image”>
 <meta name=”twitter:url” content=” “>
<meta name=”twitter:title” content=” ”>
 <meta name=”twitter:description” content=”
, the methods that require you to send out emails 
to thousands of webmasters begging for links. “>
 <meta name=”twitter:image” content=”linkbuilding.jpg”>
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/fonts/feather/feather.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/flatpickr/dist/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/quill/dist/quill.core.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/highlightjs/styles/vs2015.css')}}" />


    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{ asset('site/assets/css/theme.min.css')}}" id="stylesheetLight">
    <link rel="stylesheet" href="{{ asset('site/assets/css/theme-dark.min.css')}}" id="stylesheetDark">

    <style>
      body {
        display: none;
      }
    </style>

    <!-- Title -->
    <title>Dashkit</title>



  </head>

  <body style="display: block;">

<div class="container">
    <div class="main-content " >

      <div class="container-fluid">

          @yield('content')
      </div>
    </div>
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

    <!-- Map -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="{{ asset('site/assets/js/theme.min.js')}}"></script>


  </body>

  </html>