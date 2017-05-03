<?php
    //inicia sessao de dados
    session_start();
    $_SESSION['atividades'][] =$_GET['atividade'];

?>

<!doctype html>
<html lang="en">


<body>

        <form method="get">
            <input type = "text" name = "atividade" placeholder="Levar bobby que">
            <input type = "submit" value = "Adicionar">


        </form>

            <h3>Exibir atividades</h3>

        <ul>
            <?php  foreach ($_SESSION['atividades'] as $ativ):   ?>
                <li> <?= $ativ; ?> </li>
             <?php  endforeach;  ?>

        </ul>

</body>
