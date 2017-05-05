
<?php
    session_start();
    if (!empty( $_GET['atividade'])) {
        $_SESSION['atividades'][] = $_GET['atividade'];
    }

    ?>






<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>

<form action="">

    <input type="text" name="atividade" placeholder="ex: comer lasanha">
    <input type="submit" value="cadastrar">
</form>

<h2>Lista de atividades</h2>
<ol>
        <?php foreach ($_SESSION['atividades'] as $activ): ?>

            <li><?= $activ ?></li>

        <?php endforeach;?>

</ol>
</body>
</html>
