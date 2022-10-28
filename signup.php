<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <h1>Sistema de Cadastro</h1>
        <h2>Olá, seja bem-vinda/o ao sistema fictício de cadastro de pessoas</h2>

        <form action="/sys-cadastro/controller/client-save.php" method="post">
            <fieldset class="form-row">
                <div class="form-col">
                    <label for="client-first-name">Nome:</label>
                    <input type="text" name="client-first-name" id="client-first-name">
                </div>

                <div class="form-col">
                    <label for="client-last-name">Sobrenome:</label>
                    <input type="text" name="client-last-name" id="client-last-name">
                </div>
            </fieldset>

            <fieldset class="form-row">
                <label for="client-username">Usuário:</label>
                <input type="text" name="client-username" id="client-username">
            </fieldset>

            <fieldset class="form-row">
                <div class="form-col">
                    <label for="client-age">Idade:</label>
                    <input type="text" name="client-age" id="client-age">
                </div>
                <div class="form-col">
                    <label for="client-gender">Gênero:</label>
                    <select name="client-gender" id="client-gender">
                        <option value="cisgender">Cis</option>
                        <option value="transgender">Trans</option>
                        <option value="binary">Binário</option>
                        <option value="non-binary">Não binário</option>
                        <option value="other">Outro</option>
                        <option value="not-mentioned">Prefiro não dizer</option>
                    </select>
                </div>
            </fieldset>

            <fieldset class="form-row">
                <label for="client-email">Email:</label>
                <input type="email" name="client-email" id="client-email">
            </fieldset>

            <fieldset class="form-row">
                <label for="client-password">Senha:</label>
                <input type="password" name="client-password" id="client-password">
            </fieldset>

            <div class="form-row">
                <button id="form-submit" type="submit">Enviar</button>
            </div>
        </form>
    </main>
</body>
</html>