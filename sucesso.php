<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/sucesso.css" />
    <title>Sucesso</title>
</head>
<body>
<div id="form">
        <h1>Olá, confira os dados do seu atendimento:</h1>
        <p>Nome: <span id="nome"></span></p>
        <p>Nome do Animal: <span id="nome_animal"></span></p>
        <p>Telefone: <span id="telefone"></span></p>
        <p>Tipo de Animal: <span id="tipo_animal"></span></p>
        <p>Tipo de Atendimento: <span id="tipo_atendimento"></span></p>
        <p>Data de Atendimento: <span id="data_atendimento"></span></p>
        <p>Cidade: <span id="cidade"></span></p>
        <p>Estado: <span id="estado"></span></p>
        <p>Endereço: <span id="endereco"></span></p>
    </div>

    <script>
        // Recupere os dados do localStorage e exiba-os
        document.getElementById("nome").textContent = localStorage.getItem("nome");
        document.getElementById("nome_animal").textContent = localStorage.getItem("nome_animal");
        document.getElementById("telefone").textContent = localStorage.getItem("telefone");
        document.getElementById("tipo_animal").textContent = localStorage.getItem("tipo_animal");
        document.getElementById("tipo_atendimento").textContent = localStorage.getItem("tipo_atendimento");
        document.getElementById("data_atendimento").textContent = localStorage.getItem("data_atendimento");
        document.getElementById("cidade").textContent = localStorage.getItem("cidade");
        document.getElementById("estado").textContent = localStorage.getItem("estado");
        document.getElementById("endereco").textContent = localStorage.getItem("endereco");
    </script>
</body>
</html>




