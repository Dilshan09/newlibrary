<?php
  
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `newreturn` where student = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
    $student = $row ['student'];
    $isbn=$row['isbn'];
    $title=$row['title'];
    $date=$row['date'];

if(isset($_POST['submit'])){
    $student=$_POST['student'];
    $isbn=$_POST['isbn'];
    $title=$_POST['title'];
    $date=$_POST['date'];

    $sql = "update `newreturn` set student=$id, isbn='$isbn', title='$title' , date = '$date'
            where student=$id";
    $result = mysqli_query($con,$sql);
    if ($result){
        // echo "Data updated successfully";
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: "Success!",
                text: "Data Updated!",
                icon: "success"
            }).then((value) => {
                if (value) {
                    window.location.href = "index3.php";
                }
            });
        });
    </script>';     
    }else{
        die(mysqli_error($con));
    }
}

?>


<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4>
                        Update Return Books Details
                    </h4>
                </div>
            </div> 

    <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">

        <div class="container my-5">
        <form method = "post">

           <div class="mb-3">
                <label >Student ID</label>
                <input type="number" class="form-control" placeholder="Enter Student ID" name ="student"
                value=<?php echo $student;?>
                >
            </div>

            <div class="mb-3">
                <label >ISBN</label>
                <input type="number" class="form-control" placeholder="Enter ISBN no" name ="isbn"
                value=<?php echo $isbn;?>
                >
            </div>
            <div class="mb-3">
                <label >Book Title</label>
                <input type="text" class="form-control" placeholder="Enter Book Title" name ="title"
                value=<?php echo $title;?>
                >
            </div>

            <div class="mb-3">
                <label >Book Return Date</label>
                <input type="date" class="form-control" placeholder="Enter Return date" name ="date"
                value=<?php echo $date;?>
                >
            </div>
           
            <!-- auto complete on -->
            <button type="submit" class="btn btn-info" name="submit">Update</button>
        </form>
    </div>



    </div>
    </div>
</div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>