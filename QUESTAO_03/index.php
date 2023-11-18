<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">Construsite Brasil</header>
    <main class="main">
        <div class="columnName">
            <h3 class="titleName">Nome: </h3>
            <p class="name">Gabriel Henrique</p>
        </div>
        <div class="columnForm">
            <h3 class="titleForm">Mensagem:</h3>
            <form method="post" action="php/Validate.php" id=form>
                <input type="text" name="nName" id="iName" class="input" placeholder="Nome*" maxlength="30" required>
                <input type="tel" name="nTel" id="iTel" class="input" placeholder="Telefone*" min="9" max="10" required>
                <input type="email" name="nEmail" id="iEmail" class="input" placeholder="Email*" required>
                <textarea name="nMessage" id="iMessage" cols="30" rows="10" class="inputTextArea" placeholder="Mensagem*" required></textarea>
                <button type="submit" class="buttonSubmit" name="send" id="buttonSubmit">Enviar Mensagem</button>
            </form>
        </div>
    </main>
    <script src="js/Validate.js"></script>
</body>
</html>