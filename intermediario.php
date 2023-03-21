<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisao intermediario</title>
</head>
<body>
    <h2>Calculando raiz quadrada</h2>
    <form action="" method="get">
        <input type="text" name="calcula" id="input" placeholder="Digite um numero">
    </form>
</body>
</html>

<?php
//Topico 1:
    // $arq = fopen("texto.txt","r") or die("Não foi possivel ler esse arquivo");
    // //$arq = file_get_contents("texto.txt");

    // echo fread($arq, filesize("texto.txt"));

    // fclose($arq);
//Topico 2:
    // $num = 5;
    // $fatorial = $num;
    
    // for($i = $num-1; $i > 0;$i--){
    //     $fatorial *= $i;
    // }

    // echo $fatorial;

//Topico 3:
    // $email = "luanS@ntana@gmail.com.br";

    // if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     echo "$email é valido!";
    // }
    // else{
    //     echo "$email NAO é valido";
    // }

//Topico 4:
    // date_default_timezone_set("America/sao_paulo"); //configura a data para o fuso-horario de saopaulo.
    // echo "Data e hora: ".date("d/m/Y H:i:s");

//Topico 5:
    if(isset($_GET["calcula"])){ //Verifica se ha a entrada do valor
        $num = $_GET["calcula"];
        $sqroot = sqrt($num);
        echo "Raiz quadrada de $num = $sqroot";
    }

?>

  