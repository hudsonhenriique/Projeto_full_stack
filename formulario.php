<?php
if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $nome_animal = $_POST['nome_animal'];
    $telefone = $_POST['telefone'];
    $tipo_animal = $_POST['tipo_animal'];
    $tipo_atendimento = $_POST['tipo_atendimento'];
    $data_atendimento = $_POST['data_atendimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $query = "INSERT INTO usuarios (nome,nome_animal,telefone, tipo_animal,tipo_atendimento,data_atendimento, cidade, estado, endereco) 
              VALUES ('$nome','$nome_animal', '$telefone', '$tipo_animal', '$tipo_atendimento', '$data_atendimento', '$cidade', '$estado', '$endereco')";
    
    $result = mysqli_query($conexao, $query);

    if ($result) {
        // Armazene os dados no localStorage e redirecione
        echo '<script>
                localStorage.setItem("nome", "' . $nome . '");
                localStorage.setItem("nome_animal", "' . $nome_animal . '");
                localStorage.setItem("telefone", "' . $telefone . '");
                localStorage.setItem("tipo_animal", "' . $tipo_animal . '");
                localStorage.setItem("tipo_atendimento", "' . $tipo_atendimento . '");
                localStorage.setItem("data_atendimento", "' . $data_atendimento . '");
                localStorage.setItem("cidade", "' . $cidade . '");
                localStorage.setItem("estado", "' . $estado . '");
                localStorage.setItem("endereco", "' . $endereco . '");
                // Redirecionamento após envio bem-sucedido
                window.location.href = "sucesso.php";
              </script>';
    } else {
        // Exibir erro caso haja problemas na inserção
        echo 'Erro ao inserir dados: '.mysqli_error($conexao);
    }
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styles/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Formulário Clientes</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_animal" id="nome_animal" class="inputUser" required>
                    <label for="nome_animal" class="labelInput">Nome do Animal</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Tipo de Animal:</p>
                <input type="radio" id="cachorro" name="tipo_animal" value="cachorro" required>
                <label for="cachorro">Cachorro</label>
                <br>
                <input type="radio" id="gato" name="tipo_animal" value="gato" required>
                <label for="gato">Gato</label>
                <br>
                <input type="radio" id="passaro" name="tipo_animal" value="passaro" required>
                <label for="passaro">Passaro</label>              
                <br><br>
                <p>Tipo de Atendimento:</p>
                <input type="radio" id="tosa" name="tipo_atendimento" value="tosa" required>
                <label for="tosa">Tosa</label>
                <br>
                <input type="radio" id="banho" name="tipo_atendimento" value="banho" required>
                <label for="banho">Banho</label>
                <br>
                <input type="radio" id="consulta" name="tipo_atendimento" value="consulta" required>
                <label for="consulta">Consulta</label>
                <br>
                <input type="radio" id="medicamento" name="tipo_atendimento" value="medicamento" required>
                <label for="medicamento">Medicamento</label>
                <br>
                <input type="radio" id="hospedagem" name="tipo_atendimento" value="hospedagem" required>
                <label for="hospedagem">Hospedagem</label>
                <br><br>
                <label for="data_atendimento"><b>Data de Atendimento:</b></label>
                <input type="date" name="data_atendimento" id="data_atendimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>
