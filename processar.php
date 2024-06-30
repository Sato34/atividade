<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="stylesphp.css">
</head>
<body>

    <?php

// Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Coleta e valida os dados do formulário
        $nome = isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : '';
        $data_nascimento = isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : '';
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
        $contato = isset($_POST["contact"]) ? htmlspecialchars($_POST["contact"]) : '';
        $endereco = isset($_POST["address"]) ? htmlspecialchars($_POST["address"]) : '';
        $complemento = isset($_POST["addonaddress"]) ? htmlspecialchars($_POST["addonaddress"]) : '';
        $cidade = isset($_POST["city"]) ? htmlspecialchars($_POST["city"]) : '';
        $estado = isset($_POST["estado"][0]) ? htmlspecialchars($_POST["estado"][0]) : '';
        $cep = isset($_POST["cep"]) ? htmlspecialchars($_POST["cep"]) : '';
        $escolaridade = isset($_POST["maior_formacao"][0]) ? htmlspecialchars($_POST["maior_formacao"][0]) : '';
        $cursos = isset($_POST["couse"]) ? htmlspecialchars($_POST["couse"]) : '';
        $habilidades = isset($_POST["habilidades"]) ? htmlspecialchars($_POST["habilidades"]) : '';

    // Construindo o formato do currículo em HTML
        $curriculo = "
        <h2>Currículo de $nome</h2>


        <h3>Dados Pessoais e de Contato</h3>


        <p><strong>Data de Nascimento:</strong> $data_nascimento</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Contato:</strong> $contato</p>
        <p><strong>Endereço:</strong> $endereco</p>
        <p><strong>Complemento:</strong> $complemento</p>
        <p><strong>Cidade:</strong> $cidade</p>
        <p><strong>Estado:</strong> $estado</p>
        <p><strong>CEP:</strong> $cep</p>

        <h3>Escolaridade</h3>
        <p><strong>Maior Formação:</strong> $escolaridade</p>
        <p><strong>Cursos:</strong><br>$cursos</p>

        <h3>Experiência Profissional</h3>";

    // Inicializa o array $experiencias com os dados recebidos do formulário
        $experiencias = array(
            array('empresa' => isset($_POST['empresa1']) ? htmlspecialchars($_POST['empresa1']) : '', 'periodo' => isset($_POST['periodo1']) ? htmlspecialchars($_POST['periodo1']) : ''),
            array('empresa' => isset($_POST['empresa2']) ? htmlspecialchars($_POST['empresa2']) : '', 'periodo' => isset($_POST['periodo2']) ? htmlspecialchars($_POST['periodo2']) : ''),
            array('empresa' => isset($_POST['empresa3']) ? htmlspecialchars($_POST['empresa3']) : '', 'periodo' => isset($_POST['periodo3']) ? htmlspecialchars($_POST['periodo3']) : ''),
        );

    // Exibindo os dados do array $experiencias
        foreach ($experiencias as $index => $exp) {
            $curriculo .= "<h4>Experiência " . ($index + 1) . "</h4>";
            $curriculo .= "<p><strong>Empresa:</strong> " . $exp['empresa'] . "</p>";
            $curriculo .= "<p><strong>Período:</strong> " . $exp['periodo'] . "</p>";
        }

    // Adiciona a seção de habilidades
        $curriculo .= "
        <h3>Habilidades</h3>
        <p>$habilidades</p>";


    // Imprimindo o currículo na tela
        echo $curriculo;

    // Botão para imprimir o currículo
        echo '<button class="btn-print" onclick="window.print()">Imprimir Currículo</button>';

    }

    ?>
</body>
</html>
