<?php include_once 'components/top.php';?>

<body>

  <!-- ======= Header ======= -->
  <?php include_once 'components/header.php';?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include_once 'components/sidebar.php';?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Rooms Type</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-building-house"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Rooms</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-building-house"></i>
                    </div>
                    <div class="ps-3">
                      <h6>100</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Employee</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-user-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>45</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Sales</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-bar-chart-alt-2"></i>
                    </div>
                    <div class="ps-3">
                      <h6>15200</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Today's Booking</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" title="date of Booking">DOB</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Room</th>
                    <th scope="col">CheckIn</th>
                    <th scope="col">CheckOut</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Paid</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>02 Oct 2023</td>
                    <td>John Doe</td>
                    <td>Deluxe</td>
                    <td>10 Oct 2023</td>
                    <td>11 Oct 2023</td>
                    <td>4500.00</td>
                    <td>1500.00</td>
                  </tr>
                </tbody>
              </table>

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