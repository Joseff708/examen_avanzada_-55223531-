<?php

    include "../model/conexDB.php";
    include "../model/notas.php";
    include "../controller/notasController.php";
    use model\Notas;
    use controller\NotasController;
    $notasController = new controller\NotasController();
    $notas = $notasController->getAllNotas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notas</title>
</head>
<body>
    <form action="">registar nota</form>
    <div>
        <label for="registrar">nombre</label>
        <input type="text" name="nombre">
    </div>
     <div>
        <label for="registrar">decripcion </label>
        <input type="text" name="decripcion">
    </div> 
    <div>
        <label for="registrar">nota</label>
        <input type="number" name="nota" min="0" max="5" >
    </div>
    <button type="submit">registrar</button>
<br>
<h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            foreach ($notas as $nota) {
                echo "<tr>";
                echo "<td>{$nota->id}</td>";
                echo "<td>{$nota->nombre}</td>";
                echo "<td>{$nota->descripcion}</td>";
                echo "<td>{$nota->nota}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</h1>
</body>
</html>