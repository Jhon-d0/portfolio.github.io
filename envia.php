 <?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize and validate inputs
        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
        $mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);

        // Verifica se os campos necessários estão preenchidos
        if (empty($nome) || empty($email) || empty($mensagem)) {
            echo "Por favor, preencha todos os campos obrigatórios.";
            exit;
        }

        // Verifica se o e-mail é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "O e-mail fornecido não é válido.";
            exit;
        }

        // E-mail destinatário e assunto
        $para = "joaodavidmachado73@gmail.com";
        $assunto = "Coleta de dados - Portfólio | João David";

        // Corpo do e-mail
        $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $celular\nMensagem: $mensagem";

        // Cabeçalhos do e-mail
        $cabeca = "From: $email\n";
        $cabeca .= "Reply-To: $email\n";
        $cabeca .= "X-Mailer: PHP/" . phpversion();

        // Enviar e-mail
        if (mail($para, $assunto, $corpo, $cabeca)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Houve um erro ao enviar o e-mail!";
        }
    }





    // $nome = filter_var($_POST['nome']);
    // $email = filter_var($_POST['email']);
    // $celular = filter_var($_POST['celular']);
    // $mensagem = filter_var($_POST['mensagem']);
    // $enviar = filter_var($_POST['enviar']);

    // $para = "joaodavidmachado73@gmail.com";
    // $assunto = "Coleta de dados - Portfólio | João David";

    // $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$mensagem;

    // $cabeca = "From: joaodavidmachado73@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    // if(mail($para, $assunto, $corpo, $cabeca)){
    //     echo("E-mail enviado com sucesso!");
    // }else{
    //     echo("Houve um erro ao enviar o email!");
    // }

?>