<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table border="1px solid red">
    <?php for($i=0;$i<=10;$i++):?>
    <tr>
        <?php for($j=0;$j<=10;$j++):?>
        <?php
         $red=rand(0,225);
         $blue=rand(0,225);
         $green=rand(0,225);
         ?>
        <td style="background-color: rgb(<?php echo rand(0,255) . "," .rand(0,255)."," .rand(0,255) ?>)"><?php echo $i*$j?></td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>
</body>
</html>