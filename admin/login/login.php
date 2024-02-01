<header>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</header>

<body style="background:#20c997">

  <?php
  if (@$_GET['Empty'] == true) {
  ?>
    <div class="alert-light text-danger text-center py-3">
      <?php echo $_GET['Empty'] ?>
    </div>
  <?php
  }

  ?>

  <?php
  if (@$_GET['Invalid'] == true) {
  ?>
    <div class="alert-light text-danger text-center py-3">
      <?php echo $_GET['Invalid'] ?>
    </div>
  <?php
  }

  ?>

  <h3 class="text-center mt-5 py-5">Admin Login</h3>
  <form action="process.php" method="post" class="col-lg-5 m-auto">
    <div class="form-group mt-5">
      <label for="user">User Name</label>
      <input type="text" class="form-control" name="user" placeholder="Enter User Name">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      <small>We'll never share your password with anyone else.</small>

    </div>
    <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
    <button class="btn btn-primary" name="login">Login</button>
  </form>
</body>