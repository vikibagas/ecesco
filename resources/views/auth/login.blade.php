<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>E-CESCO - LOGIN</title>

   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap.css') }}">

 

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">

   

   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

   <!-- endinject -->
   <link rel="icon" type="image/png" sizes="16x16" href="img/icon.jpg">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
</head>

<body">
   <main class="main-content">

      <div class="admin">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-6">
               <div class="card1 pb-5">
                    <div class="row  px-3 justify-content-center mt-5 mb-3 border-line">
                        <img src="img/logo cesco menyamping.png" style="width:30%;">
                    </div>
                    <div class="row px-3 justify-content-center mt-3 mb-5 border-line">
                        <img src="img/login-image.png" class="image" style="width:60%;">
                    </div>
                </div>
               </div>
               <div class="col-lg-6">
                  <form id="loginform" action="url{{('') }}" method="post" >
                     {{ csrf_field() }}
                     <div class="edit-profile">                    
                        <div class="card border-0">
                           <div class="card-header">
                              <div class="edit-profile__title">
                                 <h6>Sign in E-Cesco</h6>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="edit-profile__body">
                                 <div class="form-group mb-25">
                                    <label for="username">Username or Email Address</label>
                                    <input type="text" class="form-control" id="username" name="username" required="" placeholder="username">
                                 </div>
                                 <div class="form-group mb-15">
                                    <label for="password-field">password</label>
                                    <div class="position-relative">
                                       <input id="password-field" type="password" class="form-control" name="psw" required="" placeholder="Password">
                                       <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="admin-condition">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                       <input class="checkbox" type="checkbox" id="check-1">
                                       <label for="check-1">
                                          <span class="checkbox-text">Keep me logged in</span>
                                       </label>
                                    </div>
                                    <a href="forget-password.html">forget password?</a>
                                 </div>
                                 <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                    <input type="submit" id="LoginBtn" value="sign in" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                       
                                    
                                 </div>
                              </div>
                           </div><!-- End: .card-body -->
                           
                           <div class="admin-topbar">
                              <p class="mb-0">
                                 Don't have an account?
                                 <a href="https://wa.me/6281315150315?text=Hallo,%saya tertarik%20untuk%20punya%20akun%20E-CESCO" class="color-primary">
                                    Contact us
                                 </a>
                              </p>
                           </div><!-- End: .admin-topbar  -->
                        </div><!-- End: .card -->
                     </div><!-- End: .edit-profile -->
                  </form>
               </div><!-- End: .col-xl-5 -->
            </div>
         </div>
      </div><!-- End: .admin-element  -->

   </main>
   <div id="overlayer">
      <div class="loader-overlay">
         <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
         </div>
      </div>
   </div>

   <!-- inject:js-->
  
 
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/jquery/jquery.form.js') }}"></script>

   <script src="{{ asset('assets/vendor_assets/js/bootstrap/popper.js') }}"></script>

   <script src="{{ asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>


   <script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>

   <script type="text/javascript">
      $('#loginform').submit(function(e){
         e.preventDefault();
         var username = $('#username').val();
         var password = $('#password-field').val();
         $('#LoginBtn').val('please wait...');
         $('#LoginBtn').prop('disabled', true);
        // alert('oke');
        
         $.ajax({
            url: "{{ route('ceklogin') }}",
            type: "POST",
            data: {
               _token: "{{ csrf_token() }}",
               username: username,
               psw: password
            },
            success: function (response) {
               if (response === true) {
                  window.location.href = "{{ url('dashboard') }}";
                  //alert('berhasil');
               } else {
                  alert(response);
                  $('#LoginBtn').val('Sign In');
                  $('#LoginBtn').prop('disabled', false);
               }
            }
         });
        
      });
      </script>
   <!-- endinject-->

</body>

</html>