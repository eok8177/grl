<!DOCTYPE html>
<html lang="ua">

<head>
  <title>{{ config('app.name', 'Голопристанська районна лікарня') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="/css/front.css?v={{time()}}" type="text/css" media="all" />

  <link rel="stylesheet" href="/css/fontawesome-all.css">

  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

  @stack('styles')
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KS3HHSY17R"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KS3HHSY17R');
  </script>
</head>

<body>

  @php
    $categories = App\Models\PageCategory::where('published', 1)
            ->orderBy('id', 'asc')
            ->get();
  @endphp

    <div class="main-top">
      <nav class="navbar navbar-expand-lg navbar-light isFixed">
        <div class="container">

            <a href="/" class="navbar-brand font-weight-bold font-italic">
              <span>Голопристанська</span><br> районна лікарня
            </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item mx-lg-4 my-lg-0 my-3" active-class="active">
                <a href="/about" class="nav-link">Про нас</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  active-class="active" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  Інформація
                </a>
                <div class="dropdown-menu">

                  @foreach($categories as $category)
                    <a href="{{route('front.pages', $category->slug)}}" class="dropdown-item">{{$category->title}}</a>
                  @endforeach

                  <!-- <a href="{ name: 'Category' }" class="dropdown-item">Котегории статей</a> -->

                  <!-- <div class="dropdown-divider"></div> -->

                  <!-- <a href="{ name: 'Gallery' }" class="dropdown-item">Галерея</a> -->

                  <!-- <div class="dropdown-divider"></div> -->
                  <!-- <a href="{ name: 'Post' }" class="dropdown-item">Стаття</a> -->
                </div>
              </li>
              <li class="nav-item mx-lg-4 my-lg-0 my-3" active-class="active">
                <a href="/contact" class="nav-link">Контакти</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

  @yield('content')


  <footer>
    <div class="w3ls-footer-grids pt-sm-4 pt-3">
      <div class="container pt-xl-3 pb-xl-2 pb-lg-1">
        <div class="row">
          <div class="col-md-4 w3l-footer">
            <h2 class="mb-sm-3 mb-2">
              <a href="/" class="text-white font-italic font-weight-bold">
                <span>Голопристанська</span><br> районна лікарня
              </a>
            </h2>
            <p>Якісна, вчасна, професійна допомога</p>
          </div>
          <div class="col-md-5 w3l-footer my-md-0 my-4">
            <h3 class="mb-sm-3 mb-2 text-white">Адреса</h3>
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-location-arrow float-left"></i>
                <p class="ml-4">Санаторна 7,
                  <span>Гола Пристань,</span>Херсонська обл. </p>
                <div class="clearfix"></div>
              </li>
              <li class="my-3">
                <i class="fas fa-phone float-left"></i>
                <p class="ml-4">(05539) 2-62-35</p>
                <div class="clearfix"></div>
              </li>
              <li>
                <i class="far fa-envelope-open float-left"></i>
                <a href="mailto:goprycrb@gmail.com" class="ml-3">goprycrb@gmail.com</a>
                <div class="clearfix"></div>
              </li>
            </ul>
          </div>
          <div class="col-md-3 w3l-footer">
            <h3 class="mb-sm-3 mb-2 text-white">Розділи</h3>
            <div class="nav-w3-l">
              <ul class="list-unstyled">
                <li><a href="/about">Про нас</a></li>
                <li class="mt-2"><a href="/contact">Контакти</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="border-top mt-2 pt-lg-1 pt-1 pb-lg-0 pb-1 text-center">
          <p class="copy-right-grids mt-lg-1">© 2021 All Rights Reserved | Develop by
            <a href="https://www.linkedin.com/in/evgen-koromyslov-84351b105/" target="_blank">Evgen</a>
          </p>
        </div>
      </div>
    </div>
  </footer>


  <script src="/js/front.js?v={{time()}}"></script>

  <!-- smooth scrolling -->
  <script src="/js/SmoothScroll.min.js"></script>


  @stack('scripts')
</body>

</html>