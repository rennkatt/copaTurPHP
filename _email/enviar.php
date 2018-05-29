<?php

if(isset($_POST['enviar'])){
    include "./config.php";
    include './phpmailer/PHPMailerAutoload.php';
    
    $nomerr = "";
    $emailrr = "";
    $assuntorr = "";
    $mensagemrr = "";
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty($_POST["nome"])){
        $nomerr = "Campo não preenchido";
    }else{
        $nome = $_POST["nome"];
    }

    if(empty($_POST["email"])){
        $emailrr = "Campo não preenchido";
    }else{
        $email = $_POST["email"];
    }

    if(empty($_POST["assunto"])){
        $assuntorr = "Campo não preenchido";
    }else{
        $assunto = $_POST["assunto"];
    }

    if(empty($_POST["mensagem"])){
        $mensagemrr = "Campo não preenchido";
    }else{
        $mensagem = $_POST["mensagem"];
    }
}
    $mail = new PHPMailer;
    
    $mail->isSMTP();
    
    $mail->SMTPDebug= 2;
    
    $mail->Debugoutput = 'html';
    
    $mail->Host = 'smtp.gmail.com';
    
    $mail->Port = 587;
    
    $mail->SMTPSecure = 'tls';
    
    $mail->SMTPAuth = true;
    
    $mail->Username = EMAIL_CONFIG;
    $mail->Password = SENHA_CONFIG;
    
    $mail->setFrom(EMAIL_CONFIG,"Contato do site");
    
    $mail->addAddress('renatomoura557@yahoo.com.br');
    
    $mail->Subject= "Contato no site";
    
    $msg = "Contato de ".$nome."\n"
            . "email: ".$email."\n"
            . "Assunto: ".$assunto."\n"
            . "mensagem: ".$mensagem;
    
    $mail->Body = $msg;
    
    if ($mail->Send()) {
        header("Location:../_visao/index.php?mail=success#contact");
    }else{
        header("Location:../_visao/index.php?mail=fail#contact");
    }
}



?>
