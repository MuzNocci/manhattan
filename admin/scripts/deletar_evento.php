<?php 

include('connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_delete = 'DELETE FROM events WHERE idevent = '.$_POST['id'];

mysqli_query($conn, $sql_delete);

header('Location: ../');

mysqli_close($conn);
die();
?>