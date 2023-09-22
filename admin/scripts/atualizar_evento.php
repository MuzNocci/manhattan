<?php 

include('connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$event = $_POST['event'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$title = $_POST['title'];
$attraction = $_POST['attraction'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES["image"];
$imagename = $image['name'];
$imageexplode = explode('.', $image['name']);
$dir = "../../assets/upload_img/"; 

// Aqui terá a verificação dos dados enviados

$sql_record = 'INSERT INTO events (event, date, hour, title, attraction, description, price, image) VALUES ("'.$event.'","'.$date.'","'.$hour.'","'.$title.'","'.$attraction.'","'.$description.'","'.$price.'", "event_'.str_replace(':','_', date(DATE_ATOM)).substr($imagename, 0, 7).'")';

if ($imageexplode[sizeof($imageexplode)-1] != 'jpg' && $imageexplode[sizeof($imageexplode)-1] != 'png') {

    die('Não é permitido envio de arquivos do tipo '.strtoupper($imageexplode[sizeof($imageexplode)-1]).'.');

}else{

    mysqli_query($conn, $sql_record);
    move_uploaded_file($image["tmp_name"], "$dir/event_".str_replace(':','_', date(DATE_ATOM)).$image["name"]);

}

header('Location: ../');

mysqli_close($conn);
die();
?>