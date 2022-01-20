<!DOCTYPE html>
<html>

<head>
  <base href="/public">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>INSPINIA | Data Tables</title>

  <link href="admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
  <link href="admin/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css" rel="stylesheet">
  <link href="admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="admin/css/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="admin/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
  <link href="admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <link href="admin/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
  <link href="admin/css/plugins/cropper/cropper.min.css" rel="stylesheet">
  <link href="admin/css/plugins/switchery/switchery.css" rel="stylesheet">
  <link href="admin/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
  <link href="admin/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
  <link href="admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
  <link href="admin/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
  <link href="admin/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <link href="admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
  <link href="admin/css/plugins/select2/select2.min.css" rel="stylesheet">
  <link href="admin/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
  <link href="admin/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">
  <link href="admin/css/animate.css" rel="stylesheet">
  <link href="admin/css/style.css" rel="stylesheet">





</head>

<body>

  <div id="wrapper">

    @include("dashboards.admins.layouts.sidebar")

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        @include("dashboards.admins.layouts.navbar")
      </div>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>Data Tables</h2>
          <ol class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a>Tables</a>
            </li>
            <li class="active">
              <strong>Data Tables</strong>
            </li>
          </ol>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">

        <form method="post" action="{{ route('addClinicSave') }}">
          @csrf

          <div class="clients-list">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#tab-1">
                  Uzbek</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#tab-2">
                  Русский</a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane active">

                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                      <div class="ibox-content">

                        <!-- Name, Phone -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="name_uz">Name</label>
                                    <input style="background-color: #99999915;" name="name_uz" type="text" class="form-control" id="name_uz" placeholder="Clinic Name" required>
                                  </div>

                                  <div class="col-md-6">
                                    <label for="phone">Phone</label>
                                    <input style="background-color: #99999915;" name="phone" data-mask="+999 99 999 99 99" type="text" class="form-control" id="phone" placeholder="+998 98 765 43 21" required>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Owner, Type, Category -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="owner">
                                      Owner
                                    </label>
                                    <select name="owner" id="owner"class="select2_demo_1 form-control">
                                      <option></option>
                                      @foreach($owner as $owner)
                                      <option value="{{$owner->id}}">{{$owner->last_name}} {{$owner->first_name}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                    <label for="type">
                                      Type
                                    </label>
                                    <select name="type" id="type" class="select2_demo_2 form-control">
                                      <option></option>
                                      @foreach($clinicType as $clinicType)
                                      <option value="{{$clinicType->id}}">{{$clinicType->type_uz}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                    <label for="category">
                                      Category
                                    </label>
                                    <select name="category" id="category" class="select2_demo_3 form-control">
                                      <option></option>
                                      @foreach($clinicCategory as $clinicCategory)
                                      <option value="{{$clinicCategory->id}}">{{$clinicCategory->category_uz}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Address -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row" style="margin-bottom: 15px;">
                                  <div class="col-md-6">
                                    <label for="state_uz">State</label>
                                    <select style="background-color: #99999915;" name="state_uz" id="state_uz" class="form-control" required="">
                                      <option>Choose...</option>
                                      @foreach($states as $state)
                                      <option value="{{$state->id}}">{{$state->state_uz}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="col-md-6">
                                    <label for="city_uz">City</label>
                                    <input style="background-color: #99999915;" name="city_uz" type="text" placeholder="Shahar / Tuman" class="form-control" id="city_uz" required>
                                  </div>
                                </div>

                                <div class="row" style="margin-bottom: 15px;">
                                  <div class="col-md-6">
                                    <label for="street_uz">Address (optional)</label>
                                    <input style="background-color: #99999915;" name="street_uz" type="text" class="form-control" id="street_uz" placeholder="Ko'cha">
                                  </div>

                                  <div class="col-md-6">
                                    <label for="apartment_uz">Address 2 (optional)</label>
                                    <input style="background-color: #99999915;" name="apartment_uz" type="text" class="form-control" id="apartment_uz" placeholder="Apartment, studio, or floor">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="moljal_uz">Moljal (optional)</label>
                                    <input style="background-color: #99999915;" name="moljal_uz" type="text" class="form-control" id="moljal_uz" placeholder="">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Doctors -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="doctors">Doctors</label>
                                    <select name="doctors[]" id="doctors" class="form-control dual_select" multiple>
                                      <option></option>
                                      @foreach($doctors as $doctor)
                                      <option value="Cat1">{{$doctor->last_name}} {{$doctor->first_name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Work Days -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12">
                                    <labeL>Ish Kunlari</labeL>

                                    <table style="margin: 0 15px; width: calc(100% - 30px);" class="table table-dark">
                                      <tbody>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="mon" value="check" class="form-check-input moncheck" type="checkbox" id="moncheck">
                                              <label style="-webkit-touch-callout: none; -webkit-user-select: none;-khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;" class="form-check-label" for="moncheck">
                                                Monday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="monstart" type="time" class="monday" disabled>
                                              </div>
                                              <div>
                                                <input name="monend" type="time" class="monday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="tue" value="check" class="form-check-input tuecheck" type="checkbox" id="tuecheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none;  user-select: none;" class="form-check-label" for="tuecheck">
                                                Tuesday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="tuestart" type="time" class="tuesday" disabled>
                                              </div>
                                              <div>
                                                <input name="tueend" type="time" class="tuesday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="wed" value="check" class="form-check-input wedcheck" type="checkbox" id="wedcheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select:none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="wedcheck">
                                                Wednesday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="wedstart" type="time" class="wednesday" disabled>
                                              </div>
                                              <div>
                                                <input name="wedend" type="time" class="wednesday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="thu" value="check" class="form-check-input thucheck" type="checkbox" id="thucheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="thucheck">
                                                Thursday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="thustart" type="time" class="thursday" disabled>
                                              </div>
                                              <div>
                                                <input name="thuend" type="time" class="thursday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="fri" value="check" class="form-check-input fricheck" type="checkbox" id="fricheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="fricheck">
                                                Friday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="fristart" type="time" class="friday" disabled>
                                              </div>
                                              <div>
                                                <input name="friend" type="time" class="friday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="sat" value="check" class="form-check-input satcheck" type="checkbox" id="satcheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="satcheck">
                                                Saturday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="satstart" type="time" class="saturday" disabled>
                                              </div>
                                              <div>
                                                <input name="satend" type="time" class="saturday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                                            <div class="form-check">
                                              <input name="sun" value="check" class="form-check-input suncheck" type="checkbox" id="suncheck">
                                              <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="suncheck">
                                                Sunday
                                              </label>
                                            </div>
                                          </td>
                                          <td class="form-group col-md-6">
                                            <div class="form-row" style="display: flex;">
                                              <div style="padding-right: 10px;">
                                                <input name="sunstart" type="time" class="sunday" disabled>
                                              </div>
                                              <div>
                                                <input name="sunend" type="time" class="sunday" disabled>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Links -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="link-label" for="link-email" style="margin-top: 7px;">Email</label>
                                    <input id="link-email" class="links-input form-control mt-2" style="width: 100%;" type="text" name="email" placeholder="Enter your email address...">
                                  </div>

                                  <div class="col-md-6">

                                    <label class="link-label" for="link-tg" style="margin-top: 7px;">Telegram</label>
                                    <input id="link-tg" class="links-input form-control mt-2" style="width: 100%;" type="text" name="tg" placeholder="Paste telegram link...">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="link-label" for="link-fb" style="margin-top: 7px;">Facebook</label>
                                    <input id="link-fb" class="links-input form-control mt-2" style="width: 100%;" type="text" name="fb" placeholder="Paste facebook link...">
                                  </div>

                                  <div class="col-md-6">
                                    <label class="link-label" for="link-insta" style="margin-top: 7px;">Instagram</label>
                                    <input id="link-insta" class="links-input form-control mt-2" style="width: 100%;" type="text" name="insta" placeholder="Paste instagram link...">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Logo, Map -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label for="logo">Logo</label>
                                      <input style="background-color: #99999915;" name="logo" type="text" class="form-control" id="logo" placeholder="Clinic Name" required>
                                    </div>

                                    <div class="col-md-6">
                                      <label for="location">Location</label>
                                      <input style="background-color: #99999915;" name="location" data-mask="+999 99 999 99 99" type="text" class="form-control" id="location" placeholder="+998 98 765 43 21" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Info -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12" style="display: flex; flex-direction: column;">
                                    <label for="info">Info</label>
                                    <textarea name="info" id="info" data-provide="markdown" class="form-control" placeholder="Info..." rows="10"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Gallery -->
                        <!-- <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12" style="display: flex; flex-direction: column;">
                                    <label for="name">Name</label>
                                    <textarea name="comment" data-provide="markdown" placeholder="Comment..." rows="10"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div> -->

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div id="tab-2" class="tab-pane">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                      <div class="ibox-content">

                        <!-- Name Ru -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="name_ru">Имя</label>
                                    <input name="name_ru" id="name_ru" style="background-color: #99999915;" type="text" class="form-control" placeholder="Название клиники" required>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Address Ru -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row" style="margin-bottom: 15px;">
                                  <div class="col-md-6">
                                    <label for="state_ru">Облас</label>
                                    <select name="state_ru" id="state_ru" style="background-color: #99999915;" class="form-control" required="">
                                      <option>Выбирать...</option>
                                      @foreach($states as $state)
                                      <option value="{{$state->id}}">{{$state->state_ru}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="col-md-6">
                                    <label for="city_ru">Город</label>
                                    <input name="city_ru" id="city_ru" style="background-color: #99999915;" type="text" placeholder="Город / Район" class="form-control" required>
                                  </div>
                                </div>

                                <div class="row" style="margin-bottom: 15px;">
                                  <div class="col-md-6">
                                    <label for="street_ru">Адрес (по желанию)</label>
                                    <input name="street_ru" id="street_ru" style="background-color: #99999915;" type="text" class="form-control" placeholder="улица">
                                  </div>

                                  <div class="col-md-6">
                                    <label for="apartment_ru">Адрес 2 (по желанию)</label>
                                    <input name="apartment_ru" id="apartment_ru" style="background-color: #99999915;" type="text" class="form-control" placeholder="Квартира, студия, or этаж">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="moljal_ru">Ориентр (по желанию)</label>
                                    <input id="moljal_ru" name="moljal_ru" style="background-color: #99999915;" type="text" class="form-control" placeholder="">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Info Ru -->
                        <div class="row">
                          <div class="col-lg-12">

                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12" style="display: flex; flex-direction: column;">
                                    <label for="info_ru">Информация</label>
                                    <textarea id="info_ru" name="info_ru" data-provide="markdown" class="form-control" placeholder="Информация..." rows="10"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <button type="submit" class="btn btn-primary" style="margin: 10px 15px;">Save</button>
        </form>
      </div>

    </div>
  </div>



  <!-- Bootstrap markdown -->
  <script src="js/plugins/bootstrap-markdown/bootstrap-markdown.js"></script>
  <script src="js/plugins/bootstrap-markdown/markdown.js"></script>

  <script src="admin/js/plugins/dataTables/datatables.min.js"></script>

  <!-- Mainly scripts -->
  <script src="admin/js/jquery-3.1.1.min.js"></script>
  <script src="admin/js/bootstrap.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="admin/js/inspinia.js"></script>
  <script src="admin/js/plugins/pace/pace.min.js"></script>
  <script src="admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- Chosen -->
  <script src="admin/js/plugins/chosen/chosen.jquery.js"></script>

  <!-- JSKnob -->
  <script src="admin/js/plugins/jsKnob/jquery.knob.js"></script>

  <!-- Input Mask-->
  <script src="admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>

  <!-- Data picker -->
  <script src="admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>

  <!-- NouSlider -->
  <script src="admin/js/plugins/nouslider/jquery.nouislider.min.js"></script>

  <!-- Switchery -->
  <script src="admin/js/plugins/switchery/switchery.js"></script>

  <!-- IonRangeSlider -->
  <script src="admin/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

  <!-- iCheck -->
  <script src="admin/js/plugins/iCheck/icheck.min.js"></script>

  <!-- MENU -->
  <script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

  <!-- Color picker -->
  <script src="admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

  <!-- Image cropper -->
  <script src="admin/js/plugins/cropper/cropper.min.js"></script>

  <!-- Date range use moment.js same as full calendar plugin -->
  <script src="admin/js/plugins/fullcalendar/moment.min.js"></script>

  <!-- Select2 -->
  <script src="admin/js/plugins/select2/select2.full.min.js"></script>

  <!-- TouchSpin -->
  <script src="admin/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

  <!-- Tags Input -->
  <script src="admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

  <!-- Dual Listbox -->
  <script src="admin/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>

  <script>
    $(document).ready(function() {
      $(".select2_demo_1").select2({
        placeholder: "Select owner",
        allowClear: true
      });
      $(".select2_demo_2").select2({
        placeholder: "Select type",
        allowClear: true
      });
      $(".select2_demo_3").select2({
        placeholder: "Select category",
        allowClear: true
      });
    });

    $('.dual_select').bootstrapDualListbox({
      selectorMinimalHeight: 160
    });

    var checkboxes = $(".moncheck"),
      submitButt = $(".monday");

    var tuecheckboxes = $(".tuecheck"),
      tuesubmitButt = $(".tuesday");

    var wedcheckboxes = $(".wedcheck"),
      wedsubmitButt = $(".wednesday");

    var thucheckboxes = $(".thucheck"),
      thusubmitButt = $(".thursday");

    var fricheckboxes = $(".fricheck"),
      frisubmitButt = $(".friday");

    var satcheckboxes = $(".satcheck"),
      satsubmitButt = $(".saturday");

    var suncheckboxes = $(".suncheck"),
      sunsubmitButt = $(".sunday");

    checkboxes.click(function() {
      submitButt.attr("disabled", !checkboxes.is(":checked"));
    });
    tuecheckboxes.click(function() {
      tuesubmitButt.attr("disabled", !tuecheckboxes.is(":checked"));
    });
    wedcheckboxes.click(function() {
      wedsubmitButt.attr("disabled", !wedcheckboxes.is(":checked"));
    });
    thucheckboxes.click(function() {
      thusubmitButt.attr("disabled", !thucheckboxes.is(":checked"));
    });
    fricheckboxes.click(function() {
      frisubmitButt.attr("disabled", !fricheckboxes.is(":checked"));
    });
    satcheckboxes.click(function() {
      satsubmitButt.attr("disabled", !satcheckboxes.is(":checked"));
    });
    suncheckboxes.click(function() {
      sunsubmitButt.attr("disabled", !suncheckboxes.is(":checked"));
    });
  </script>






  <script>
    $(document).ready(function() {
      $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [{
            extend: 'copy'
          },
          {
            extend: 'csv'
          },
          {
            extend: 'excel',
            title: 'ExampleFile'
          },
          {
            extend: 'pdf',
            title: 'ExampleFile'
          },

          {
            extend: 'print',
            customize: function(win) {
              $(win.document.body).addClass('white-bg');
              $(win.document.body).css('font-size', '10px');

              $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            }
          }
        ]

      });

    });
  </script>

</body>

</html>