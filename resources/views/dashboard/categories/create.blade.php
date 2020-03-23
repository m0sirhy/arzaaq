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
              New category
            </h6>

            <!-- Title -->
            <h1 class="header-title">
           اضافة تصنيف جديد
            </h1>

          </div>
        </div> <!-- / .row -->
      </div>
    </div>

    <!-- Form -->
    <form class="mb-4" method="POST" action="{{route('dashboard.categories.store')}}" enctype="multipart/form-data">
      @csrf
      <!-- Category name -->
      <div class="form-group">

        <!-- Label  -->
        <label>
          @lang('site.add_category')
        </label>

        <!-- Input -->
        <input type="text" name="name" class="form-control">

        

      <!-- Divider -->
      <hr class="mt-4 mb-5">

<!-- Project cover -->
<div class="form-group">

  <!-- Label  -->
  <label class="mb-1">
    اضافة صورة
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



</div>

</div>


<!-- Divider -->
<hr class="mt-5 mb-5">


<!-- Divider -->
<hr class="mt-5 mb-5">

<!-- Buttons -->
<input type="submit" class="btn btn-block btn-primary" value=" Create project ">
<a href="#" class="btn btn-block btn-link text-muted">
@lang('site.add')
</a>

</form>

      </div>




</div> <!-- / .row -->


@endsection