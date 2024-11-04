<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_func = $_POST['login_func'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM funcionarios
    WHERE login_func = '$login_func'
    AND senha = '$senha'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Liberado!";
        header('location: boasvindas.html');
    } else {
        echo "Usuário ou senha inválidos!";
        echo "<a href= 'index.html'>Voltar</a>";
    }
}