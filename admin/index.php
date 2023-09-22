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
        <title>Manhattan Admin - Eventos</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div class='d-flex justify-content-center'>
            <div style='width:90%; height:100px; text-align:right; padding: 30px 0'>
                <a href='./cadastro.php'><button type="button" class="btn btn-primary">Adicionar Evento</button></a>
            </div>
        </div>

        <div class='d-flex justify-content-center'>
            <table class="table" style='width:90%;'>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Título</th>
                        <th scope="col">Atrações</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Imagem</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                </thead>
                <thead>
                    <?php

                    $events = mysqli_query($conn, 'SELECT * FROM events');

                    while ($dados = mysqli_fetch_array($events)) {

                    echo '<tr>';
                    echo '  <th scope="col">'.$dados['idevent'].'</th>';
                    echo '  <th scope="col">'.$dados['event'].'</th>';
                    echo '  <th scope="col">'.$dados['date'].'</th>';
                    echo '  <th scope="col">'.$dados['hour'].'</th>';
                    echo '  <th scope="col">'.$dados['title'].'</th>';
                    echo '  <th scope="col">'.$dados['attraction'].'</th>';
                    echo '  <th scope="col">'.$dados['description'].'</th>';
                    echo '  <th scope="col">'.$dados['price'].'</th>';
                    if ($dados['image'] != ""){echo '  <th scope="col">Carregada</th>';}else{echo '  <th scope="col">Não carregada</th>';}
                    echo '  <th scope="col" style="width:40px"><form method="POST" action="atualizo.php"><input type="hidden" id="id" name="id" value="'.$dados['idevent'].'" /><button type="submit" alt="Editar" title="Editar" class="btn btn-primary btn-sm">E</button></form></th>';
                    echo '  <th scope="col" style="width:40px"><form method="POST" action="scripts/deletar_evento.php"><input type="hidden" id="id" name="id" value="'.$dados['idevent'].'" /><button type="submit" alt="Deletar" title="Deletar" class="btn btn-danger btn-sm">X</button></form></th>';
                    echo '</tr>';
            
                }
                ?>
                </thead>
            </table>
        </div>

    </body>

</html>
<?php
    mysqli_close($conn)
?>