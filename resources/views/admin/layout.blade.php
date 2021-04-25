<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>

  <div id="app">

    {{-- Navigation --}}
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <i class="fa fa-fw fa-tachometer"></i> <span class="d-none d-md-inline">@lang('message.dashboard')</span>
            </a>

            <ul class="navbar-nav flex-row">
              <li class="nav-item">
                <a href="/" class="nav-link"><i class="fa fa-fw fa-home"></i> @lang('message.to_site')</a>
              </li>

              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a href="{{ route('admin.user.edit', Auth::user()) }}" class="dropdown-item"><i class="fa fa-fw fa-gear"></i> @lang('message.settings')</a>

                    <hr>

                    <a class="dropdown-item" href="{{route('admin.user.create')}}"><i class="fa fa-fw fa-user"></i> @lang('message.create')</a>
                    <a class="dropdown-item" href="{{route('admin.user.index')}}"><i class="fa fa-fw fa-users"></i> @lang('message.users')</a>

                    <hr>

                    <a href="{{ route('logout') }}" class="dropdown-item"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-sign-out"></i> @lang('message.logout')
                    </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                  </div>
              </li>

            </ul>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>

        {{-- SIDEBAR --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav flex-column side-nav">

            <a class="nav-item nav-link {{ request()->is('*page*') ? 'active' : '' }}" data-toggle="collapse" href="#pagesNav" role="button" aria-expanded="{{ request()->is('*page*') ? 'true' : 'false' }}"><i class="fa fa-fw fa-newspaper-o"></i> @lang('message.pages')</a>

            <div id="pagesNav" class="collapse {{ request()->is('*page*') ? 'show' : '' }} pl-3">
              <a class="nav-item nav-link" href="{{route('admin.page-category.index')}}"><i class="fa fa-fw fa-files-o"></i> @lang('message.categories')</a>
              <a class="nav-item nav-link" href="{{route('admin.page.index')}}"><i class="fa fa-fw fa-file-text-o"></i> @lang('message.pages')</a>
            </div>

            <a class="nav-item nav-link {{ request()->is('*doctor*') ? 'active' : '' }}" href="{{route('admin.doctor.index')}}"><i class="fa fa-fw fa-users"></i> @lang('message.doctors')</a>

            <a class="nav-item nav-link {{ request()->is('*slide*') ? 'active' : '' }}" href="{{route('admin.slide.index')}}"><i class="fa fa-fw fa-image"></i> @lang('message.slides')</a>


          </div>
        </div>
    </nav>



    {{--  PAGE  --}}
    <div id="page-wrapper">
      <div class="container-fluid pt-md-3">

        <div class="flash-message">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
              <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
          @endforeach

          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        @yield('content')

      </div>{{-- /.container-fluid --}}
    </div>

    <a href="#app" class="btn btn-info d-none"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  {{--  FOOTER  --}}

<!-- Scripts -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
{{-- <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script> --}}
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

<script src="{{ asset('vendor/jquery-sortable.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>

<script>
  $(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.delete').on('click', function (e) {
      if (!confirm('Are you sure you want to delete?')) return false;
    e.preventDefault();
      $.post({
          type: 'DELETE',  // destroy Method
          url: $(this).attr("href")
      }).done(function (data) {
          console.log(data);
          location.reload(true);
      });
    });
  });
</script>

{{-- Sortable --}}
<style type="text/css">
  body.dragging, body.dragging * {
    cursor: move !important;
  }
  .dragged {
    position: absolute;
    opacity: 0.8;
    z-index: 2000;
    background: #FFF;
  }
  .sorted_table .placeholder {
    position: relative;
  }
  .sorted_table .placeholder:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border: 5px solid transparent;
    border-left-color: red;
    margin-top: -5px;
    left: 0;
    border-right: none;
  }
</style>
<script type="text/javascript">
  $(function  () {

    var group = $('.sorted_table').sortable({
      containerSelector: 'table',
      itemPath: '> tbody',
      itemSelector: 'tr',
      placeholder: '<tr class="placeholder"/>',
      onDrop: function ($item, container, _super) {
        var data = group.sortable("serialize").get()[0];
        // console.log(data);

        $.ajax({
            data: {order:data},
            type: 'PUT',
            dataType: 'json',
            url: '{{route('admin.ajax.reorder')}}'+'?model='+$('.sorted_table').attr('model')
        });

        _super($item, container);
      }
    });

  });
</script>

@stack('scripts')
</body>
</html>
