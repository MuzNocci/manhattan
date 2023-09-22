<?php 

include('connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['idevent'];
$event = $_POST['event'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$title = $_POST['title'];
$attraction = $_POST['attraction'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES["image"];
$old_image = $_POST["old_image"];
$imagename = $image['name'];
$imageexplode = explode('.', $image['name']);
$dir = "../../assets/upload_img/"; 


if (empty($image) || $imagename == ''){

    $sql_record = 'UPDATE events SET event="'.$event.'", date="'.$date.'", hour="'.$hour.'", title="'.$title.'", attraction="'.$attraction.'", description="'.$description.'", price="'.$price.'" WHERE idevent='.$id;
    mysqli_query($conn, $sql_record);

}else{

    $sql_record = 'UPDATE events SET event="'.$event.'", date="'.$date.'", hour="'.$hour.'", title="'.$title.'", attraction="'.$attraction.'", description="'.$description.'", price="'.$price.'", image="event_'.str_replace(':','_', date(DATE_ATOM)).substr($imagename, 0, 7).'" WHERE idevent='.$id;

    if ($imageexplode[sizeof($imageexplode)-1] != 'jpg' && $imageexplode[sizeof($imageexplode)-1] != 'png') {
    
        die('Não é permitido envio de arquivos do tipo '.strtoupper($imageexplode[sizeof($imageexplode)-1]).'.');
    
    }else{
    
        mysqli_query($conn, $sql_record);
        unlink($dir.'/'.$old_image);
        move_uploaded_file($image["tmp_name"], "$dir/event_".str_replace(':','_', date(DATE_ATOM)).$image["name"]);

    }

}


header('Location: ../');

mysqli_close($conn);
die();
?>