<?php

session_start();

include('scripts/connection_db.php');

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
            <div style='width:90%; height:100px; text-align:left; padding: 30px 0'>
                <a href='./'><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
            </div>
        </div>

        <div class='d-flex justify-content-center'>
            <div style='width:90%;'>

                <form action="./scripts/cadastrar_evento.php" method="post" enctype="multipart/form-data" style="margin-bottom:40px;">

                    <div class="form-group col-md-6" style="margin-bottom:20px;">
                        <label for="event">Evento</label>
                        <input type="text" class="form-control" id="event" name="event" placeholder="Evento">
                    </div>

                    <div class="form-group col-md-2" style="margin-bottom:20px;">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="DD/MM/AAAA">
                    </div>

                    <div class="form-group col-md-2" style="margin-bottom:20px;">
                        <label for="hour">Hora</label>
                        <input type="text" class="form-control" id="hour" name="hour" placeholder="00:00:00">
                    </div>

                    <div class="form-group col-md-6" style="margin-bottom:20px;">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                    </div>

                    <div class="form-group col-md-6" style="margin-bottom:20px;">
                        <label for="attraction">Atrações</label>
                        <input type="text" class="form-control" id="attraction" name="attraction" placeholder="Atrações">
                    </div>

                    <div class="form-group col-md-6" style="margin-bottom:20px;">
                        <label for="description">Descrição</label>
                        <textarea rows="4" class="form-control" id="description" name="description" placeholder="Descrição"></textarea>
                    </div>

                    <div class="form-group col-md-2" style="margin-bottom:20px;">
                        <label for="price">Preço</label>
                        <input type="float" class="form-control" id="price" name="price" placeholder="00,00">
                    </div>

                    <div class="form-group col-md-6" style="margin-bottom:20px;">
                        <label for="image">Imagem do Evento</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Cadastrar Evento</button>
                </form>

            </div>
        </div>

    </body>

</html>
<?php
    mysqli_close($conn)
?>