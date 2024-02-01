<?php
include '../connect.php';
session_start();

if (isset($_POST['login'])) {
    // echo 'Working Now';

    if (empty($_POST['user']) || empty($_POST['password'])) {
        header("location: login.php?Empty=" . urlencode("Please fill in both the username and password."));
        exit();  // Important to exit after a header redirect && check if login
    } else {

        $query = "SELECT * FROM employee WHERE user = '" . $_POST['user'] . "' AND password ='" . $_POST['password'] . "'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $_POST['user'];
            header("location: ../index.php");
        } else {
            header("location: login.php?Invalid=" . urlencode("Please enter correct username and password."));
            exit();
        }
    }
} else {
    echo 'Not working';
}
