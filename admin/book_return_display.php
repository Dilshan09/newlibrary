<?php
include 'connect.php';
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Stutent ID</th>
      <th scope="col">ISBN</th>
      <th scope="col">Book Title</th>
      <th scope="col">Return Date</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">

    <?php
    $sql = "select * from `newreturn`";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $student = $row['student'];
        $isbn = $row['isbn'];
        $title = $row['title'];
        $date = $row['date'];

        echo '<tr>
                    <th scope="row">' . $student . '</th>
                    <td>' . $isbn . '</td>
                    <td>' . $title . '</td>
                    <td>' . $date . '</td>

                    
                    <td>
                        <button class="btn btn-info"><a href="book_return_update.php?updateid=' . $student . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="book_return_delete.php?deleteid=' . $student . '" class="text-light">Delete</a></button>           
                    </td> 
                 </tr>';
      }
    }
    ?>

  </tbody>
</table>