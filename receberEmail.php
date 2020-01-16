<?php

$email = $_REQUEST["emailUsuario"];

if($email == ""){
    echo "<h1>Email não foi inserido corretamente</h1>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>O email <?php echo $email; ?> foi registrado com sucesso!</h1>
</body>
</html>