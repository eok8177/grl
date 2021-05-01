@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.page')</h3>
  </div>

  <div class="card-body">

    <form action="{{route('admin.page.store')}}" method="POST">
      @csrf
      @include('admin.page.form')
    </form>

  </div>
</div>

@endsection
