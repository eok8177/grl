@extends('admin.layout')

@section('content')

<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.categories')</h3>
    <div>
      <a href="{{ route('admin.page-category.create') }}" class="btn btn-light"><i class="fa fa-plus-square-o"></i> @lang('message.create')</a>
    </div>
  </div>

  <div class="card-body" style="position: relative;">
    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">actions</th>
            <th scope="col">@lang('message.title')</th>
            <th scope="col">@lang('message.image')</th>
            <th scope="col">@lang('message.description')</th>
            <th scope="col">@lang('message.published')</th>
          </tr>
        </thead>
        <tbody>

          @foreach($categories as $item)
          <tr data-id="{{$item->id}}">
            <th scope="row">{{$item->id}}</th>
            <td>
              <a href="{{ route('admin.page-category.edit', $item->id) }}" title="Edit"><i class="fa fa-edit"></i></a>
              @if($item->id > 1)
              &nbsp;&nbsp;&nbsp;
              <a href="{{ route('admin.page-category.destroy', $item->id) }}" title="Delete" class="delete-item"><i class="fa fa-trash-o"></i></a>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.page.index') }}?category={{$item->id}}">{{$item->title}}</a>
            </td>
            <td><img src="/resize/75/30/?img={{urlencode($item->image)}}"></td>
            <td>{!! $item->description !!}</td>
            <td>
              <a href="{{route('admin.ajax.status', ['id' => $item->id, 'model' => 'PageCategory', 'field' => 'published'])}}" class="status fa fa-{{$item->published ? 'check-circle' : 'times-circle'}}"></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection
