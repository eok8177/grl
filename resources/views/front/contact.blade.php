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
      <li class="breadcrumb-item active" aria-current="page">Контакти</li>
    </ol>
  </div>
</div>

<div class="w3ls-welcome py-3">
  <div class="container py-xl-3 py-lg-3">

    <div class="w3ls-titles text-center mb-md-4 mb-3">
      <h3 class="title">Контактні телефони</h3>
    </div>

    <div class="table-responsive">
      <table class="table table-hover table-sm">
        <tr><td>Головний лікар: Житнюк Владислав Вадимович</td><td><b><a href="tel:0553926235">05539 2-62-35</a></b></td></tr>
        <tr><td>Реєстратура поліклініки</td><td><b><a href="tel:0553978660">05539 7-86-60</a></b></td></tr>
        <tr><td>Кабінет нарколога, психіатра</td><td><b><a href="tel:0553978644">05539 7-86-44</a></b></td></tr>
        <tr><td>Приймальне відділення</td><td><b><a href="tel:0553926795">05539 2-67-95</a></b></td></tr>
        <tr><td>Пологове, гінекологічне відділення</td><td><b><a href="tel:0553921562">05539 2-15-62</a></b></td></tr>
        <tr><td>Хірургічне відділення</td><td><b><a href="tel:0553921853">05539 2-18-53</a></b></td></tr>
        <tr><td>Дитяче відділення</td><td><b><a href="tel:0553921356">05539 2-13-56</a></b></td></tr>
        <tr><td>Терапевтичне відділення</td><td><b><a href="tel:0553922520">05539 2-25-20</a></b></td></tr>
        <tr><td>Неврологічне відділення</td><td><b><a href="tel:0553922675">05539 2-26-75</a></b></td></tr>
        <tr><td>Травматологічне відділення</td><td><b><a href="tel:0553922522">05539 2-25-22</a></b></td></tr>
        <tr><td>Інфекційне відділення</td><td><b><a href="tel:0553926845">05539 2-68-45</a></b></td></tr>
        <tr><td>Рентгенологічне відділення</td><td><b><a href="tel:0553921319">05539 2-13-19</a></b></td></tr>
        <tr><td>Бухгалтерія</td><td><b><a href="tel:0553926151">05539 2-61-51</a></b></td></tr>
        <tr><td>Відділ кадрів</td><td><b><a href="tel:0553926127">05539 2-61-27</a></b></td></tr>
      </table>
    </div>
  </div>
</div>

<div class="agileits-contact">
    <div class="d-flex">
      <div class="col-lg-5 w3_agileits-contact-left">
      </div>
      <div class="col-lg-7 contact-right-w3l">
        <h5 class="title-w3 text-center mb-5">Зворотній зв'зок</h5>
        <form action="{{route('front.email')}}" method="POST" class="feedback-form validate">
          {{ csrf_field() }}
          <div class="d-flex space-d-flex">
            <div class="form-group grid-inputs">
              <input type="text" class="name form-control" name="first_name" placeholder="Ім'я" required>
            </div>
            <div class="form-group grid-inputs">
              <input type="text" class="name form-control" name="last_name" placeholder="Прізвище" required>
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="name form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="name form-control" name="subject" placeholder="Тема" required>
          </div>

          <div class="form-group">
            <textarea placeholder="Ваше повідомлення" required class="form-control" name="text"></textarea>
          </div>
          <div class="success" style="display:none;">
            Ваше повідомлення надіслано
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit" value="Відправити повідомлення">
          </div>
        </form>
      </div>
    </div>
</div>



<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.643340479646!2d32.537098315970155!3d46.53495907912823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c402e96c8fd281%3A0x6b146de2f485e2e4!2z0JPQvtC70L7Qv9GA0LjRgdGC0LDQvdGB0YzQutCwINGG0LXQvdGC0YDQsNC70YzQvdCwINGA0LDQudC-0L3QvdCwINC70ZbQutCw0YDQvdGP!5e0!3m2!1suk!2sua!4v1555870258674!5m2!1suk!2sua" height="410"></iframe>
</div>

@endsection