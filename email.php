<?php include "functions.php";
echo "ok";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $users=get_users();?>
<?php foreach ($users as $user):
    $template="hello dear #name# . {email}";

    ?>
<p><?php
    $template =str_replace(array("#name#","{email}"),array($user['name'],$user['email'],),$template) ;
    echo $template;?></p>
<?php endforeach;?>
</body>
</html>