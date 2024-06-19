<?php
 $nome = addslashes($_POST['name']);
 $email = addslashes($_POST['email']);
 $mensagem = addslashes($_POST['mesage']);

 $para = "tecnologiatracto@gmail.com";
 $assunto = "Mensagem - Tracto";

 $corpo = "Nome: ".$name."\n"."E-Mail: ".$email."\n"."Mensagem: ".$mesage;

 $cabeca = "From teste@gmai.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

 if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Enviado com sucesso!");
    }else{
      echo("Houve um erro ao enviar!");  
    }
?>