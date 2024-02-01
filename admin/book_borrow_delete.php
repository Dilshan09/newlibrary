<head>
    <!-- Other head elements -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `newborrow` WHERE student=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: "Success!",
                        text: "Data Deleted!",
                        icon: "success"
                    }).then((value) => {
                        if (value) {
                            window.location.href = "index2.php";
                        }
                    });
                });
            </script>';
    } else {
        die(mysqli_error($con));
    }
}
?>