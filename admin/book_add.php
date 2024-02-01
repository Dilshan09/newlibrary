<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">

    <div class="card">
        <div class="card-header">
            <h4>
                Insert Book Details
                <a href="index.php" class="btn btn-info float-end"> Home </a>
            </h4>
        </div>
        <div class="card-body">
            <form method="post">

                <div class="mb-3">
                    <label>ISBN</label>
                    <input type="number" class="form-control" placeholder="Enter ISBN no" name="isbn" oninput="this.setCustomValidity(parseInt(this.value) < 0 ? 'ISBN cannot be a negative value.' : ''); reportValidity();" required>
                </div>

                <div class="mb-3">
                    <label>Book Title</label>
                    <input type="text" class="form-control" placeholder="Enter Book Title" name="title" required>
                </div>
                <div class="mb-3">
                    <label>Publisher</label>
                    <input type="text" class="form-control" placeholder="Enter Publisher" name="publisher" required>
                </div>
                <div class="mb-3">
                    <label>Published Year</label>
                    <input type="date" class="form-control" placeholder="Enter Published Year" name="year" required>
                </div>
                <div class="mb-3">
                    <label>Book Category</label>
                    <input type="text" class="form-control" placeholder="Enter Book Category" name="category" required>
                </div>
                <div class="mb-3">
                    <label>Quentity</label>
                    <input type="number" class="form-control" placeholder="Enter Quentity" name="quentity" oninput="this.setCustomValidity(parseInt(this.value) < 0 ? 'Quentity cannot be a negative value.' : ''); reportValidity();" required>
                </div>
                <div class="mb-3">
                    <label>Author Name</label>
                    <input type="text" class="form-control" placeholder="Enter Author Name" name="author" required>
                </div>
                <!-- auto complete on -->
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>

<?php

include 'connect.php';

if (isset($_POST['submit'])) { // look if submit and store
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $category = $_POST['category'];
    $quentity = $_POST['quentity'];
    $author = $_POST['author'];

    $sql = "INSERT INTO newbook (isbn, title, publisher, year, category, quentity, author)
            VALUES ('$isbn','$title','$publisher','$year','$category','$quentity','$author')";

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
                        window.location.href = "index.php";
                    }
                });
              </script>';
    } else {
        die(mysqli_error($con));
    }
}

?>