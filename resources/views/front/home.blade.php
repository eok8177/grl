@extends('front.layout')

@section('content')
    <div class="slider owl-carousel owl-theme">

      @foreach($slides as $slide)
      <div class="banner-top" style='background-image: url("/resize/1680/900?img={{$slide->image}}"); width: 100%; display: inline-block;'>
        <div class="banner-info_agile_w3ls">
          <div class="container">
            <h3>
              {!! $slide->title !!}
            </h3>
            <p class="mt-3 mb-md-5 mb-3"></p>
            @if($slide->link)
            <a href="{{$slide->link}}">Детальніше
              <i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
            </a>
            @endif
          </div>
        </div>
      </div>
      @endforeach

    </div>

    <div class="clearfix"></div>

    <!-- middle section -->
    <div class="w3ls-welcome py-5">
      <div class="container py-xl-5 py-lg-3">
        <div class="row">
          <div class="col-lg-5 welcome-right">
            <img src="images/b2.png" alt=" " class="img-fluid">
          </div>
          <div class="col-lg-7 welcome-left mt-4">
            <h3>Безкоштовна діагностика</h3>
            <h6 class="mt-3">Ще одна перевага, якою з 2019 року можуть скористатись українці</h6>
            <h4 class="my-4 font-italic">Всі хто уклав декларації про надання первинної медичної допомоги, - можуть отримувати безкоштовної діагностики.</h4>
            <p> З 1 липня за направленням сімейного лікаря українці зможуть проходити діагностику безкоштовно. Нововведення стосується понад 80% усіх досліджень. До програми увійдуть 54 медичні послуги від аналізів і флюорографії - до УЗД і ендоскопічних досліджень (включно з ендоскопічним оперуванням)</p>
            {{-- <div class="readmore-w3-agileits mt-md-5 mt-4">
              <a href="single.html" class="w3ls-button-agile text-dark">Детальніше</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>


    <!-- services -->
    <div class="why-choose-agile pt-5" id="services">
      <div class="container pt-xl-5 pt-lg-3">
        <div class="w3ls-titles text-center mb-5">
          <h3 class="title">Наші відділення</h3>
          <span>
            <i class="fas fa-user-md"></i>
          </span>
          <!-- <p class="mt-2">текст текст текст текст текст текст.</p> -->
        </div>
        <div class="row why-choose-agile-grids-top">
          <div class="col-lg-4 agileits-w3layouts-grid">
            <div class="row wthree_agile_us">
              <div class="col-3 agile-why-text p-0 text-right">
                <div class="wthree_features_grid">
                  <i class="fas fa-user-md"></i>
                </div>
              </div>
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Поліклінічне</h4>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-3 agile-why-text p-0 text-right">
                <div class="wthree_features_grid">
                  <i class="fas fa-user-md"></i>
                </div>
              </div>
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Терапевтичне</h4>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-3 agile-why-text p-0 text-right">
                <div class="wthree_features_grid">
                  <i class="fas fa-syringe"></i>
                </div>
              </div>
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Дитяче</h4>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-3 agile-why-text p-0 text-right">
                <div class="wthree_features_grid">
                  <i class="fab fa-medrt"></i>
                </div>
              </div>
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Гінекологічне</h4>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-3 agile-why-text p-0 text-right">
                <div class="wthree_features_grid">
                  <i class="fas fa-user-md"></i>
                </div>
              </div>
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Пологове</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 agileits-w3layouts-grid img text-center">
            <img src="images/b3.png" alt=" " class="img-fluid" />
          </div>
          <div class="col-lg-4 agileits-w3layouts-grid">
            <div class="row wthree_agile_us">
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Неврологічне</h4>
              </div>
              <div class="col-3 agile-why-text p-0">
                <div class="wthree_features_grid">
                  <i class="fas fa-medkit"></i>
                </div>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Травматологічне</h4>
              </div>
              <div class="col-3 agile-why-text p-0">
                <div class="wthree_features_grid">
                  <i class="fas fa-wheelchair"></i>
                </div>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Хірургічне</h4>
              </div>
              <div class="col-3 agile-why-text p-0">
                <div class="wthree_features_grid">
                  <i class="fas fa-hospital"></i>
                </div>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Інфекційне</h4>
              </div>
              <div class="col-3 agile-why-text p-0">
                <div class="wthree_features_grid">
                  <i class="fas fa-hospital"></i>
                </div>
              </div>
            </div>
            <div class="row wthree_agile_us my-3">
              <div class="col-9 agile-why-text-2">
                <h4 class="text-dark font-weight-bold">Анастезіологічне</h4>
              </div>
              <div class="col-3 agile-why-text p-0">
                <div class="wthree_features_grid">
                  <i class="fas fa-hospital"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="blog-w3ls py-5" id="blog">
      <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
          <h3 class="title text-white">Поради лікарів</h3>
          <span>
            <i class="fas fa-user-md text-white"></i>
          </span>
          {{-- <p class="mt-2 text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
        </div>
        <div class="row package-grids mt-5">
          @foreach($blog as $page)
          <div class="col-md-4 pricing"">
            <a href="{{route('front.page', $page->slug)}}">
              <div class="price-top">
                <img src="/resize/350/232?img={{$page->image}}" alt="{{$page->title}}" class="img-fluid" />
              </div>
              <div class="price-bottom p-4">
                <h4 class="text-dark mb-3" style="height: 64px;overflow: hidden;">{{$page->title}}</h4>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection


@push('scripts')
<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        items: 1,
        slideTransition: 'linear',
        // autoWidth: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        // autoplayTimeout: 10000,
        // autoplaySpeed: 2000,
        // smartSpeed: 10000,
        // fluidSpeed: 25000
        responsive : {
            // breakpoint from 0 up
            0 : {
              // stagePadding: 10,
              margin:0
            },
            // breakpoint from 480 up
            480 : {

            },
            // breakpoint from 768 up
            768 : {
              // stagePadding: 100,
              margin:0
            }
        }
    })
  });
</script>
@endpush