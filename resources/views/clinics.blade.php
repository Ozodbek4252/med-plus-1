<!DOCTYPE html>
<html>

<head>

  @include('layouts.css')
  <style type="text/css">
    .links-input {
      margin-bottom: 20px;
    }

    .link-label {
      user-select: none;
    }

    .w-5 {
      width: 20px;
    }

    span nav div {
      margin-bottom: 15px;
    }

    span nav div a {
      color: #fff;
    }

    .bg-white {
      background-color: #191c24 !important;
      background-color: #777 !important;
    }

    span[aria-current] span {
      background-color: #99999977 !important;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    @include('layouts.header')
  </div>

  <!-- doctor section -->

  <section style=" background-color: #fff; color: #000;" class="doctor_section layout_padding">
    <div class="container">
      <div style="position: relative; top: -50px; color: #000;" class="heading_container heading_center">
        <h2>
          Our Clinics
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
        </p>
      </div>

      <div class="clinics-search-div">

        <form method="get" action="{{url('/searchclinics')}}" class="clinics-search-form">
          <input class="search-input" type="search" placeholder="Search clinics..." name="clinics-search">
          <button class="clinics-search-button" name="search" type="submit">Search</button>
        </form>


        <div class="search-bottom">
          <div class="search-left">
            <p>Например:</p> <span>МРТ головного мозга</span>
          </div>
          <div class="search-right">
            <button type="button" class="btn search-modal-btn" data-toggle="modal" data-target="#exampleModal">
              Выбрать регион
            </button>
          </div>
        </div>



        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="clinics-route-div">
        <a href="{{route('user.dashboard')}}">Home</a>
      </div>



      <div class="clinics-body">
        <div class="body-left">

          <div class="filter">
            <a href="" class="filter-refresh"><i class="fas fa-sync-alt"></i> Сбросить фильтр</a>
          </div>

          <div class="result-clinics">
            <form action="{{url('/filter')}}" method="get" class="d-flex flex-wrap">
              <div class="form-group col-lg-3">
                <label class="control-label">Режим работы</label>
                <div>
                  <select name="one" class="course">
                    <option>Все</option>
                    <option value="B.A">Круглосуточно</option>
                    <option value="B.COM">По выходным</option>
                    <option value="B.SC">Работают сейчас</option>
                  </select>
                </div>
              </div>

              <div class="form-group col-lg-3">
                <label class="control-label">Тип клиники</label>
                <div>
                  <select name="two" class="course">
                    <option>Все</option>
                    <option value="B.A">Государственная</option>
                    <option value="B.COM">Частная</option>
                  </select>
                </div>
              </div>

              <div class="form-group col-lg-3">
                <label class="control-label">Специализация</label>
                <div>
                  <select name="three" class="course">
                    <option>Все</option>
                    <option value="B.A">Акушерство</option>
                    <option value="B.COM">Аллергология</option>
                    <option value="B.COM">Ангиография</option>
                    <option value="B.COM">Андрология</option>
                    <option value="B.COM">Анестезиология</option>
                    <!-- keep going... -->
                  </select>
                </div>
              </div>

              <div class="form-group col-lg-3">
                <label class="control-label">С онлайн записью</label>
                <div>
                  <select name="four" class="course">
                    <option>Все</option>
                    <option value="B.A">Да</option>
                    <option value="B.COM">Нет</option>
                  </select>
                </div>
              </div>

              <div class="form-group col-lg-3">
                <label class="control-label">Время записи онлайн</label>
                <div>
                  <select name="five" class="course">
                    <option>Select</option>
                    <option value="B.A">B.A</option>
                    <option value="B.COM">B.COM</option>
                    <option value="B.SC">B.SC</option>
                  </select>
                </div>
              </div>

              <div class="form-group col-lg-3">
                <label style="height: 16px;"></label>
                <div>
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </div>

            </form>
          </div>



          <div class="card-wrapper">
            <div class="clinics-to-doctors">
              <div class="clinics-route clinics-border">
                <span>КЛИНИКИ</span>
              </div>
              <div class="clinics-route doctors-border">
                <span>ВРАЧИ</span>
              </div>
            </div>






@dd('asdasdas')
          @foreach($clinic as $clinic)
            <div class="cards">
              <div class="card">
                <div class="col-lg-3">
                  <div class="card-left">
                    <a href="" class="card-logo-a">
                      <img class="card-logo" src="images/logo.jpg">
                    </a>
                    <div class="card-review">
                      <b>0</b> отзывов
                    </div>
                    <div class="card-rating">
                      <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <div class="card-reccomend">
                      РЕКОМЕНДОВАТЬ
                    </div>
                    <div class="card-like-num">
                      <i class="fas fa-smile"></i> 0
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="card-middle">
                    <a href="">
                      Клиника
                      <b>{{ $clinic->name }}</b>
                    </a>
                    <div class="card-links">
                      @if($clinic->email == null && $clinic->tg == null && 
                          $clinic->fb == null && $clinic->insta == null)
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-telegram"></i>
                        <i class="fab fa-instagram"></i>
                      @else
                        @if($clinic->fb != null)
                          <a href="{{$clinic->fb}}"><i class="fab fa-facebook"></i></a>
                        @endif
                        @if($clinic->email != null)
                          <a href="{{$clinic->email}}"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($clinic->tg != null)
                          <a href="{{$clinic->tg}}"><i class="fab fa-telegram"></i></a>
                        @endif
                        @if($clinic->insta != null)
                          <a href="{{$clinic->insta}}"><i class="fab fa-instagram"></i></a>
                        @endif
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-lg-5">
                    <div class="card-right">
                      <div class="card-address">
                        <i class="fas fa-map-marker-alt"></i>

                        @if($clinic->state == null && $clinic->city == null &&
                            $clinic->street == null && $clinic->apartment == null)
                        <p>Алмазарский район, г. Ташкент, проезд Лабзак, 10 Лабзак, Напротив главного входа парка Локомотив Анхор</p>
                        @else
                          @if($clinic->apartment!=null)
                            {{$clinic->apartment}}
                          @endif
                          @if($clinic->street!=null)
                            {{$clinic->street}}
                          @endif
                          @if($clinic->city!=null)
                            {{$clinic->city}}
                          @endif
                          @if($clinic->state!=null)
                            {{$clinic->state}}
                          @endif
                        @endif

                      </div>
                      <div class="card-metro">
                        <i class="fab fa-monero"></i><span>Minor</span>
                      </div>
                      <div class="card-time">
                        <i class="far fa-clock"></i>
                        <ul>
                          <li></li>
                              @if($clinic->mon!=null)
                                <li style="line-height: 100%;">Mon: {{$clinic->mon}}</li>
                              @endif
                              @if($clinic->tue!=null)
                                <li style="line-height: 100%;">Tue: {{$clinic->tue}}</li>
                              @endif
                              @if($clinic->wed!=null)
                                <li style="line-height: 100%;">Wed: {{$clinic->wed}}</li>
                              @endif
                              @if($clinic->thu!=null)
                                <li style="line-height: 100%;">Thu: {{$clinic->thu}}</li>
                              @endif
                              @if($clinic->fri!=null)
                                <li style="line-height: 100%;">Fri: {{$clinic->fri}}</li>
                              @endif
                              @if($clinic->sat!=null)
                                <li style="line-height: 100%;">Sat: {{$clinic->sat}}</li>
                              @endif
                              @if($clinic->sun!=null)
                                <li style="line-height: 100%;">Sun: {{$clinic->sun}}</li>
                              @endif

                        </ul>
                      </div>
                      <div class="card-phone">
                        <a href="tel:+998944424252">
                          <i class="fas fa-phone-alt"></i>
                          +998 94 442 42 52
                        </a>
                      </div>
                      <div class="card-btns">
                        <button class="card-btn-1">Заказать звонок</button>
                        <button class="card-btn-2">Записаться на прием</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>

      <div class="body-right">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.9914989890217!2d69.18400971542265!3d41.287289479273426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae898229c628b7%3A0x4d98781957ca36ab!2s7%20Lutfi%20Street%2C%20Tashkent%20100138!5e0!3m2!1sen!2s!4v1639133956960!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>


    </div>
  </section>
  <!-- end doctor section -->


  @include('layouts.footer')

  @include('layouts.script')
</body>

</html>