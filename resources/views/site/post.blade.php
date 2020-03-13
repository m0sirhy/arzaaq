
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
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Trending post
                </h4>

              </div>
              <div class="card-body">

                <!-- Header -->
                <div class="mb-3">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="#!" class="avatar">
                        <img src="{{asset('site/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="mb-1">
                        Dianna Smiley
                      </h4>

                      <!-- Time -->
                      <p class="card-text small text-muted">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">4hr ago</time>
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Dropdown -->
                      <div class="dropdown">
                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>
 <!-- Image -->
 <p class="text-center mb-3">
    <img src="{{asset('site/assets/img/posts/post-1.jpg')}}" alt="..." class="img-fluid rounded">
  </p>
                <!-- Text -->
                <p class="mb-3">
                  I've been working on shipping the latest version of Launchday. The story I'm trying to focus on is something like "You're launching soon and need to be 100% focused on your product. Don't lose precious days designing, coding, and testing a product site. Instead, build one in minutes."
                </p>

                <p class="mb-4">
                  What do you y'all think? Would love some feedback from <a href="#!" class="badge badge-soft-primary">@Ab</a> or <a href="#!" class="badge badge-soft-primary">@Adolfo</a>?
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
                    <div class="col-auto mr-n3">

                      <!-- Avatar group -->
                      <div class="avatar-group d-none d-sm-flex">
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-3.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-4.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-5.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </a>
                      </div>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Share
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div>

                <!-- Divider -->
                <hr>

                <!-- Comments -->
                <div class="comment mb-3">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="profile-posts.html">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Ab Hadley
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div>
            @endsection