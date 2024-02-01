<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">

      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <div class="card  mb-4">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">store</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Books Store</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>

            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>

          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">book</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Borrow Books</p>
                <h4 class="mb-0">300</h4>
              </div>
            </div>

            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>

        </div>
        <div class="col-lg-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-4">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">Return Books</p>
                <h4 class="mb-0 ">5</h4>
              </div>
            </div>

            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
            </div>
          </div>

          <div class="card ">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">Book Analyse</p>
                <h4 class="mb-0 ">0.3%</h4>
              </div>
            </div>

            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 ">Just updated</p>
            </div>
          </div>

        </div>
      </div>

      <div class="card mt-5">
        <div class="card-header">
          <h4>
            Insert Book Borrow Details
            <a href="book_borrow.php" class="btn btn-info float-end"> Insert Data </a>
            <!-- direction -->

          </h4>

          <?php include('book_borrow_display.php'); ?>

        </div>
      </div>

    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>