<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sys Cadastro</title>
</head>
<body>
    <header class="system-header">
        <div class="system-menu-container">
            <nav class="logout-menu">
                <a href="/" class="sign-in-item">Entrar</a>
                <a href="/" class="sign-up-item">Cadastro</a>
            </nav>
        </div>
    </header>
    <main class="system-main">
        <div class="container-index">
            <div class="container-index-col">
                <h1 class="system-title">Olá, bem-vinda/o ao nosso sistema de cadastro fictício</h1>
                <p class="default-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="container-index-col">
                <form action="" method="post" class="index-login-form">
                    <fieldset class="index-form-row">
                        <div class="username-container">
                            <label for="index-user-username">Username:</label>
                            <input type="text" id="index-username" name="login-user-username">
                        </div>
                        <div class="password-container">
                            <label for="index-user-password">Senha:</label>
                            <input type="password" id="index-user-password" name="login-user-password">
                        </div>
                    </fieldset>

                    <div class="index-form-row">
                        <button type="submit">Entrar</button>
                        <a href="/">Cadastro</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>