<?php

    include('Conectar.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $botao = $_POST['entrar'];

    if(isset($_POST['entrar']))
        {
            $sql = "SELECT * FROM cliente WHERE ds_email = '$email' AND ds_senha = '$senha'";
            $result = mysqli_query($conexao, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('location:Logado.php');
            }
            else
            {
                unset ($_SESSION['email']);
                unset ($_SESSION['senha']);
                echo"<script> alert('Login e/ou senha incorreta!');
                window.location.href='Login.html';</script>";
            }
        }
?>