<?php
  
include 'connect.php'; //connect db
$id=$_GET['updateid']; //get update
$sql="select * from `newbook` where isbn = $id"; //asign correct id array values
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
    $isbn = $row ['isbn'];
    $title=$row['title'];
    $publisher=$row['publisher'];
    $year=$row['year'];
    $category=$row['category'];
    $quentity=$row['quentity'];
    $author=$row['author'];

if(isset($_POST['submit'])){ //if submit
    $isbn=$_POST['isbn']; //asign
    $title=$_POST['title'];
    $publisher=$_POST['publisher'];
    $year=$_POST['year'];
    $category=$_POST['category'];
    $quentity=$_POST['quentity'];
    $author=$_POST['author'];

    $sql = "update `newbook` set isbn=$id, title='$title', publisher='$publisher', 
            year='$year', category='$category', quentity='$quentity', author='$author'
            where isbn=$id"; 
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
                    window.location.href = "index.php";
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
                        Update Book Details
                    </h4>
                </div>
            </div> 

    <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">

        <div class="container my-5">
        <form method = "post">
            <div class="mb-3">
                <label >ISBN</label>
                <input type="number" class="form-control" placeholder="Enter ISBN no" name ="isbn"
                value=<?php echo $isbn;?> 
                ><!-- to see default value -->
            </div>
            <div class="mb-3">
                <label >Book Title</label>
                <input type="text" class="form-control" placeholder="Enter Book Title" name ="title"
                value=<?php echo $title;?>
                >
            </div>
            <div class="mb-3">
                <label >Publisher</label>
                <input type="text" class="form-control" placeholder="Enter Publisher" name ="publisher"
                value=<?php echo $publisher;?>
                >
            </div>
            <div class="mb-3">
                <label >Published Year</label>
                <input type="date" class="form-control" placeholder="Enter Published Year" name ="year"
                value=<?php echo $year;?>
                >
            </div>
            <div class="mb-3">
                <label >Book Category</label>
                <input type="text" class="form-control" placeholder="Enter Book Category" name ="category"
                value=<?php echo $category;?>
                >
            </div>
            <div class="mb-3">
                <label >Quentity</label>
                <input type="number" class="form-control" placeholder="Enter Quentity" name ="quentity"
                value=<?php echo $quentity;?>
                >
            </div>
            <div class="mb-3">
                <label >Author Name</label>
                <input type="text" class="form-control" placeholder="Enter Author Name" name ="author"
                value=<?php echo $author;?>
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