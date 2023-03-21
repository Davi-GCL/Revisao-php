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
    date_default_timezone_set("America/sao_paulo"); //configura a data para o fuso-horario de saopaulo.
    echo "Data e hora: ".date("d/m/Y H:i:s");
?>