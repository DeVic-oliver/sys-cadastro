<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once 'templates/containers/main/main-system-open.html'; ?>

        <h1>Sistema de Cadastro</h1>
        <h2>Olá, seja bem-vinda/o ao sistema fictício de cadastro de pessoas</h2>

        <form action="signup-successful.php" method="post">
            <fieldset class="form-row">
                <div class="form-col">
                    <label for="person-first-name">Nome:</label>
                    <input type="text" name="person-first-name" id="person-first-name">
                </div>

                <div class="form-col">
                    <label for="person-last-name">Sobrenome:</label>
                    <input type="text" name="person-last-name" id="person-last-name">
                </div>
            </fieldset>

            <fieldset class="form-row">
                <div class="form-col">
                    <label for="person-age">Idade:</label>
                    <input type="number" name="person-age" if="person-age">
                </div>
                <div class="form-col">
                    <label for="person-gender">Gênero:</label>
                    <select name="person-gender" id="person-gender">
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
                <label for="person-email">Email:</label>
                <input type="email" name="person-email" id="person-email">
            </fieldset>

            <div class="form-row">
                <button id="form-submit" type="submit">Enviar</button>
            </div>
        </form>
    </main>
</body>
</html>