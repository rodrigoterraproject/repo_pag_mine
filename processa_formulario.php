<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Aqui você pode realizar qualquer ação desejada com os dados
    // Por exemplo, salvar no banco de dados ou enviar por e-mail

    // Exemplo de exibição dos dados (apenas para fins de demonstração)
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
    // A senha não deve ser exibida por motivos de segurança
    // echo "Senha: " . $senha . "<br>";
} else {
    // Se o formulário não foi submetido, redireciona para a página inicial
    header("Location: index.html");
    exit();
}
?>
