<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Dosen</title>
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
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register Dosen</h3>
                <form class="forms-sample" method="post" action="tambahaksidosen1.php">
                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control p_input" name="nip" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>NIDN</label>
                    <input type="text" class="form-control p_input" name="nidn" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" class="form-control p_input" name="nama_dosen" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control p_input" name="alamat" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" class="form-control p_input" name="no_telp" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control p_input" name="user_id" required autocomplete="off"> 
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Kode Prodi</label>
                    <input type="text" class="form-control p_input" name="kode_prodi" required autocomplete="off">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <!-- <a href="#" class="forgot-pass">Forgot password</a> -->
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <!-- <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div> -->
                  <p class="sign-up text-center">Already have an Account?<a href="logindosen.php"> Sign Up</a></p>
                  <!-- <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p> -->
                </form>
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