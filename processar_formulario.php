<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $para = "seu_email@exemplo.com";
    $assunto_email = "Novo contato: " . $assunto;
    $corpo_email = "Nome: " . $nome . "\n";
    $corpo_email .= "Email: " . $email . "\n";
    $corpo_email .= "Assunto: " . $assunto . "\n";
    $corpo_email .= "Mensagem: " . $mensagem;
    
    // Enviar e-mail
    if (mail($para, $assunto_email, $corpo_email)) {
        echo "Obrigado! Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "O acesso direto a este script não é permitido.";
}
?>
