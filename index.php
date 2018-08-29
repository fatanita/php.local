<?php
include "functions.php";
$bg="#FFF";
if(isset($_POST['send'])){
    $bg=select_bg($_POST['background']);
}

$users=get_users();
?>
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
<body style="background-color: <?php echo $bg;?>">
<!--<form action="" method="post">
    <input type="radio" name="background" value="red">RED
    <input type="radio" name="background" value="blue">BLUE
    <input type="radio" name="background" value="green">GREEN
    <input type="submit" name="send" value="send">
</form>-->
<table border="1px solid black">
    <?php /*for($i=0;$i<=count($users)-1;$user=$users['$i']){

    }*/?>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>count</th>
    </tr>
    <?php
    echo "<pre>";
    var_dump($users);
    echo "</pre>";
    ?>
    <?php foreach($users as $user):?>
    <tr>
    <td><?php echo $user['id']?></td>
    <td><?php echo $user['name']?></td>
    <td><?php echo $user['email']?></td>
    <td></td>
    </tr>
    <?php endforeach;?>


</table>
</body>
</html>
