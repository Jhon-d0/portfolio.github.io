<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);
    $mensagem = addcslashes($_POST['mensagem']);
    $enviar = addcslashes($_POST['enviar']);

    $para = "joaodavidmachado73@gmail.com";
    $assunto = "Coleta de dados - Portfólio | João David";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: joaodavidmachado73@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>