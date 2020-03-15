
@extends('layouts.site.app')
@section('content')
    {{-- Header --}}
<div class="header mt-md-5">
    <div class="header-body">
  
      <!-- Pretitle -->
      <h6 class="header-pretitle">
        Our Platform
      </h6>
  
      <!-- Title -->
      <h1 class="header-title">
        Platform Feed
      </h1>
  
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
                               
                                </div> <!-- / .row -->
                             
                            </div>
                    
                        </div>
                    </div>
                    </div>
                 
                  </div> <!-- / .row -->
                </div>
 <!-- Image -->
 <p class="text-center mb-3">
    <img src="{{$post->image_path}}" alt="..." class="img-fluid rounded">
 {!!$post->body!!}
  </p>
              
               

                <!-- Buttons -->
                <div class="mb-3">
                  <div class="row">
                    <div class="col">

                      <!-- Reaction -->
                      <a href="#!" class="btn btn-sm btn-white">
                        😬 1
                      </a>
                      <a href="#!" class="btn btn-sm btn-white">
                        👍 2
                      </a>
                      <a href="#!" class="btn btn-sm btn-white">
                        Add Reaction
                      </a>

                    </div>
                 
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Share
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div>

             
              </div>
            </div>
            @endsection