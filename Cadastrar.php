
<?php
    include('Conectar.php');
    if(isset($_POST['salvar']))
    {

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $tel = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];   
        $senha = $_POST['senha'];

        $sql = "INSERT INTO cliente (id_cpf, nm_nome, dt_nasc, id_telefone, ds_endreco, ds_email, ds_senha) VALUES ('$cpf', '$nome','$data', '$tel', '$endereco', '$email', '$senha')";

        if(mysqli_query($conexao, $sql))
        {
            echo"<script> alert('Gravado com sucesso') </script>";
        }

            else
            {
                echo"<script> alert('Algo de errado nao esta certo tente novamente :P');
                    window.location.href='Cadastro.html';</script>";
            }

    }
        else{}
    
?>