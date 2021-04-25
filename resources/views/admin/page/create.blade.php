@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.page')</h3>
  </div>

  <div class="card-body">

    {!! Form::open(['route' => ['admin.page.store'], 'method' => 'POST']) !!}
      @include('admin.page.form')
    {!! Form::close() !!}

  </div>
</div>

@endsection
