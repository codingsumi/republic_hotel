<?php include_once 'components/top.php'; ?>
<?php
session_start();
$userid = $_SESSION['loggedIn']['userid'];
$query = "SELECT * FROM `users` WHERE `id` = $userid";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);
?>
<body>

    <!-- ======= Header ======= -->
    <?php include_once 'components/header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include_once 'components/sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Profile</h5>
                            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label for="name">Name *</label>
                                        <input type="text" name="name" id="name" value="<?= $row['name'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">email *</label>
                                        <input type="text" name="email" id="email" value="<?= $row['email'];?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-block">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="./assets/img/messages-3.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Republic Hotel</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed & Developed by <a href="#">Sam Softech</a>
        </div>
    </footer><!-- End Footer -->

    <?php include_once 'components/footer.php'; ?>