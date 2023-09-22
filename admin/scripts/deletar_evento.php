<?php 

include('connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$events = mysqli_query($conn, 'SELECT * FROM events WHERE idevent = '.$id);
while ($dados = mysqli_fetch_array($events)) {
    unlink($dir.'/'.$dados['image']);
}

$sql_delete = 'DELETE FROM events WHERE idevent = '.$id;
mysqli_query($conn, $sql_delete);

header('Location: ../');

mysqli_close($conn);
die();
?>