@extends('layouts.dashboard.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-lg-10 col-xl-8">

    <!-- Header -->
    <div class="header mt-md-5">
      <div class="header-body">
        <div class="row align-items-center">
          <div class="col">

            <!-- Pretitle -->
            <h6 class="header-pretitle">
              New Post
            </h6>

            <!-- Title -->
            <h1 class="header-title">
              Create a new Post
            </h1>

          </div>
        </div> <!-- / .row -->
      </div>
    </div>

    <!-- Form -->
    <form class="mb-4" method="POST" action="{{route('dashboard.posts.store')}}" enctype="multipart/form-data">
      @csrf
      <!-- Project name -->
      <div class="form-group">

        <!-- Label  -->
        <label>
          Post title
        </label>

        <!-- Input -->
        <input type="text" name="title" class="form-control">

      </div>

      <!-- Project description -->
      <div class="form-group">

        <!-- Label -->
        <label class="mb-1">
          Project description
        </label>

        <!-- Text -->
        <small class="form-text text-muted">
          This is how others will learn about the project, so make it good!
        </small>

          <!-- Textarea -->
          <textarea name="body" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
        
      </div>

      <!-- Divider -->
      <hr class="mt-4 mb-5">

      <!-- Project tags -->
      <div class="form-group">

        <!-- Label -->
        <label>
          Post Category
        </label>
        <select name="category_id" class="form-control">
                                <option value="">@lang('site.all_categories')</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>

      </div>



      <!-- Divider -->
      <hr class="mt-4 mb-5">

      <!-- Project cover -->
      <div class="form-group">

        <!-- Label  -->
        <label class="mb-1">
          Project cover
        </label>

        <!-- Text -->
        <small class="form-text text-muted">
          Please use an image no larger than 1200px * 600px.
        </small>



        <!-- Fallback -->
        <div class="fallback">
          <div class="custom-file">
            <input type="file" name="image" class="file-input">
            <label class="file-label">Choose file</label>
          </div>
        </div>

        <div class="form-group">
                            <img src="{{ asset('uploads/product_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


      </div>

  <!-- Divider -->
  <hr class="mt-5 mb-5">

 

  <!-- Buttons -->
  <input type="submit" class="btn btn-block btn-primary" value=" Create project ">
  <a href="#" class="btn btn-block btn-link text-muted">
    Cancel this project
  </a>

  </form>

  </div>


</div>
@endsection