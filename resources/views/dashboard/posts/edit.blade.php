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
        تعديل المقال
            </h6>

            <!-- Title -->
            <h1 class="header-title">
تعديل            </h1>

          </div>
        </div> <!-- / .row -->
      </div>
    </div>

    <!-- Form -->
    <form class="mb-4" method="POST" action="{{route('dashboard.posts.update',$post->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Project name -->
      <div class="form-group">

        <!-- Label  -->
        <label>
@lang('site.title')       
 </label>

        <!-- Input -->
      <input type="text" name="title" class="form-control" value="{{$post->title}}">

      </div>

      <!-- Project description -->
      <div class="form-group">

        <!-- Label -->
        <label class="mb-1">
@lang('site.body')        </label>

        <!-- Text -->
        <small class="form-text text-muted">
          This is how others will learn about the project, so make it good!
        </small>

          <!-- Textarea -->
          <textarea name="body" id="editor1" rows="10" cols="80">
{!!$post->body!!}
          </textarea>
        
      </div>

      <!-- Divider -->
      <hr class="mt-4 mb-5">
 <!-- Label  -->
 <label>
  @lang('site.meta')
 </label>

 <!-- Input -->
 <input type="text" name="meta" class="form-control" value="{{$post->meta)}}">

</div>
      <!-- Project tags -->
      <div class="form-group">

        <!-- Label -->
        <label>
@lang('site.category')        </label>
        <select name="category_id" class="form-control">
                                <option value="">@lang('site.all_categories')</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>                                @endforeach
                            </select>

      </div>



      <!-- Divider -->
      <hr class="mt-4 mb-5">

      <!-- Project cover -->
      <div class="form-group">

        <!-- Label  -->
        <label class="mb-1">
          @lang('site.image')  
        </label>

        <!-- Text -->
        <small class="form-text text-muted">
          Please use an image no larger than 1200px * 600px.
        </small>



        <!-- Fallback -->
        <div class="form-group">
          <label>@lang('site.image')</label>
          <input type="file" name="image" class="form-control image">
      </div>

      <div class="form-group">
          <img src="{{ $post->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
      </div>


      </div>

  <!-- Divider -->
  <hr class="mt-5 mb-5">

 

  <!-- Buttons -->
  <input type="submit" class="btn btn-block btn-primary" value=" Create project ">
  <a href="#" class="btn btn-block btn-link text-muted">
@lang('site.edit')
  </a>

  </form>

  </div>


</div>
@endsection