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
      margin: 15px 0;
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
    }

    .left-form {
      width: 80%;
    }
    .left-form-div {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }
      </style>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>
<body>
    <div class="container">
        <nav class="nav">
          <a class="nav-back-a" href="{{route('user.profile')}}"><span><i class="fas fa-chevron-left"></i>Back</span></a>
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->first_name}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="{{route('user.profile')}}"><button class="dropdown-item" type="button">Account</button></a>
              <a class="dropdown-item" href="{{ route('user.logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </div>
        </nav>
        
        <div class="body">
          <div class="body-head">
            <h1>Complete Your Profile</h1>
          </div>

          <div class="body-wrapper">
            <form class="left-form" action="{{route('user.completeacccountSave', Auth::user()->id)}}" method="post" style="width: 100%;"  enctype="multipart/form-data">
              @csrf
              <div style="display: flex; justify-content: space-between;">
                <div class="body-left">

                    <div class="left-form-div">
                      <label for="first_name">First Name</label>
                      <input type="text" name="first_name" value="{{Auth::user()->first_name}}" id="first_name" placeholder="First Name"
                              class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500">
                    </div>

                    <div class="left-form-div">
                      <label for="last_name">Last Name</label>
                      <input type="text" name="last_name" value="{{Auth::user()->last_name}}" id="last_name" placeholder="Last Name"
                              class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500">
                    </div>

                    <div class="left-form-div">
                      <label for="email">Email</label>
                      <input type="email" name="email" value="{{Auth::user()->email}}" id="email" placeholder="Email"
                              class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500">
                      
                    </div>

                    <div class="left-form-div">
                      <label for="phone">Phone</label>
                      @if(!Auth::user()->phone)
                        <input style="width: 100%;" id="phone" type="tel" value="" name="phone" 
                              class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500"/>
                      @else
                        <input style="width: 100%;" id="phone" type="tel" value="{{Auth::user()->phone}}" name="phone" 
                              class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500"/>
                      @endif
                    </div>
                    <p>Format: 944424252</p>

                </div>

                <div class="body-right">

                  <div style="width: 100%" class="left-form-div">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Viloyat
                  </label>
                  <div class="relative">
                    <select style="width: 100%" name="state" class="block appearance-none w-full bg-gray-200 
                            border border-gray-500 text-gray-700 py-3 px-4 pr-8 rounded 
                            leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                            id="grid-state">
                      <option>Select</option>
                      <option value="Toshkent">Toshkent</option>
                      <option value="Farg'ona">Farg'ona</option>
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
                  </div>

                  <div style="width: 100%" class="left-form-div">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Shahar / Tuman
                    </label>
                      <input style="width: 100%" value="" name="city" class="appearance-none block w-full bg-gray-200 text-gray-700 
                              border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none 
                              focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Angren">
                  </div>

                  <div style="width: 100%;"  class="left-form-div">
                	<label style="width: 100%;" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-date">
                      Date Of Birth
                  </label>
                  <input value="{{Auth::user()->date_of_birth}}" name="date_of_birth" type="date" 
                          class="appearance-none block w-full bg-gray-200 text-gray-700 border 
                          border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none 
                          focus:bg-white focus:border-gray-500" id="grid-date">
                  </div>

                  <div class="left-form-div" style="width: 100%; margin-bottom: 5px !important;">
        	          <label style="width: 100%;" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                        Jinsi
                    </label>
                    <div style="display: flex; width: 100%" class="w-full md:w-1/3 mb-6 md:mb-0">
                      @if(Auth::user()->gender)
                        @if(Auth::user()->gender == 'male')
                          <div style="padding: 0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-male">
                            Male
                            </label>
                            <input id="grid-male" checked name="gender" value="male" type="radio" class="appearance-none checked:bg-blue-500 ..." />
                          </div>
                          <div style="padding: 0; padding-left: 30px;">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-female">
                              Female
                            </label>
                            <input id="grid-female" name="gender" value="female" type="radio" class="appearance-none checked:bg-blue-500 ..." />
                          </div>
                        @else
                          <div style="padding: 0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-male">
                            Male
                            </label>
                            <input id="grid-male" name="gender" value="male" type="radio" class="appearance-none checked:bg-blue-500 ..." />
                          </div>
                          <div style="padding: 0; padding-left: 30px;">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-female">
                              Female
                            </label>
                            <input id="grid-female" checked name="gender" value="female" type="radio" class="appearance-none checked:bg-blue-500 ..." />
                          </div>
                        @endif

                      @else
                      	<div style="padding: 0">
                        	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-male">
                          Male
                        	</label>
        	            	  <input id="grid-male" name="gender" value="male" type="radio" class="appearance-none checked:bg-blue-500 ..." />
        	            	</div>
        	            	<div style="padding: 0; padding-left: 30px;">
        	            	  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-female">
                            Female
                        	</label>
        	            	  <input id="grid-female" name="gender" value="female" type="radio" class="appearance-none checked:bg-blue-500 ..." />
        	            	</div>
                      @endif
        	          </div>
        	        </div>

                </div>
              </div>
              <button style="margin-top: 10px;" type="submit" class="btn btn-success">Save</button>
            </form>
          </div>
        </div>
    </div>



    <script>
      const phoneInputField = document.querySelector("#phone");
      const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });

      const info = document.querySelector(".alert-info");

      function process(event) {
        event.preventDefault();
      
        const phoneNumber = phoneInput.getNumber();
      
        info.style.display = "";
        info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
      }

      function getIp(callback) {
        fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
          .then((resp) => resp.json())
          .catch(() => {
            return {
              country: 'us',
            };
          })
          .then((resp) => callback(resp.country));
      }
      
      // const info = document.querySelector(".alert-info");

function process(event) {
 event.preventDefault();

 const phoneNumber = phoneInput.getNumber();

 info.style.display = "";
 info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
}

function getIp(callback) {
 fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}

// const phoneInput = window.intlTelInput(phoneInputField, {
//  initialCountry: "auto",
//  geoIpLookup: getIp,
//  utilsScript:
//    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
// });

// const phoneInput = window.intlTelInput(phoneInputField, {
//   preferredCountries: ["us", "co", "in", "de"],
//   utilsScript:
//     "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
// });

    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
      $(document).ready(function() {
        fetchData();
        function fetchData() {
          $.ajax({
            type: "get",
            url: "fetchData",
            dataType: "json",
            success: function(response) {
              console.log(response.data);
            }
          
          });
        }
      });
  </script>


</body>
</html>












