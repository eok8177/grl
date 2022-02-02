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
      <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
    </ol>
  </div>
</div>


<div class="container py-3">

  <div class="w3ls-titles text-center mb-2">
    <h3 class="title">{{$category->title}}</h3>
    <span>
      <i class="fas fa-user-md"></i>
    </span>
    <p class="mt-2">{!! $category->description !!}</p>
  </div>

  <div class="row">
    <div class="col-lg-9">
      <div class="posts my-5">

        <div class="posts-grids mt-4">

          @foreach($pages as $page)
          <div class="row post">
            <div class="col-md-3 mb-3">
              <a href="{{route('front.page', $page->slug)}}">
                <img src="{{$page->image}}" alt="{{$page->title}}" class="img-thumbnail" />
              </a>
            </div>
            <div class="col-md-9 mb-3">
              <a href="{{route('front.page', $page->slug)}}">
                <h4>{{$page->title}}</h4>
                <div class="text-body">{!! $page->preview !!}</div>
                {{-- <small class="text-muted">{{$page->updated_at}}</small> --}}
              </a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>

    <div class="col-lg-3 event-right mt-lg-0 mt-sm-5 mt-4">
      <div class="event-right1">
        {{-- <div class="search1 d-none">
          <form class="form-inline" action="#" method="post">
            <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search"
                required>
            <button class="btn btn-outline-success rounded-0 mt-3" type="submit">Search</button>
          </form>
        </div> --}}

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

        {{-- <div class="posts p-4 border d-none">
          <h3 class="blog-title text-dark">Our Events</h3>
          <div class="posts-grids">

            <div class="row posts-grid mt-4">
              <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                <a href="single.html">
                  <img src="images/n1.jpg" alt=" " class="img-fluid" />
                </a>
              </div>
              <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
                <h4>
                  <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                </h4>
                <ul class="wthree_blog_events_list mt-2">
                  <li class="mr-2 text-dark">
                    <i class="fa fa-calendar mr-2" aria-hidden="true"></i>07/07/18</li>
                  <li>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="single.html" class="text-dark ml-2">Admin</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div> --}}

        {{-- <div class="tags mt-4 p-4 border d-none">
          <h3 class="blog-title text-dark">Recent Tags</h3>
          <ul class="mt-4">
            <li>
              <a href="single.html" class="text-dark border">Designs</a>
            </li>
            <li>
              <a href="single.html" class="text-dark border">Growth</a>
            </li>
            <li>
              <a href="single.html" class="text-dark border">Latest</a>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
  </div>

</div>

@endsection