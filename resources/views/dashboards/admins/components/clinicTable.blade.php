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
                        <td>{{ optional($clinic->clinicAddress)->city }} {{ optional($clinic->clinicAddress)->state }}</td>
                        <td class="center">
                          <ul style="padding: 0">
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                            <li style="list-style-type: none;">Mon: 12:30 - 06:00</li>
                          </ul>
                        </td>
                        <td class="center">
                          <ul style="padding: 0">
                            <li style="list-style-type: none;">email</li>
                            <li style="list-style-type: none;">tg</li>
                            <li style="list-style-type: none;">fb</li>
                            <li style="list-style-type: none;">insta</li>
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