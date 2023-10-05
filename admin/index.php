<?php include_once 'components/top.php';?>
<?php
  session_start();
  if (isset($_SESSION['loggedIn']['userid'])) {
    header("Location: dashboard.php");
  }
  require_once '../php_assets/db.php';
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = "SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $check); 
  
    if (mysqli_num_rows($result) > 0) { 
      $row = mysqli_fetch_assoc($result);
      $_SESSION['loggedIn'] = [
        'userid' => $row['id'],
        'email' => $row['email'],
        'name' => $row['name'],
      ];

      // header("Location: dashboard.php");
    } else {
      $_SESSION['error'] = "Invalid username or password";
    }
  }
?>
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              

              <small class="text-danger">
                <?php
                if (isset($_SESSION['error'])) {
                  echo '<div class="flash-message">' . $_SESSION['error'] . '</div>';
                  unset($_SESSION['error']);
              }
                ?>
              </small>
              <div class="card mb-3">
                <div class="card-body">
                <div class="d-flex justify-content-center pt-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../images/favicon.png" alt="">
                  <span class="d-none d-lg-block">Republic Hotel</span>
                </a>
              </div><!-- End Logo -->

                  <div class="pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">Login</button>
                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed & Developed by <a href="#">Sam Softech</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php include_once 'components/footer.php'; ?>