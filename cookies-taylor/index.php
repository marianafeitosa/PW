<?php
include 'Manipulação.php';
$usuarioAtual = getUsuarioCookie();
$usuarioLogado = ($usuarioAtual !== null);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <script src="https://cdn.lordicon.com/lordicon-1.3.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>            
    <div>
            <img src="imagens/256-removebg-preview.png">
                </div>
    <div class="overlay">
        <div class="content">
        <header>Aviso de Cookies</header>
            <form method="post" action="index.php">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" value="<?= $usuarioAtual ?>">
                <?php if ($usuarioLogado) : ?>
                    <button type="submit" name="definirCookie">Editar Cookie</button>
                <?php else : ?>
                    <button type="submit" name="definirCookie">Definir Cookie</button>
                <?php endif; ?>
            </form>
            <?php if ($usuarioLogado) : ?>
                <p>Bem-vindo de volta, <?= $usuarioAtual ?>!</p>
            <?php else : ?>
                <p>Seja Bem-vindo</p>
            <?php endif; ?>
            <form method="post" action="index.php">
                <?php if ($usuarioLogado) : ?>
                    <button type="submit" name="excluirCookie">Excluir</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>