<?php
include 'connect.php';
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Book Title</th>
      <th scope="col">Publish Year</th>
      <th scope="col">Publisher</th>
      <th scope="col">Categoery</th>
      <th scope="col">Quentity</th>
      <th scope="col">Author Name</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

    <?php
    $sql = "select * from `newbook`";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $isbn = $row['isbn'];
        $title = $row['title'];
        $publisher = $row['publisher'];
        $year = $row['year'];
        $category = $row['category'];
        $quentity = $row['quentity'];
        $author = $row['author'];

        echo '<tr>
                    <th scope="row">' . $isbn . '</th>
                    <td>' . $title . '</td>
                    <td>' . $publisher . '</td>
                    <td>' . $year . '</td>
                    <td>' . $category . '</td>
                    <td>' . $quentity . '</td>
                    <td>' . $author . '</td>
                    <td>
                        <button class="btn btn-info"><a href="book_update.php?updateid=' . $isbn . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="book_delete.php?deleteid=' . $isbn . '" class="text-light">Delete</a></button>           
                    </td> 
                 </tr>';
      }
    }
    ?>

  </tbody>
</table>