@extends('admin.layout')

@section('content')

<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.doctor')</h3>
    <div>
      <a href="{{ route('admin.doctor.create') }}" class="btn btn-light"><i class="fa fa-plus-square-o"></i> @lang('message.create')</a>
    </div>
  </div>

  <div class="card-body" style="position: relative;">
    <div class="table-responsive">
      <table class="table text-center sorted_table" model="Doctor">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">actions</th>
            <th scope="col">@lang('message.name')</th>
            <th scope="col">@lang('message.work')</th>
            <th scope="col">@lang('message.image')</th>
            <th scope="col">@lang('message.published')</th>
          </tr>
        </thead>
        <tbody>

          @foreach($page as $item)
          <tr data-id="{{$item->id}}">
            <th scope="row">{{$item->id}}</th>
            <td>
              <a href="{{ route('admin.doctor.edit', $item->id) }}" title="Edit"><i class="fa fa-edit"></i></a>
              &nbsp;&nbsp;&nbsp;
              <a href="{{ route('admin.doctor.destroy', $item->id) }}" title="Delete" class="delete-item"><i class="fa fa-trash-o"></i></a>
            </td>
            <td>{{$item->title}}</td>
            <td>{{$item->work}}</td>
            <td><img src="/resize/50/40/?img={{urlencode($item->image)}}"></td>
            <td>
              <a href="{{route('admin.ajax.status', ['id' => $item->id, 'model' => 'Doctor', 'field' => 'published'])}}" class="status fa fa-{{$item->published ? 'check-circle' : 'times-circle'}}"></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection