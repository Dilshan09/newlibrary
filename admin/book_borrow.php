<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">

    <!-- <div class="row min-vh-80 h-100">
        <div class="col-12"> -->

    <div class="card">
        <div class="card-header">
            <h4>
                Borrow Books
                <a href="index.php" class="btn btn-info float-end"> Home </a>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">

                <div class="mb-3">
                    <label>Student ID</label>
                    <input type="number" class="form-control" placeholder="Enter Student ID" name="student" oninput="this.setCustomValidity(parseInt(this.value) < 0 ? 'Student ID cannot be a negative value.' : ''); reportValidity();" required>
                </div>

                <div class="mb-3">
                    <label>ISBN</label>
                    <input type="number" class="form-control" placeholder="Enter ISBN no" name="isbn" oninput="this.setCustomValidity(parseInt(this.value) < 0 ? 'ISBN cannot be a negative value.' : ''); reportValidity();" required>
                </div>

                <div class="mb-3">
                    <label>Book Title</label>
                    <input type="text" class="form-control" placeholder="Enter Book Title" name="title" required>
                </div>

                <div class="mb-3">
                    <label>Borrow Date</label>
                    <input type="date" class="form-control" placeholder="Enter Borrow Date" name="date" required>
                </div>

                <!-- auto complete on -->
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <!-- 
  </div>
  </div> -->

</div>

<?php include('includes/footer.php'); ?>

<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $student = $_POST['student'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $date = $_POST['date'];


    $sql = "INSERT INTO newborrow (student, isbn, title, date)
            VALUES ('$student','$isbn','$title','$date')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // Data inserted successfully, display SweetAlert
        echo '<script>
                Swal.fire({
                    title: "Success!",
                    text: "Data Inserted!",
                    icon: "success"
                }).then((value) => {
                    if (value) {
                        window.location.href = "index2.php";
                    }
                });
              </script>';
    } else {
        die(mysqli_error($con));
    }
}

?>