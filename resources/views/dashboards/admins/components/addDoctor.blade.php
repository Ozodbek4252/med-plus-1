<!DOCTYPE html>
<html>

<head>
  <base href="/public">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="admin/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
  <link href="admin/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
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

  <title>INSPINIA | Basic Form</title>

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
          <h2>Doctor Form</h2>
          <ol class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a>Forms</a>
            </li>
            <li class="active">
              <strong>Doctor Form</strong>
            </li>
          </ol>
        </div>
        <div class="col-lg-2"></div>
      </div>

      <div class="wrapper wrapper-content animated fadeInRight">
        <form method="post" action="{{ route('admin.addDoctor') }}">
          @csrf

          <div class="clients-list">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#tab-1">
                  Русский</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#tab-2">
                  Uzbek</a>
              </li>
            </ul>

            <div class="tab-content">
              <div id="tab-1" class="tab-pane active">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                      <div class="ibox-content">

                        <!-- Full Name Ru -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="first_name_ru">Имя</label>
                                    <input style="background-color: #99999915;" name="first_name_ru" type="text" class="form-control" id="first_name_ru" placeholder="Имя" required>
                                  </div>

                                  <div class="col-md-6">
                                    <label for="last_name_ru">Фамилия</label>
                                    <input style="background-color: #99999915;" name="last_name_ru" type="text" class="form-control" id="last_name_ru" placeholder="Фамилия" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Email, Phone -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="email">Адрес электронной почты</label>
                                    <input style="background-color: #99999915;" name="email" type="email" class="form-control" id="email" placeholder="Адрес электронной почты">
                                  </div>

                                  <div class="col-md-6">
                                    <label for="phone">Телефонный номер</label>
                                    <input style="background-color: #99999915;" name="phone" data-mask="+999 99 999 99 99" type="text" class="form-control" id="phone" placeholder="+998 99 999 99 99">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Date_of_birth, Image -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="date_of_birth">Дата рождения</label>
                                    <div class="input-group date">
                                      <span style="background-color: #99999915;" class="input-group-addon"><i class="fa fa-calendar"></i></span><input name="date_of_birth" id="date_of_birth" type="text" class="form-control" value="10/11/2013" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="image">Фото</label>
                                    <input name="image" type="file" class="form-control" id="image">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Specialities -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                $specialities
                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="speciality">Специальности</label>
                                    <select id="speciality" name="speciality[]" class="form-control dual_select" multiple>
                                      @foreach($specialities as $speciality)
                                      <option value="{{$speciality->id}}">{{$speciality->name_ru}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Clinics -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="clinics">Клиники</label>
                                    <select id="clinics" name="clinics[]" class="form-control dual_select" multiple>
                                      <option value="">dsfsd</option>
                                      <option value="">dsfsahjkhjsd</option>
                                      <option value="">dsfhsd</option>
                                      <option value="">dsffwesd</option>
                                    </select>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Experience -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="experience">Опыт</label>
                                    <input style="background-color: #99999915;" name="experience" type="text" class="form-control" id="experience" placeholder="8 лет">
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Clinics -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="workingDays">Рабочие дни</label>

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

                        <!-- Summary Ru -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12" style="display: flex; flex-direction: column;">
                                    <label for="summary_ru">Краткое описание</label>
                                    <textarea name="summary_ru" id="summary_ru" data-provide="markdown" class="form-control" placeholder="Краткое описание..." rows="10"></textarea>
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

              <div id="tab-2" class="tab-pane">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                      <div class="ibox-content">

                        <!-- Full Name Uz -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="first_name_uz">Ism</label>
                                    <input style="background-color: #99999915;" name="first_name_zu" type="text" class="form-control" id="first_name_uz" placeholder="Ism">
                                  </div>

                                  <div class="col-md-6">
                                    <label for="last_name_uz">Familiya</label>
                                    <input style="background-color: #99999915;" name="last_name_uz" type="text" class="form-control" id="last_name_uz" placeholder="Familiya">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Summary Ru -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox">
                              <div class="ibox-content">

                                <div class="row">
                                  <div class="col-md-12" style="display: flex; flex-direction: column;">
                                    <label for="summary_uz">Summary</label>
                                    <textarea name="summary_uz" id="summary_uz" data-provide="markdown" class="form-control" placeholder="Summary..." rows="10"></textarea>
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