@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.doctor')</h3>
  </div>

  <div class="card-body">

    {!! Form::open(['route' => ['admin.doctor.store'], 'method' => 'POST']) !!}
      @include('admin.doctor.form')
    {!! Form::close() !!}

  </div>
</div>

@endsection
