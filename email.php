<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $emial = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['comments']);

    $to = "mm.miqueias.smartins@gmail.com";
    $subject = "Contato - Inspire Marcenaria";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$emial. "\n".
            "Mensagem: ".$mensagem;

    $header = "From:mm.miqueias.smartins@gmail.com". "\r\n".
                   "Reply-to:".$emial."\r\n".
                   "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header){
        echo("Email enviado com sucesso!");
    else{
        echo("O Email não pode ser enviado");
        }
    }
}
?>