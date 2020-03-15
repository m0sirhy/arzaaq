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

<div data-toggle="lists" data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">
  <div class="container-fluid" data-toggle="lists" data-options="{&quot;valueNames&quot;: [&quot;name&quot;], &quot;listClass&quot;: &quot;listAlias&quot;}">
    <div class="row mb-4">
      <div class="col">

        <!-- Form -->
        <form>
          <div class="input-group input-group-lg input-group-merge">

            <!-- Input -->
            <input type="text" class="form-control form-control-prepended search" placeholder="Search">

            <!-- Prepend -->
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fe fe-search"></span>
              </div>
            </div>

          </div>
        </form>

      </div>
      <div class="col-auto" dir="ltr">

        <!-- Navigation (button group) -->
        <div class="nav btn-group" role="tablist">
          <button class="btn btn-lg btn-white active" data-toggle="tab" data-target="#tabPaneOne" role="tab" aria-controls="tabPaneOne" aria-selected="true">
            <span class="fe fe-grid"></span>
          </button>
          <button class="btn btn-lg btn-white" data-toggle="tab" data-target="#tabPaneTwo" role="tab" aria-controls="tabPaneTwo" aria-selected="false">
            <span class="fe fe-list"></span>
          </button>
        </div> <!-- / .nav -->
      </div>
    </div> <!-- / .row -->
    <div class="row justify-content-center" >

      <!-- card grid content -->
      <div class="tab-content">
        <div class="tab-pane fade active show" id="tabPaneOne" role="tabpanel">
          <div class="row listAlias">
            @foreach($posts as $post)

            <div class="col-12 col-md-6 col-xl-4">

              <!-- Card -->
              <div class="card">

                <!-- Image -->
                <a href="{{route('posts.show',$post->id)}}">
                  <img src="{{$post->image_path}}" alt="..." class="card-img-top">
                </a>

                <!-- Body -->
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h4 class="mb-2 name">
                        <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
                      </h4>

                      <!-- Subtitle -->
                      <p class="card-text small text-muted">
                        {{$post->created_at->diffForHumans() }}
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Avatar group -->
                      <div class="avatar-group">
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
                  </div> <!-- / .row -->
                </div>

                <!-- Footer -->
                <div class="card-footer card-footer-boxed">
                  <div class="row align-items-center">
                    <div class="col">
                      <div class="row align-items-center no-gutters">
                        <div class="col-auto">

                          <!-- Value -->
                          <div class="small mr-2">29%</div>

                        </div>
                        <div class="col">

                          <!-- Progress -->
                          <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div>
                    <div class="col-auto">



                    </div>
                  </div> <!-- / .row -->
                </div>
              </div>

            </div>
            @endforeach



          </div> <!-- / .row -->
        </div>

        <!-- row list-->
        <div class="tab-pane fade" id="tabPaneTwo" role="tabpanel">

          <div class="row list">
            @foreach($posts as $post)

            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                        <img src="{{$post->image_path}}" alt="..." class="avatar-img rounded">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
                      </h4>

                      <!-- Text -->
                      <p class="card-text small text-muted mb-1">
                        <time datetime="2018-06-21">{{$post->created_at}}</time>
                      </p>

                      <!-- Progress -->
                      <div class="row align-items-center no-gutters">
                        <div class="col-auto">

                          <!-- Value -->
                          <div class="small mr-2">29%</div>

                        </div>
                        <div class="col">

                          <!-- Progress -->
                          <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>

                        </div>
                      </div> <!-- / .row -->

                    </div>
                    <div class="col-auto">

                      <!-- Avatar group -->
                      <div class="avatar-group d-none d-md-inline-flex">
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-2.jpg')}}" class="avatar-img rounded-circle" alt="...">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-3.jpg')}}" class="avatar-img rounded-circle" alt="...">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-4.jpg')}}" class="avatar-img rounded-circle" alt="...">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                          <img src="{{asset('site/assets/img/avatars/profiles/avatar-5.jpg')}}" class="avatar-img rounded-circle" alt="...">
                        </a>
                      </div>

                    </div>

                  </div> <!-- / .row -->
                </div> <!-- / .card-body -->
              </div>

            </div>
            @endforeach

          </div> <!-- / .row -->
        </div>
      </div> <!-- / .tab-content -->
    </div>
    {!! $posts->render() !!}

  </div>
</div>
@endsection