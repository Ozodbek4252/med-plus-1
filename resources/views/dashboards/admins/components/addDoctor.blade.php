<!DOCTYPE html>
<html>

<head>
  <base href="/public">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="admin/css/plugins/iCheck/custom.css" rel="stylesheet" />
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
  <link href="admin/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
  <link href="admin/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
  <link href="admin/css/plugins/select2/select2.min.css" rel="stylesheet">
  <link href="admin/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
  <link href="admin/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

  <link href="admin/css/animate.css" rel="stylesheet" />
  <link href="admin/css/style.css" rel="stylesheet" />

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

        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>
                  All form elements
                  <small>With custom checbox and radion elements.</small>
                </h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a></li>
                    <li><a href="#">Config option 2</a></li>
                  </ul>
                  <a class="close-link">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">
                <form method="post" action="{{route('admin.addDoctor')}}" class="form-horizontal" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Full name</label>
                    <div class="col-sm-10" style="display: flex;">
                      <input required name="first_name" type="text" placeholder="Ism" class="form-control" style="margin-right: 10px;" />
                      <input required name="last_name" type="text" placeholder="Familya" class="form-control" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email / Phone</label>
                    <div class="col-sm-10" style="display: flex;">
                      <input name="email" type="email" placeholder="Email" class="form-control" style="margin-right: 10px;" />
                      <input name="phone" type="text" placeholder="Phone" class="form-control" data-mask="+999 99 999 99 99" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Profile Image</label>
                    <div class="col-sm-10" style="display: flex;">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="ibox float-e-margins">
                            <div class="ibox-content">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="image-crop">
                                    <img src="admin/img/doctor1.jpg">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <h4>Preview image</h4>
                                  <div class="img-preview img-preview-sm"></div>
                                  <h4>Comon method</h4>
                                  <p>
                                    You can upload new image to crop container and easy download new cropped image.
                                  </p>
                                  <div class="btn-group">
                                    <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                      <input type="file" accept="image/*" name="imagee" id="inputImag">
                                      <input type="file" accept="image/*" name="image" id="inputImage" class="hide">
                                      Upload new image
                                    </label>
                                    <label title="Download image" id="download" class="btn btn-primary">Download</label>
                                  </div>
                                  <div class="btn-group">
                                    <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                    <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                    <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                    <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                    <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Details</label>
                    <div class="col-sm-10" style="display: flex;">
                      <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input name="date_of_birth" type="text" class="form-control" value="10/11/2013" />
                      </div>
                      <div class="col-md-4">
                        <select name="clinic" class="select2_demo_3 form-control">
                          <option></option>
                          @foreach($clinic as $clinic)
                            <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ixtissosligi</label>
                    <div class="col-sm-10" style="display: flex;">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="ibox">
                            <div class="ibox-content">
                              <!-- <form id="form" action="#" class="wizard-big"> -->
                              <select name="speciality[]" class="form-control dual_select" multiple>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                              </select>
                              <!-- </form> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ish kunlari</label>
                    <div class="col-sm-10" style="display: flex;">
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


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ish tajribasi</label>
                    <div class="col-sm-2" style="display: flex;">
                      <input name="experience" type="text" placeholder="Misol: 6 yil" class="form-control" style="margin-right: 10px;" />
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Summary</label>
                    <div class="col-sm-2" style="display: flex;">
                      <!-- <input type="text" placeholder="Misol: 6 yil" class="form-control" style="margin-right: 10px;" /> -->
                      <textarea id="summary" name="summary" rows="8" cols="60" style="width: 300px;">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
                      </textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2" style="display: flex;">
                      <button type="submit" class="btn btn-w-m btn-primary" style="margin-left: 180px;">Save</button>
                    </div>
                  </div>
                </form>


              </div>

            </div>
          </div>
        </div>








      </div>




    </div>

  </div>











  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


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

  <!-- Clock picker -->
  <script src="admin/js/plugins/clockpicker/clockpicker.js"></script>

  <!-- Image cropper -->
  <script src="admin/js/plugins/cropper/cropper.min.js"></script>

  <!-- Date range use moment.js same as full calendar plugin -->
  <script src="admin/js/plugins/fullcalendar/moment.min.js"></script>

  <!-- Date range picker -->
  <script src="admin/js/plugins/daterangepicker/daterangepicker.js"></script>

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
      $('.tagsinput').tagsinput({
        tagClass: 'label label-primary',
      });

      var $image = $(".image-crop > img")
      $($image).cropper({
        aspectRatio: 1.618,
        preview: ".img-preview",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage = $("#inputImage");
      if (window.FileReader) {
        $inputImage.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage.val("");
              $image.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image.cropper("getDataURL"));
      });

      $("#zoomIn").click(function() {
        $image.cropper("zoom", 0.1);
      });

      $("#zoomOut").click(function() {
        $image.cropper("zoom", -0.1);
      });

      $("#rotateLeft").click(function() {
        $image.cropper("rotate", 45);
      });

      $("#rotateRight").click(function() {
        $image.cropper("rotate", -45);
      });

      $("#setDrag").click(function() {
        $image.cropper("setDragMode", "crop");
      });

      $('#data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
      });

      $('#data_2 .input-group.date').datepicker({
        startView: 1,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "dd/mm/yyyy"
      });

      $('#data_3 .input-group.date').datepicker({
        startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
      });

      $('#data_4 .input-group.date').datepicker({
        minViewMode: 1,
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        todayHighlight: true
      });

      $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
      });


      $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green'
      });

      $('.demo1').colorpicker();

      $('.clockpicker').clockpicker();

      $('input[name="daterange"]').daterangepicker();

      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

      $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-primary',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Cancel',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      });

      $(".select2_demo_1").select2();
      $(".select2_demo_2").select2();
      $(".select2_demo_3").select2({
        placeholder: "Select a clinic",
        allowClear: true
      });


      $(".touchspin1").TouchSpin({
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
      });

      $(".touchspin2").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%',
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
      });

      $(".touchspin3").TouchSpin({
        verticalbuttons: true,
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
      });

      $('.dual_select').bootstrapDualListbox({
        selectorMinimalHeight: 160
      });


    });

    $('.chosen-select').chosen({
      width: "100%"
    });

    $("#ionrange_1").ionRangeSlider({
      min: 0,
      max: 5000,
      type: 'double',
      prefix: "$",
      maxPostfix: "+",
      prettify: false,
      hasGrid: true
    });

    $("#ionrange_2").ionRangeSlider({
      min: 0,
      max: 10,
      type: 'single',
      step: 0.1,
      postfix: " carats",
      prettify: false,
      hasGrid: true
    });

    $("#ionrange_3").ionRangeSlider({
      min: -50,
      max: 50,
      from: 0,
      postfix: "°",
      prettify: false,
      hasGrid: true
    });

    $("#ionrange_4").ionRangeSlider({
      values: [
        "January", "February", "March",
        "April", "May", "June",
        "July", "August", "September",
        "October", "November", "December"
      ],
      type: 'single',
      hasGrid: true
    });

    $("#ionrange_5").ionRangeSlider({
      min: 10000,
      max: 100000,
      step: 100,
      postfix: " km",
      from: 55000,
      hideMinMax: true,
      hideFromTo: false
    });

    $(".dial").knob();

    var basic_slider = document.getElementById('basic_slider');

    noUiSlider.create(basic_slider, {
      start: 40,
      behaviour: 'tap',
      connect: 'upper',
      range: {
        'min': 20,
        'max': 80
      }
    });

    var range_slider = document.getElementById('range_slider');

    noUiSlider.create(range_slider, {
      start: [40, 60],
      behaviour: 'drag',
      connect: true,
      range: {
        'min': 20,
        'max': 80
      }
    });

    var drag_fixed = document.getElementById('drag-fixed');

    noUiSlider.create(drag_fixed, {
      start: [40, 60],
      behaviour: 'drag-fixed',
      connect: true,
      range: {
        'min': 20,
        'max': 80
      }
    });

    $(document).ready(function() {
      $(".i-checks").iCheck({
        checkboxClass: "icheckbox_square-green",
        radioClass: "iradio_square-green",
      });
    });
  </script>
  <script type="text/javascript">
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


</body>

</html>