<?php

session_start();

include('connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Müller Nocciolli">
        <meta name="generator" content="">
        <title>Manhattan Admin - Adicionar Eventos</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div class='d-flex justify-content-center'>
            <div style='width:1200px; height:100px; text-align:left; padding: 30px'>
                <a href='./'><button type="button" class="btn btn-primary">Voltar</button></a>
            </div>
        </div>

        <div class='d-flex justify-content-center'>
            <div style='width:1200px;'>
                <form action="envia_evento.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="event" value="">
                    <input type="date" name="date" value="">
                    <input type="text" name="hour" value="">
                    <input type="text" name="title" value="">
                    <input type="text" name="attraction" value="">
                    <input type="text" name="description" value="">
                    <input type="text" name="price" value="">
                    <input name="image" type="file">
                    <input type="submit" class="btn btn-primary" value="Cadastrar Evento">
                </form>
            </div>
        </div>

    </body>

</html>
<?php
    mysqli_close($conn)
?>