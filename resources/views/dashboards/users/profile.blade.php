<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med Plus</title>
    <link rel="shortcut icon" href="images/favicon.png" type="">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link href="css/clinics.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 0;
      background-color: #999;
    }
    
    .nav-back-a {
      color: #000;
    }
    
    .fa-chevron-left {
      margin-right: 5px;
    }
    .body {
      padding: 30px 0;
    }
    .body-head {
      display: flex;
      justify-content: space-between;
    }
    .body-wrapper {
      display: flex;
      justify-content: space-between;
      margin: 30px 0;
    }
    .left-form-wrap {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px 20px;
    }
    .body-left {
      width: 48%;
    }
    .body-right {
      width: 48%;
      background-color: #888;
    }

    .left-form {
      width: 80%;
    }
    .left-form-div {
      display: flex;
      flex-direction: column;
    }

  </style>

</head>
<body>
    <div class="container">
        <nav class="nav">
          <a class="nav-back-a" href="/"><span><i class="fas fa-chevron-left"></i>Back Home</span></a>
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="{{route('user.profile')}}"><button class="dropdown-item" type="button">Account</button></a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </div>
        </nav>
        
        <div class="body">
          <div class="body-head">
            <h1>Profile Information</h1>
            <div>
              <a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Clinics</a>
              <a href="{{route('user.completeacccount')}}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Complete Account</a>
            </div>
          </div>
          <div class="body-wrapper">
            <div class="body-left">
              <h5>Update your account's profile information and email address.</h5>
              <div class="left-form-wrap">
                <form class="left-form" action="" method="">

                  <div class="left-form-div">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="{{Auth::user()->first_name}}" id="first_name" placeholder="First Name">
                  </div>

                  <div class="left-form-div">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="{{Auth::user()->last_name}}" id="last_name" placeholder="Last Name">
                  </div>

                  <div class="left-form-div">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{Auth::user()->email}}" id="email" placeholder="Email">
                  </div>

                  <input type="submit" value="Save">

                </form>
              </div>
            </div>
            <div class="body-right">
              <h4>Update Password</h4>

            </div>
          </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>












