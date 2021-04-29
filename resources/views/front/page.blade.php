@extends('front.layout')

@section('content')

<div class="inner-banner-w3ls">
  <div class="container"></div>
</div>

<div class="breadcrumb-agile">
  <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Головна</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{route('front.pages', $page->category->slug)}}">{{$page->category->title}}</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
    </ol>
  </div>
</div>

<div class="single-w3l py-5">
  <div class="container py-xl-5 py-lg-3">
    <div class="w3ls-titles text-center mb-5">
      <h3 class="title">{{$page->title}}</h3>
    </div>

    <div class="row inner_sec_info">

      <div class="col-lg-9 single-left">
        <div class="single-left1">
          @if($page->image)
          <img src="{{$page->image}}" alt="{{$page->title}}" class="img-fluid"/>
          @endif
          <ul class="blog_list my-3 text-center">
            <li>{{$page->updated_at}}</li>
          </ul>
          <p>{!! $page->preview !!}</p>
          <p>{!! $page->content !!}</p>
        </div>
      </div>

      <div class="col-lg-3 event-right mt-lg-0 mt-sm-5 mt-4">
        <div class="event-right1">
          <!-- <div class="search1 d-none">
            <form class="form-inline" action="#" method="post">
              <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search"
                  required>
              <button class="btn btn-outline-success rounded-0 mt-3" type="submit">Search</button>
            </form>
          </div> -->

          <div class="posts p-4 border">
            <h4 class="blog-title text-dark">{{$page->category->title}}</h4>
            <div class="posts-grids">

              @foreach($page->lastPages() as $last_item)
              <div class="row posts-grid mt-4">
                <div class="col-lg-12 posts-grid-left pr-0">
                  <a href="{{route('front.page', $last_item->slug)}}">
                    <img src="/resize/40/48?img={{$last_item->image}}" alt="{{$last_item->title}}" class="img-fluid" style="float: left; margin: 0 10px 10px 0;" />
                    <h6 class="text-dark">{{$last_item->title}}</h6>
                  </a>
                </div>
              </div>
              @endforeach

            </div>
          </div>

          <div class="categories my-4 p-4 border">
            <h4 class="blog-title text-dark">Категорії</h4>
            <ul>
              @foreach($categories as $item)
              <li class="mt-3" v-for="item in categories">
                <a href="{{route('front.pages', $item->slug)}}"><i class="fas fa-check mr-1"></i> {{$item->title}}</a>
              </li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>

    </div>

  </div>
</div>

@endsection