@extends('layouts.dashboard.app')
@section('content')
<div class="row">
      <!-- Convertions -->
      <div class="card">
        <div class="card-header">

          <!-- Title -->
          <h1 class="card-header-title" style="font-family: 'Cairo';">
<b>
ارزاق         
</b> 
</h1>

          <!-- Caption -->
          <span class="text-muted mr-3">
            موقع الوظائف والفرص الشبابي الاول 
            
          </span>

        

        </div>
        <div class="card-body">

@if ($posts->count() > 0)

<table class="table table-hover">

    <thead>
    <tr>
        <th>#</th>
        <th>@lang('site.name')</th>
     
        <th colspan="2">@lang('site.action')</th>
    </tr>
    </thead>
    
    <tbody>
    @foreach ($posts as $index=>$post)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>  <a href="{{ route('dashboard.posts.show', $post->id) }}" >{{ $post->title }}</a></td>
          
            <td>
                    <a href="{{ route('dashboard.posts.edit', $post->id) }}"" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
            </td>
            <td>
                    <form action="{{ route('dashboard.posts.destroy', $post->id) }}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                    </form><!-- end of form -->
                
            </td>
        </tr>
    
    @endforeach
    </tbody>

</table><!-- end of table -->

{{ $posts->links() }}

@else

<h2>@lang('site.no_data_found')</h2>

@endif
  </div>
</div>
@endsection
