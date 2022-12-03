<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>

  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo '<div class="alert alert-warning text-center " role="alert">
      Login gagal! username dan password salah!
    </div>';
    } else if ($_GET['pesan'] == "login") {
      echo "Anda telah berhasil login";
      header("location: ../../index.php");
      exit();
    } else if ($_GET['pesan'] == "belum_login") {
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="post" action="cek_login.php">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user_id" class="form-control p_input" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div>
                  <!-- <a href="#" class="forgot-pass">Forgot password</a> -->
                </div>
                <div class="text-center">
                  <!--<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button> -->
                  <input type="submit" class="btn btn-primary btn-block enter-btn" value="LOGIN">
                </div>

                <!-- <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
              </form>

              <br>

              <div class="d-flex">
                <button class="btn btn-facebook mr-2 col" onclick="tampilkandosen()">
                  <!-- <i class="mdi mdi-facebook"></i> --> Dosen
                </button>
                <script type="text/javascript">
                  function tampilkandosen() {
                    window.location.href = 'logindosen.php';
                  }
                </script>
                <button class="btn btn-google col" onclick="tampilkanmahasiswa()">
                  <!-- <i class="mdi mdi-google-plus"></i> --> Mahasiswa
                </button>
                <script type="text/javascript">
                  function tampilkanmahasiswa() {
                    window.location.href = 'loginmahasiswa.php';
                  }
                </script>
              </div>

              <!--<div class="d-flex">
                <form method="post" action="#">
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col"><a href="#">Dosen</a></button>
                </form>   
                <form method="post" action="#">
                  <div class="d-flex">
                    <button class="btn btn-google col"><a href="#">Mahasiswa</a></button>
                  </div>  
                </form> 
                </div> -->

            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>