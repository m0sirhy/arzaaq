@extends('layouts.site.app') @section('content') {{-- Header --}}
<br>
<div class="float-left">
    <a href="/posts" class="btn btn-primary "> <i class="fe fe-home"></i> عودة للرئيسية </a>

</div>
<div class="header mt-md-5">

    <div class="header-body">

        <!-- Pretitle -->
        <h6 class="header-pretitle">
            موقع الوظائف والفرص الشبابي الاول
        </h6>

        <!-- Title -->
        <h1 class="header-title" style="font-family: 'Cairo';   ">

            <b> أرزاق
      </b> </h1>



    </div>
</div>

<div class="card">

    <div class="card-body">

        <!-- Header -->
        <div class="mb-3">
            <div class="row align-items-center">
                <div class="col-auto">

                </div>
                <div class="col ml-n2">
                    <div class="header">
                        <div class="container-fluid">

                            <!-- Body -->
                            <div class="header-body">
                                <div class="row align-items-center">

                                    <div class="col ml-n3 ml-md-n2">



                                        <!-- Title -->
                                        <h1 class="header-title">
                                            {{$post->title}}
                                        </h1>
                                        {{$post->created_at->diffForHumans()}}

                                    </div>

                                </div>
                                <!-- / .row -->

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- / .row -->
        </div>
        <!-- Image -->
        <p class="text-center mb-3">
            <img src="{{$post->image_path}}" alt="..." class="img-fluid rounded"> {!!$post->body!!}
        </p>



        <!-- Buttons -->
        <div class="mb-3">
            <div class="row">
                <div class="col">

                    <!-- Reaction -->
                    <a href="#!" class="btn btn-outline-secondary btn-white">
                      👍 2
          </a>
                    <a href="#!" class="btn btn-outline-success  btn-white">
                      👎 2
                    </a>

                </div>
                <br>
                <div class="col-auto">
                    <div class="col">
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">

                            <span>
                مشاركة : </span>

                            <a class="a2a_button_whatsapp"> </a>
                            <a class="a2a_button_facebook_messenger"></a>

                            <a class="a2a_button_facebook"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>


    </div>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>

@endsection