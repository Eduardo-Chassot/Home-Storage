<?php 
require_once('codigos/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home Storage</title>
    <?php require_once('includes/topo.php'); ?>
</head>
<body>
</body>
    <table class='table'>
        <tr>
            <td>Produto</td>
            <td>Quantiedade</td>
        </tr>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/item.js"></script>
    <script>
        console.log("log");
        var resultados = buscarAjax();
        var table = $('#table');
        table.html(resultados);
    </script>
</html>

<?php

?>