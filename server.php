<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Personagem</title>
    <link rel="stylesheet" href="server_style.css">
</head>

<body>
    <nav class="menu">
        <h1>Dados Recebidos</h1>
        <a href="home_index.html">Página Inicial</a>
        <a href="dev_index.html">Página dos Desenvolvedores</a>
        <a href="output_index.html">Página do Personagem</a>
    </nav>

    <div class="container">
        <h2>Informações Pessoais</h2>
        <ul>
            <li><strong>Nome:</strong> <?php echo $_POST['name_nome']; ?></li>
            <li><strong>Data e Hora de Nascimento:</strong> <?php echo $_POST['name_nascimento']; ?></li>
            <li><strong>Nome do Pai:</strong> <?php echo $_POST['name_pai']; ?></li>
            <li><strong>Nome da Mãe:</strong> <?php echo $_POST['name_mae']; ?></li>
            <li><strong>Número de Dedos:</strong> <?php echo $_POST['name_dedos']; ?></li>
            <li><strong>Cor dos Olhos:</strong> <?php echo $_POST['name_olhos']; ?></li>
            <li><strong>E-mail:</strong> <?php echo $_POST['name_email']; ?></li>
            <li><strong>Número de Telefone:</strong> <?php echo $_POST['name_telefone']; ?></li>
            <li><strong>Número do Cartão:</strong> <?php echo $_POST['name']; ?></li>
            <li><strong>Senha do Cartão:</strong> <?php echo $_POST['name_senha']; ?></li>
        </ul>

        <h2>Gostos Pessoais</h2>
        <ul>
            <li><strong>Número Favorito:</strong> <?php echo $_POST['name_numero']; ?></li>
            <li><strong>Comida Preferida:</strong> <?php echo $_POST['name_comida']; ?></li>
            <li><strong>CEP da Cidade Favorita:</strong> <?php echo $_POST['name_cep']; ?></li>
            <li><strong>Mês e Ano Preferido:</strong> <?php echo $_POST['name_mes']; ?></li>
            <li><strong>Hora Preferida:</strong> <?php echo $_POST['name_hora']; ?></li>
            <li><strong>Cor Preferida:</strong> <?php echo $_POST['name_cor']; ?></li>
            <li><strong>Arquivo Preferido:</strong> <?php echo pathinfo($_FILES['name_arquivo']['name'], PATHINFO_BASENAME); ?></li>
        </ul>
    </div>

    <div class="rodape">
        <div class="aluno">
            <h4>Nome: Demétrio Cândido Coelho Neto</h4>
            <p><strong>Front-End</strong></p>
        </div>
        
        <div class="aluno">
            <h4>Nome: Maria Alice Felipe e Silva</h4>
            <p><strong>Back-End</strong></p>
        </div>

        <div class="infos_atividade">
            <h4>Prof. Marcelo Figueiredo Barbosa Júnior</h4>
            <h4>Trabalho de Autoria Web</h4>
            <h4>IFRN campus Santa Cruz</h4>
        </div>
    </div>
</body>

</html>
