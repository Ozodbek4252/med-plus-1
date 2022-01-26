<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>INSPINIA | Data Tables</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

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

      <div class="addDoctor" style="padding: 30px 10px; padding-bottom: 10px;">
        <a href="{{ route('admin.addClinic') }}"><button type="button" class="btn btn-w-m btn-primary">Add Clinic</button></a>
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
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                      <tr>
                        <th>Clinic Name</th>
                        <th>Owner</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Work Days</th>
                        <th>Links</th>
                        <th>Logo</th>
                        <th>Location</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($clinics as $clinic)
                      <tr class="gradeX">
                        <td>{{ $clinic->name }}</td>
                        <td>Owner</td>
                        <td>{{ $clinic->phone }}</td>
                        <td>
                          <table>
                            <thead>
                              <tr>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(optional($clinic->address)->apartment_ru)
                              <tr>
                                <td>Apart.:</td>
                                <td style="padding-left: 5px;">{{ optional($clinic->address)->apartment_ru }}</td>
                              </tr>
                              @endif
                              @if(optional($clinic->address)->street_ru)
                              <tr>
                                <td>Str:</td>
                                <td style="padding-left: 5px;">{{ optional($clinic->address)->street_ru }}</td>
                              </tr>
                              @endif
                              @if(optional($clinic->address)->city)
                              <tr>
                                <td>City:</td>
                                <td style="padding-left: 5px;">{{ optional($clinic->address)->city }}</td>
                              </tr>
                              @endif
                              @if(optional($clinic->address)->state)
                              <tr>
                                <td>State:</td>
                                <td style="padding-left: 5px;">{{ optional(optional($clinic->address)->states)->state_ru }}</td>
                              </tr>
                              @endif
                            </tbody>
                          </table>
                        </td>
                        <td class="center">
                          <ul style="padding: 0">
                            @if(optional($clinic->workingDay)->mon)
                              <li style="list-style-type: none;">Mon: {{$clinic->workingDay->mon}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->tue)
                              <li style="list-style-type: none;">Tue: {{$clinic->workingDay->tue}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->wed)
                              <li style="list-style-type: none;">Wed: {{$clinic->workingDay->wed}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->thu)
                              <li style="list-style-type: none;">Thu: {{$clinic->workingDay->thu}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->fri)
                              <li style="list-style-type: none;">Fri: {{$clinic->workingDay->fri}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->sat)
                              <li style="list-style-type: none;">Sat: {{$clinic->workingDay->sat}}</li>
                            @endif
                            @if(optional($clinic->workingDay)->sun)
                              <li style="list-style-type: none;">Sun: {{$clinic->workingDay->sun}}</li>
                            @endif
                          </ul>
                        </td>
                        <td class="center">
                          <ul style="padding: 0">
                            @if(optional($clinic->links)->email)
                              <li style="list-style-type: none;">Email: {{$clinic->links->email}}</li>
                            @endif
                            @if(optional($clinic->links)->tg)
                              <li style="list-style-type: none;">Tg: {{$clinic->links->tg}}</li>
                            @endif
                            @if(optional($clinic->links)->fb)
                              <li style="list-style-type: none;">Fb: {{$clinic->links->fb}}</li>
                            @endif
                            @if(optional($clinic->links)->insta)
                              <li style="list-style-type: none;">Insta: {{$clinic->links->insta}}</li>
                            @endif
                          </ul>
                        </td>
                        <td class="center">logo</td>
                        <td class="center">location</td>
                        <td class="center"><a href="">Edit</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
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
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="js/plugins/dataTables/datatables.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="js/inspinia.js"></script>
  <script src="js/plugins/pace/pace.min.js"></script>

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

</body>

</html>