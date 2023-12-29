<?php
 $nome = addslashes($_POST['nome']);
 $email = addslashes($_POST['email']);
 $telefone = addslashes($_POST['telefone']);

$para = "darlan-talisson@hotmail.com";
$assunto = "coleta de dados - darlan";
$corpo = "Nome:".$nome. "\n". "E-mail:" .$email."\n"."elefone: ".$telefone;

$corpo = "From: darlan-talisson@hotmail.com"."\n"."Reply-to: ".$email. "\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo, $cabeca)) {
    echo("Email enviado com sucesso");
} else {
    echo("houve um erro");
}
?>