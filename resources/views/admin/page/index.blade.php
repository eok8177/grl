@extends('admin.layout')

@section('content')

<div class="card">
  <div class="card-header bg-light">
    <h3>@lang('message.page')</h3>
    <div>
      <a href="{{ route('admin.page.create') }}" class="btn btn-light"><i class="fa fa-plus-square-o"></i> @lang('message.create')</a>

      <div class="dropdown float-right">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Категорія
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach($categories as $id => $title)
            <a class="dropdown-item" href="{{ route('admin.page.index') }}?category={{$id}}">{{$title}}</a>
          @endforeach
        </div>
      </div>

    </div>
  </div>

  <div class="card-body" style="position: relative;">
    <div class="table-responsive">
      <table class="table text-center sorted_table" model="Page">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">actions</th>
            <th scope="col">@lang('message.category')</th>
            <th scope="col">@lang('message.title')</th>
            <th scope="col">@lang('message.image')</th>
            <th scope="col">@lang('message.preview')</th>
            <th scope="col">@lang('message.published')</th>
          </tr>
        </thead>
        <tbody>

          @foreach($page as $item)
          <tr data-id="{{$item->id}}">
            <th scope="row">{{$item->id}}</th>
            <td>
              <a href="{{ route('admin.page.edit', $item->id) }}" title="Edit"><i class="fa fa-edit"></i></a>
              &nbsp;&nbsp;&nbsp;
              <a href="{{ route('admin.page.destroy', $item->id) }}" title="Delete" class="delete-item"><i class="fa fa-trash-o"></i></a>
            </td>
            <td>
              <a href="{{ route('admin.page.index') }}?category={{$item->category->id}}">{{$item->category->title}}</a>
            </td>
            <td>{{$item->title}}</td>
            <td><img src="/resize/50/40/?img={{urlencode($item->image)}}"></td>
            <td>{!! $item->preview !!}</td>
            <td>
              <a href="{{route('admin.ajax.status', ['id' => $item->id, 'model' => 'Page', 'field' => 'published'])}}" class="status fa fa-{{$item->published ? 'check-circle' : 'times-circle'}}"></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection