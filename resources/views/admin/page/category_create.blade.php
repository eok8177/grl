@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.category')</h3>
  </div>

  <div class="card-body">

    <form action="{{route('admin.page-category.store')}}" method="POST">
      @csrf
      @include('admin.page.category_form')
    </form>

  </div>
</div>

@endsection
