<!DOCTYPE html>
<html>

<head>
  <base href="/public">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>INSPINIA | Data Tables</title>

  <link href="admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                  </ul>
                  <a class="close-link">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">






                <form method="post" action="{{ route('addClinicSave', $data->id) }}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input value="{{$data->name}}" style="background-color: #99999915;" name="name" type="text" class="form-control" id="name" placeholder="Clinic Name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone">Phone</label>
                      <input value="{{$data->phone}}" style="background-color: #99999915;" name="phone" type="text" class="form-control" id="phone" placeholder="+998 98 765 43 21" required>
                    </div>
                  </div>
                  <div class="form-group" style="padding: 0 15px;">
                    <label for="inputAddress">Address (optional)</label>
                    <input value="{{$address->street}}" style="background-color: #99999915;" name="street" type="text" class="form-control" id="inputAddress" placeholder="Ko'cha">
                  </div>
                  <div class="form-group" style="padding: 0 15px;">
                    <label for="inputAddress2">Address 2 (optional)</label>
                    <input value="{{$address->apartment}}" style="background-color: #99999915;" name="apartment" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input value="{{$address->city}}" style="background-color: #99999915;" name="city" type="text" placeholder="Shahar / Tuman" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select value="asd" style="background-color: #99999915;" name="state" id="inputState" class="form-control" required="">
                        <option>Choose...</option>
                        <option value="Toshkent">Toshkent</option>
                        <option selected value="Farg'ona">Farg'ona</option>
                        <option value="Andijon">Andijon</option>
                        <option value="Namangan">Namangan</option>
                        <option value="Sirdaryo">Sirdaryo</option>
                        <option value="Samarqand">Samarqand</option>
                        <option value="Jizzax">Jizzax</option>
                        <option value="Buxoro">Buxoro</option>
                        <option value="Navoiy">Navoiy</option>
                        <option value="Qashqadaryo">Qashqadaryo</option>
                        <option value="Surxondaryo">Surxondaryo</option>
                        <option value="Xorazm">Xorazm</option>
                        <option value="Qoraqolpog'iston">Qoraqolpog'iston</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip (optional)</label>
                      <input style="background-color: #99999915;" name="zip" type="text" class="form-control" id="inputZip">
                    </div>
                  </div>

                  <label for="inputState" style="padding: 0 15px;">Ish kunlari</label>
                  <table style="margin: 0 15px; width: calc(100% - 30px);" class="table table-dark">
                    <tbody>

                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->mon)
                            <input checked name="mon" value="check" class="form-check-input moncheck" type="checkbox" id="moncheck">
                            @else
                            <input name="mon" value="check" class="form-check-input moncheck" type="checkbox" id="moncheck">
                            @endif
                            <label style="-webkit-touch-callout: none; -webkit-user-select: none;-khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;" class="form-check-label" for="moncheck">
                              Monday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->mon)
                              <input value="{{substr($workday->mon, 0, 5)}}" name="monstart" type="time" class="monday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->mon, 8, 12)}}" name="monend" type="time" class="monday" disabled>
                              @else
                              <input name="monstart" type="time" class="monday" disabled>
                            </div>
                            <div>
                              <input name="monend" type="time" class="monday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->tue)
                            <input checked name="tue" value="check" class="form-check-input tuecheck" type="checkbox" id="tuecheck">
                            @else
                            <input name="tue" value="check" class="form-check-input tuecheck" type="checkbox" id="tuecheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none;  user-select: none;" class="form-check-label" for="tuecheck">
                              Tuesday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->tue)
                              <input value="{{substr($workday->tue, 0, 5)}}" name="tuestart" type="time" class="tuesday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->tue, 8, 12)}}" name="tueend" type="time" class="tuesday" disabled>
                              @else
                              <input name="tuestart" type="time" class="tuesday" disabled>
                            </div>
                            <div>
                              <input name="tueend" type="time" class="tuesday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->tue)
                            <input checked name="wed" value="check" class="form-check-input wedcheck" type="checkbox" id="wedcheck">
                            @else
                            <input name="wed" value="check" class="form-check-input wedcheck" type="checkbox" id="wedcheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select:none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="wedcheck">
                              Wednesday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->wed)
                              <input value="{{substr($workday->wed, 0, 5)}}" name="wedstart" type="time" class="wednesday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->wed, 8, 12)}}" name="wedend" type="time" class="wednesday" disabled>
                              @else
                              <input name="wedstart" type="time" class="wednesday" disabled>
                            </div>
                            <div>
                              <input name="wedend" type="time" class="wednesday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->thu)
                            <input checked name="thu" value="check" class="form-check-input thucheck" type="checkbox" id="thucheck">
                            @else
                            <input name="thu" value="check" class="form-check-input thucheck" type="checkbox" id="thucheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="thucheck">
                              Thursday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->thu)
                              <input value="{{substr($workday->thu, 0, 5)}}" name="thustart" type="time" class="thursday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->thu, 8, 12)}}" name="thuend" type="time" class="thursday" disabled>
                              @else
                              <input name="thustart" type="time" class="thursday" disabled>
                            </div>
                            <div>
                              <input name="thuend" type="time" class="thursday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->fri)
                            <input name="fri" value="check" class="form-check-input fricheck" type="checkbox" id="fricheck">
                            @else
                            <input name="fri" value="check" class="form-check-input fricheck" type="checkbox" id="fricheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="fricheck">
                              Friday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->fri)
                              <input value="{{substr($workday->fri, 0, 5)}}" name="fristart" type="time" class="friday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->fri, 8, 12)}}" name="friend" type="time" class="friday" disabled>
                              @else
                              <input name="fristart" type="time" class="friday" disabled>
                            </div>
                            <div>
                              <input name="friend" type="time" class="friday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->sat)
                            <input checked name="sat" value="check" class="form-check-input satcheck" type="checkbox" id="satcheck">
                            @else
                            <input name="sat" value="check" class="form-check-input satcheck" type="checkbox" id="satcheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="satcheck">
                              Saturday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->sat)
                              <input value="{{substr($workday->sat, 0, 5)}}" name="satstart" type="time" class="saturday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->sat, 8, 12)}}" name="satend" type="time" class="saturday" disabled>
                              @else
                              <input name="satstart" type="time" class="saturday" disabled>
                            </div>
                            <div>
                              <input name="satend" type="time" class="saturday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top: 0; padding-bottom: 0; vertical-align: middle;" class="form-group col-md-6">
                          <div class="form-check">
                            @if($workday->sun)
                            <input checked name="sun" value="check" class="form-check-input suncheck" type="checkbox" id="suncheck">
                            @else
                            <input name="sun" value="check" class="form-check-input suncheck" type="checkbox" id="suncheck">
                            @endif
                            <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="suncheck">
                              Sunday
                            </label>
                          </div>
                        </td>
                        <td class="form-group col-md-6">
                          <div class="form-row" style="display: flex;">
                            <div style="padding-right: 10px;">
                              @if($workday->sun)
                              <input value="{{substr($workday->sun, 0, 5)}}" name="sunstart" type="time" class="sunday" disabled>
                            </div>
                            <div>
                              <input value="{{substr($workday->sun, 8, 12)}}" name="sunend" type="time" class="sunday" disabled>
                              @else
                              <input name="sunstart" type="time" class="sunday" disabled>
                            </div>
                            <div>
                              <input name="sunend" type="time" class="sunday" disabled>
                              @endif
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <label style="margin-top: 20px; padding: 0 15px;" for="inputState">Links</label>
                  <div class="form-row">
                    <div style="margin: 0;" class="form-group col-md-6">
                      <label class="link-label" for="link-email" style="margin-top: 7px;">Email</label>
                      @if($link->email)
                      <input value="{{$link->email}}" id="link-email" class="links-input form-control mt-2" style="width: 100%;" type="text" name="email" placeholder="Enter your email address...">
                      @else
                      <input id="link-email" class="links-input form-control mt-2" style="width: 100%;" type="text" name="email" placeholder="Enter your email address...">
                      @endif
                      <label class="link-label" for="link-tg" style="margin-top: 7px;">Telegram</label>
                      @if($link->tg)
                      <input value="{{$link->tg}}" id="link-tg" class="links-input form-control mt-2" style="width: 100%;" type="text" name="tg" placeholder="Paste telegram link...">
                      @else
                      <input id="link-tg" class="links-input form-control mt-2" style="width: 100%;" type="text" name="tg" placeholder="Paste telegram link...">
                      @endif
                    </div>
                    <div class="form-group col-md-6">
                      <label class="link-label" for="link-fb" style="margin-top: 7px;">Facebook</label>
                      @if($link->fb)
                      <input value="{{$link->fb}}" id="link-fb" class="links-input form-control mt-2" style="width: 100%;" type="text" name="fb" placeholder="Paste facebook link...">
                      @else
                      <input id="link-fb" class="links-input form-control mt-2" style="width: 100%;" type="text" name="fb" placeholder="Paste facebook link...">
                      @endif
                      <label class="link-label" for="link-insta" style="margin-top: 7px;">Instagram</label>
                      @if($link->insta)
                      <input value="{{$link->insta}}" id="link-insta" class="links-input form-control mt-2" style="width: 100%;" type="text" name="insta" placeholder="Paste instagram link...">
                      @else
                      <input id="link-insta" class="links-input form-control mt-2" style="width: 100%;" type="text" name="insta" placeholder="Paste instagram link...">
                      @endif
                    </div>
                  </div>

                  <div style="padding: 0 15px;">
                    <label for="logo">Logo</label>
                    @if($data->logo)
                    <input name="logo" style="display: block;" type="file" id="logo">
                    @else
                    <input name="logo" style="display: block;" type="file" id="logo">
                    @endif
                  </div>

                  <div style="padding: 0 15px;">
                    Map
                  </div>

                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div> -->
                  <button type="submit" class="btn btn-primary" style="margin: 10px 15px;">Sign in</button>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="pull-right">
          10GB of <strong>250GB</strong> Free.
        </div>
        <div>
          <strong>Copyright</strong> Example Company &copy; 2014-2017
        </div>
      </div>

    </div>
  </div>



  <!-- Mainly scripts -->
  <script src="admin/js/jquery-3.1.1.min.js"></script>
  <script src="admin/js/bootstrap.min.js"></script>
  <script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="admin/js/plugins/dataTables/datatables.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="admin/js/inspinia.js"></script>
  <script src="admin/js/plugins/pace/pace.min.js"></script>

  <!-- Page-Level Scripts -->
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