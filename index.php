<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsivo em dispositivos móveis -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css"> <!-- Arquivo de estilo personalizado -->
  <title>Currículo - APO</title> <!-- Título da página -->
</head>
<body>
  <h2>GERADOR DE CURRÍCULO</h2>
  <h4>Dados Pessoais e de Contato</h4>

  <!-- Formulário em si -->
  <form method="post" action="processar.php">
    <!-- Primeira seção do formulário: Dados Pessoais -->
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputName">Nome:</label>
        <input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome Completo" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputDate">Data de Nascimento:</label>
        <input type="date" class="form-control" id="inputDate" name="date" placeholder="dd/mm/aaaa" required>
      </div>
    </div>
<!-- Segunda seção do formulário: Informações de Contato -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email:</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="nome@exemplo.com" required>
      </div>

      <div class="form-group col-md-6">
        <label for="inputcontato">Contato:</label>
        <input type="tel" class="form-control" id="inputcontato" name="contact" placeholder="(ddd) 99999-9999" required>
      </div>
    </div>
<!-- Terceira seção do formulário: Endereço -->
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputAddress">Endereço:</label>
        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Rua das Flores, nº 100" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputAddonaddress">Complemento:</label>
        <input type="text" class="form-control" id="inputAddonaddress" name="addonaddress" placeholder="Bloco 5, Apto. 36, etc..." required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade:</label>
        <input type="text" class="form-control" id="inputCity" name="city" placeholder="Cidade" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputEstado">Estado:</label>
        <select name="estado[]" class="form-control" required>
          <option value="" selected>Selecione o seu Estado</option>
          <option value="AC">Acre - AC</option>
          <option value="AP">Amapá - AP</option>
          <option value="DF">Distrito Federal - DF</option>
          <option value="MG">Minas Gerais - MG</option>
          <option value="PR">Paraná - PR</option>
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputCEP">CEP:</label>
        <input type="text" class="form-control" id="inputCEP" name="cep" placeholder="80000-000">
      </div>
    </div>
<!-- Quarta seção do formulário: Escolaridade -->
    <h4>Escolaridade</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <select name="maior_formacao[]" class="form-control" required>
          <option selected>Selecione a sua Escolaridade</option>
          <option>Ensino Fundamental</option>
          <option>Ensino Médio</option>
          <option>Ensino Superior</option>
          <option>Pós Graduação</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputCouse">Cursos:</label>
        <textarea class="form-control" id="inputCouse" name="couse" placeholder="Curso de Graduação/Profissionalizante/Idioma"></textarea>
      </div>
    </div>
<!-- Sexta seção do formulário: Experiência Profissional -->
    <h4>Experiência Profissional</h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCompany1">Empresa e Função 1</label>
        <input type="text" class="form-control" id="inputCompany1" name="empresa1" placeholder="Nome da Empresa 1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPeriod1">Período de Trabalho 1</label>
        <input type="text" class="form-control" id="inputPeriod1" name="periodo1" placeholder="Exemplo - Jan/2020 - Out/2023">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCompany2">Empresa e Função 2</label>
        <input type="text" class="form-control" id="inputCompany2" name="empresa2" placeholder="Nome da Empresa 2">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPeriod2">Período de Trabalho 2</label>
        <input type="text" class="form-control" id="inputPeriod2" name="periodo2" placeholder="Exemplo - Jan/2020 - Out/2023">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCompany3">Empresa e Função 3</label>
        <input type="text" class="form-control" id="inputCompany3" name="empresa3" placeholder="Nome da Empresa 3">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPeriod3">Período de Trabalho 3</label>
        <input type="text" class="form-control" id="inputPeriod3" name="periodo3" placeholder="Exemplo - Jan/2020 - Out/2023">
      </div>
    </div>

    <!-- Sétima seção do formulário: Habilidades -->

    <h4>Habilidades</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="habilidades">Descreva as suas principais habilidades:</label>
        <input type="text" class="form-control" id="habilidades" name="habilidades">
      </div>
    </div>
<!-- Botão de Envio -->
    <input type="submit" class="btn btn-primary" value="Enviar">
  </form>

<!-- Bootstrap JS para funcionalidades de componentes interativos -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>