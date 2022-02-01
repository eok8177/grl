@extends('front.layout')

@section('content')

<div class="inner-banner-w3ls">
  <div class="container">
  </div>
</div>

<div class="breadcrumb-agile">
  <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Головна</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Про нас</li>
    </ol>
  </div>
</div>

<section class="about">
  <div class="container py-xl-5 py-lg-3">
    <div class="w3ls-titles text-center mb-md-5 mb-4">
      <h3 class="title">Голопристанська районна лікарня</h3>
      <span>
        <i class="fas fa-user-md"></i>
      </span>
    </div>
    <p class="aboutpara text-center mx-auto">У традиціях лікарні постійне підвищення професійної майстерності, освоєння і впровадження в практику сучасних лікувально-діагностичних та комп’ютерних технологій, досягнень медичної науки. Девіз лікарні - «Здоров’я – найвища цінність» - свідчення високої відповідальності закладу перед суспільством.</p>

    <section class="team py-5">
      <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
          <h3 class="title">Наші лікарі</h3>
          <span>
            <i class="fas fa-user-md"></i>
          </span>
        </div>
        <div class="row inner-sec-w3layouts-agileinfo">

          @foreach($doctors as $doctor)
          <div class="col-md-4 team-grids text-center mb-4" @if($doctor->text) type="button" data-toggle="modal" data-target="#doctor_{{$doctor->id}}" @endif>
            <img src="/resize/450/400?img={{$doctor->image}}" alt="{{$doctor->title}}" class="img-fluid" />
            <div class="team-info">
              <div class="caption">
                <h4>{{$doctor->title}}</h4>
                <h6>{{$doctor->work}}</h6>
              </div>
            </div>
          </div>

          @if($doctor->text)
          <div class="modal fade" id="doctor_{{$doctor->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card">
                  {{-- <img src="/resize/500/0?img={{$doctor->image}}" alt="{{$doctor->title}}" class="img-fluid" /> --}}
                  <div class="card-body">
                    {!! $doctor->text !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif

          @endforeach

        </div>
      </div>
    </section>


    <div class="w3ls-titles text-center mb-5">
      <h3 class="title">Останні новини</h3>
      <span>
        <i class="fas fa-user-md"></i>
      </span>
      <!-- <p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
    </div>


    <div class="row about_grids mt-5">
      @foreach($pages as $page)
      <div class="col-lg-4" v-for="item in pages">
        <img src="/resize/450/280?img={{$page->image}}" alt="{{$page->title}}" class="img-fluid" />
        <h3 class="mt-3 text-dark" style="height: 56px;overflow: hidden;">{{$page->title}}</h3>
        <div class="my-3" style="height: 60px;overflow: hidden;">{!! $page->preview !!}</div>
        <a href="{{route('front.page', $page->slug)}}">Детальніше</a>
      </div>
      @endforeach
    </div>


  </div>
</section>

@endsection