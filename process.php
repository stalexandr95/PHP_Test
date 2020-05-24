<?php

session_status();

$mysqli = new mysqli('localhost', 'root', 'root', 'e_stations')
or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$name = '';
$city = '';
$adress = '';
$work_from = '';
$work_to = '';


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    $work_from = $_POST['work_from'];
    $work_to = $_POST['work_to'];

    $mysqli->query("INSERT INTO stations (name, city, adress, work_from, work_to)
        VALUES ('$name', '$city', '$adress', '$work_from', '$work_to')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succes";

    header("Location: index.php");

}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM stations WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("Location: index.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM stations WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $city = $row['city'];
        $adress = $row['adress'];
        $work_from = $row['work_from'];
        $work_to = $row['work_to'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    $work_from = $_POST['work_from'];
    $work_to = $_POST['work_to'];

    $mysqli->query("UPDATE stations SET name='$name', city='$city', adress='$adress', work_from='$work_from', 
work_to='$work_to' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("Location: index.php");
}


if (isset($_POST['add'])) {
    $add_city = $_POST['add_city'];

    $mysqli->query("INSERT INTO cities (add_city)
        VALUES ('$add_city')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succes";

    header("Location: index.php");
}