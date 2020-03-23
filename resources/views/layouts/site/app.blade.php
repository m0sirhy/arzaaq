
  <!DOCTYPE html>
  <html dir="rtl" lang="ar">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    @if (\Request::is('posts'))

 
    <meta property="og:title" content="أرزاق موقع الوظائف والفرص الاول " />
    <meta name="description"  content="صحيفة الكترونية مهتمة بالشأن الفلسطيني والعربي ، تضم عدة أقسام متنوعة تتناول الشؤون العربية والدولية والشأن الفلسطيني وأخبار الاقتصاد والرياضة والثقافة والفن والعلوم." />
    <meta property="og:site_name" content="أرزاق موقع الوظائف والفرص الاول " />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="arzaaq.rf.gd" />
    <meta property="og:image" content="{{asset('land/img/favicon.png')}}" />
    <meta property="og:description" 
    content="صحيفة الكترونية مهتمة بالشأن الفلسطيني والعربي ، تضم عدة أقسام متنوعة تتناول الشؤون العربية والدولية والشأن الفلسطيني وأخبار الاقتصاد والرياضة والثقافة والفن والعلوم." />
    <!-- //twitter card -->
     <meta name=”twitter:card” content=”summary_large_image”>
     <meta name=”twitter:url” content=”arzaaq.rf.gd “>
    <meta name=”twitter:title” content=”أرزاق موقع الوظائف والفرص الاول ”>
     <meta name=”twitter:description” content="صحيفة الكترونية مهتمة بالشأن الفلسطيني والعربي ، تضم عدة أقسام متنوعة تتناول الشؤون العربية والدولية والشأن الفلسطيني وأخبار الاقتصاد والرياضة والثقافة والفن والعلوم." />
     <meta name=”twitter:image” content="{{asset('land/img/favicon.png')}}">
    
     @else
  <meta property="og:title" content="{{$post->title}} " />
  <meta name="description"  content="{{$post->title}}  " />
  <meta property="og:site_name" content="أرزاق موقع الوظائف والفرص الاول " />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="arzaaq.rf.gd" />
<meta property="og:image" content="{{$post->image_path}}" />
  <meta property="og:description" 
  content=" {{$post->title}} " />
  <!-- //twitter card -->
   <meta name=”twitter:card” content=”summary_large_image”>
   <meta name=”twitter:url” content=”arzaaq.rf.gd “>
  <meta name=”twitter:title” content="{{$post->title}} ">
   <meta name=”twitter:description” content="{{$post->meta}} " />
   <meta name=”twitter:image” content="{{asset('land/img/favicon.png')}}">
<!-- //og: meta Tags -->

@endif
 <script src="{{ asset('site/assets/js/client.min.js')}}"></script>
 <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/fonts/feather/feather.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/flatpickr/dist/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/quill/dist/quill.core.css')}}" />
    <link rel="stylesheet" href="{{ asset('site/assets/libs/highlightjs/styles/vs2015.css')}}" />

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <!-- Theme CSS -->

    <link rel="stylesheet" on="isDay" href="{{ asset('site/assets/css/theme.min.css')}}" id="stylesheetLight">
    <!-- <link rel="stylesheet" href="{{ asset('site/assets/css/theme-dark.min.css')}}" id="stylesheetDark"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
      body {
        display: none;
      }
    </style>
    <link href="{{asset('land/img/favicon.png')}}" rel="icon">

    <!-- Title -->
    <title>ارزاق -موقع الوظائف الاول </title>


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
 
    <script src="{{ asset('site/assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/list.js/dist/list.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('site/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function() {     

  
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
  
  
          $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
              var id = $(this).parents(".card").data('id');
              var c = $('#'+this.id+'-bs3').html();
              var cObjId = this.id;
              var cObj = $(this);
              alert('run');

              $.ajax({
                 type:'POST',
                 url:'/reaction',
                 data:{id:id},
                 success:function(data){
                    if(jQuery.isEmptyObject(data.success.attached)){
                      $('#'+cObjId+'-bs3').html(parseInt(c)-1);
                      $(cObj).removeClass("like-post");
                    }else{
                      $('#'+cObjId+'-bs3').html(parseInt(c)+1);
                      $(cObj).addClass("like-post");
                    }
                 }
              });
  
  
          });      
  
  
          $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
              event.preventDefault();
              $(this).ekkoLightbox();
          });                                        
      }); 
  </script>
    

    <!-- Theme JS -->
    <script src="{{ asset('site/assets/js/theme.min.js')}}"></script>
    <script src="{{ asset('site/assets/js/client.min.js')}}"></script>

    <script>
  function isDay() {
  const hours = (new Date()).getHours();
  return (hours >= 6 && hours < 18);
}
      </script>

<script>

	var client = new ClientJS(); // Create A New Client Object
  var fingerprint = client.getFingerprint(); // Calculate Device/Browser Fingerprint


</script>
  </body>

  </html>