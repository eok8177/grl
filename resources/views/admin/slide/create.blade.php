@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.slide')</h3>
  </div>

  <div class="card-body">

    <form action="{{route('admin.slide.store')}}" method="POST">
      @csrf
      @include('admin.slide.form')
    </form>

  </div>
</div>

@endsection
