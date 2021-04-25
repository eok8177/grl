@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.category')</h3>
  </div>

  <div class="card-body">

    {!! Form::open(['route' => ['admin.page-category.update', $category->id], 'method' => 'PUT']) !!}
      @include('admin.page.category_form')
    {!! Form::close() !!}

  </div>
</div>

@endsection
