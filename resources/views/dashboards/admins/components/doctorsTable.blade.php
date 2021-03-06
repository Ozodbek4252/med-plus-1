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
              <a href="{{ route('admin.dashboard') }}">Home</a>
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
        <a href="{{route('admin.addDoctor')}}"><button type="button" class="btn btn-w-m btn-primary">Add Doctor</button></a>
      </div>

      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date Of Birth</th>
                        <th>Clinic</th>
                        <th>Speciality</th>
                        <th>Work Days</th>
                        <th>Experience</th>
                        <th>Summary</th>
                        <th>Image</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $data)
                      <tr class="gradeX">
                        <td>{{ $num++ }}</td>
                        <td>{{$data->first_name_ru}} {{$data->last_name_ru}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->date_of_birth}}</td>
                        <td>
                          @if($data->clinics)
                          @foreach($data->clinics as $clinic)
                          {{$clinic->name}}
                          @endforeach
                          @endif
                        </td>
                        <td>
                          <ul style="padding: 0 15px; margin: 0;">
                            @foreach($data->specialities as $speciality)
                            <li>{{ $speciality->name_ru }}</li>
                            @endforeach
                          </ul>
                        </td>
                        <td>
                          @if($data->workingDay)
                          <ul style="padding-left: 15px; width: 100px;">
                            @if($data->workingDay->mon)
                            <li>
                              {{$data->workingDay->mon}}
                            </li>
                            @endif
                            @if($data->workingDay->tue)
                            <li>
                              {{$data->workingDay->tue}}
                            </li>
                            @endif
                            @if($data->workingDay->wed)
                            <li>
                              {{$data->workingDay->wed}}
                            </li>
                            @endif
                            @if($data->workingDay->thu)
                            <li>
                              {{$data->workingDay->thu}}
                            </li>
                            @endif
                            @if($data->workingDay->fri)
                            <li>
                              {{$data->workingDay->fri}}
                            </li>
                            @endif
                            @if($data->workingDay->sat)
                            <li>
                              {{$data->workingDay->sat}}
                            </li>
                            @endif
                            @if($data->workingDay->sun)
                            <li>
                              {{$data->workingDay->sun}}
                            </li>
                            @endif
                          </ul>
                          @endif
                        </td>
                        <td>
                          @if($data->experience)
                          {{$data->experience}} year
                          @endif
                        </td>
                        <td>{{$data->summary_ru}}</td>
                        <td>{{$data->image}}</td>
                        <td class="center"><a href="{{route('admin.editDoctor', $data->id)}}">Edit</a></td>
                      </tr>
                      @endforeach
                      </tfoot>
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