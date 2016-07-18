<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="./public/css/boot.css">
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/main.js"></script>
</head>
<body>
    <section class="bg-verde">
        <article class="login boxshadow">
            <h1>Entrar</h1>
            <form name="formLogin" action="" method="post">
                
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Informe seu nome">

                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="******">

                <input type="submit" name="sendLogin" class="botao botao-preto" value="Entrar">

            </form>
            <div class="clear"></div>
        </article>
    </section>
</body>
</html>
