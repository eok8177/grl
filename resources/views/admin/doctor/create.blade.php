@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.doctor')</h3>
  </div>

  <div class="card-body">

    <form action="{{route('admin.doctor.store')}}" method="POST">
      @csrf
      @include('admin.doctor.form')
    </form>

  </div>
</div>

@endsection
