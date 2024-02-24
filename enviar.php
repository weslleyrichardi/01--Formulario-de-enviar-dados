<?php
    $nome = addslashes(trim($_POST["nome"]));
    $email = addslashes(trim($_POST["email"]));
    $telefone = addslashes(trim($_POST["telefone"]));

    $destino = "weslley.richard21@gmail.com";
    $assunto = "Dados coletados para Suporte";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: email@da.empresa.com"."\n"."Reply-to".$email."\n"."X-Mailer:PHP/".phpversion();

    if (mail($destino, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    }
    else {
        echo "Houve um erro ao enviar o e-mail!";
    }
?>